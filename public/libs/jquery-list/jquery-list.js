/**
 * @link https://github.com/paulirish/infinite-scroll
 * @link https://github.com/andferminiano/jquery-scroll-pagination
 * @link https://github.com/ximan/dropload
 */
(function ($) {
  var List = function (options) {
    options && $.extend(this, options);
    this.initialize();
  };

  $.extend(List.prototype, {
    $el: null,
    $container: $(window),
    $content: $(document),
    scrollOffset: 40,
    template: null,
    url: null,
    ajax: {},
    localData: false,
    $loading: null,
    loadingMsg: '<span class="list-loading-spinner"></span>努力加载中...',
    $finished: null,
    finishedMsg: '加载完毕',
    hideFinished: true,
    $empty: null,
    emptyMsg: '暂无记录',
    page: 1,
    filterExitingData: true,
    filterKey: 'id',
    filterData: {},
    beforeLoad: null,
    afterLoad: null,
    afterRender: null,
    afterRenderAll: null,
    topPullDownMsg: '↓下拉刷新',
    topReleaseMsg: '↑释放更新',

    // 初始化时的页面数
    topPage: 1,

    // 返回页面时,是否还原到上次浏览的位置
    keepScrollPosition: false,

    // 是否正在加载内容
    loading: false,

    // 开始拖动时的位置
    _startY: 0,

    // 总的移动距离
    _moveY: 0,

    // 拖动的方向
    _direction: null,

    initialize: function () {
      var self = this;

      this.filterData = {};
      this.topPage = this.page;

      if (this.localData) {
        if (this.localData.data.length) {
          this.render(this.localData);
          if (!this._isLastPage(this.localData)) {
            this.scroll();
          }
        } else {
          this.showEmpty();
        }
      } else {
        this.page = 0;
        this.loadData(function () {
          self.scroll();
        });
      }

      // 绑定列表的拖动事件
      this.$content.on({
        touchstart: $.proxy(this.touchStart, this),
        touchmove: $.proxy(this.touchMove, this),
        touchend: $.proxy(this.touchEnd, this)
      });
    },

    touchStart: function (e) {
      if (this.loading) {
        return;
      }
      this._startY = e.originalEvent.touches[0].pageY;
      this.touchScrollTop = this.$container.scrollTop();
    },

    touchMove: function (e) {
      // 如果不是从最顶部下拉,不做处理,认为只是普通的向下滚动
      if (this.touchScrollTop > 0) {
        return;
      }

      if (this.loading) {
        return;
      }

      // 判断是头部还是底部拖动
      var curY = e.originalEvent.touches[0].pageY;
      this._moveY = Math.abs(curY - this._startY);

      if (this._startY > curY) {
        this._direction = 'up';
      } else if (this._startY < curY) {
        this._direction = 'down';
      }

      if (this._direction !== 'down') {
        return;
      }

      e.preventDefault();

      this.showLoading('top', this.topPullDownMsg);

      var loadingHeight = 0;
      if (this._moveY <= this.scrollOffset) {
        // 在拖动范围内,提醒用户继续下拉
        loadingHeight = this._moveY;
        this.updateLoading(this.topPullDownMsg);
      } else if (this._moveY <= this.scrollOffset * 2) {
        // 在刷新范围内,提醒用户释放刷新
        loadingHeight = this.scrollOffset + (this._moveY - this.scrollOffset) * 0.5;
        this.updateLoading(this.topReleaseMsg);
      } else {
        // 超出2倍距离,减少向下移动的距离
        loadingHeight = this.scrollOffset + this.scrollOffset * 0.5 + (this._moveY - this.scrollOffset * 2) * 0.2;
      }
      this.$loading.height(loadingHeight);
    },

    touchEnd: function (e) {
      if (this.touchScrollTop > 0) {
        return;
      }

      if (this.loading) {
        return;
      }

      if (this._direction !== 'down') {
        return;
      }

      if (this._moveY > this.scrollOffset) {
        // 拖动距离大于阀值,加载新内容
        this.updateLoading(this.loadingMsg);
        this.loading = true;

        this.$loading.addClass('list-loading-transition');
        this.$loading.height(this.scrollOffset);

        var self = this;
        this.loadData(function () {
          self.hideLoading();
        }, 'top');
      } else {
        // 拖动距离太小,还原位置
        this.hideLoading();
      }
    },

    scroll: function () {
      var self = this;

      this.$container.on('scroll.list', function () {
        if (self.$finished) {
          return;
        }

        if (self.loading) {
          return;
        }

        var scrollTop = self.$container.scrollTop();
        if (self.$content.height() <= self.$container.height() + scrollTop + self.scrollOffset) {
          self.loading = true;
          self.loadData(function () {
            self.loading = false;
          });
        }
      });
    },

    loadData: function (fn, position) {
      position = position || 'bottom';

      var self = this;
      var loadPage;

      if (position == 'bottom') {
        this.page += 1;
        this.showLoading();
        loadPage = this.page;
      } else {
        // 如果是加载头部,即使是第一页,也允许重复加载
        if (this.topPage > 1) {
          this.topPage -= 1;
        }
        loadPage = this.topPage;
      }

      this.beforeLoad && this.beforeLoad(this, position);

      $.ajax($.extend({
        url: this.url,
        data: {
          page: loadPage
        },
        dataType: 'json',
        success: function (result) {
          self.hideLoading();
          self.render(result, position);

          if (loadPage === 1 && result.data.length === 0) {
            self.showEmpty();
          } else if (self._isLastPage(result)) {
            self.showFinished();
          }

          fn && fn();
          self.afterLoad && self.afterLoad(self, result);
        }
      }, this.ajax));
    },

    // 加载下一页的数据
    loadNextPage: function (fn) {
      var self = this;
      this.loading = true;
      this.loadData(function () {
        self.loading = false;
        fn()
      });
    },

    // 加载上一页的数据
    loadPrevPage: function (fn) {
      this.showLoading();
      this.loadData(fn, 'top');
    },

    _isLastPage: function (result) {
      return (result.page - 1) * result.rows + result.data.length == result.records;
    },

    // 在头部或底部显示提示信息,如加载中...
    showLoading: function (position, msg) {
      position = position || 'bottom';
      msg = msg || this.loadingMsg;

      if (!this.$loading) {
        this.$loading = $('<div class="list-loading list-loading-' + position + '">' + msg + '</div>');
        // 根据提供的位置,插入到列表头部或底部
        this.$loading[position == 'bottom' ? 'insertAfter' : 'insertBefore'](this.$el);
      }

      this.$loading.show();
    },

    updateLoading: function (msg) {
      this.$loading.html(msg);
    },

    hideLoading: function () {
      if (this.$loading.hasClass('list-loading-bottom')) {
        this.$loading.remove();
        this.$loading = null;
      } else {
        // 头部增加隐藏效果
        var self = this;
        this.$loading.on('webkitTransitionEnd transitionend', function () {
          $(this).remove();
          self.$loading = null;
          self.loading = false;
        });
        this.$loading.addClass('list-loading-transition');
        this.$loading.css('height', 0);
      }
    },

    showFinished: function () {
      var self = this;
      if (!this.$finished) {
        this.$finished = $('<div class="list-finished">' + this.finishedMsg + '</div>');
        this.$finished.insertAfter(this.$el);
      }
      this.$finished.show();
      if (this.hideFinished) {
        setTimeout(function () {
          self.$finished.hide();
        }, 2000);
      }
    },

    showEmpty: function () {
      if (!this.$empty) {
        this.$empty = $('<div class="list-empty">' + this.emptyMsg + '</div>');
        this.$empty.insertAfter(this.$el);
      }
    },

    // Render list item by specified data
    render: function (result, position) {
      position = position || 'bottom';
      var data = result.data;
      if (position == 'top') {
        data = data.reverse();
      }
      for (var i in data) {
        if (this.filterExitingData) {
          if (typeof this.filterData[data[i][this.filterKey]] != 'undefined') {
            continue;
          } else {
            this.filterData[data[i][this.filterKey]] = true;
          }
        }
        var template = this.template(data[i]);
        if (typeof template === 'string') {
          template = $.trim(template);
        }
        var $item = $(template);
        $item.data('list-data', data[i]);
        $item.data('list-page', result.page);

        // 如果加载的内容在头部,确保加载后原来的位置不变
        if (position == 'top') {
          var oldHeight = this.$content.height();
          var oldScroll = this.$container.scrollTop();
        }

        this.$el[position == 'bottom' ? 'append' : 'prepend']($item);

        if (position == 'top') {
          var top = oldScroll + this.$content.height() - oldHeight;
          this.$container.scrollTop(top)
        }

        this.afterRender && this.afterRender($item);
      }

      this.loadScroll();
    },

    // 还原列表到上次查看的位置
    loadScroll: function () {
      // 只有首次加载完成才还原位置
      if (!this.keepScrollPosition) {
        return;
      }
      this.keepScrollPosition = false;

      this._bindKeepScrollEvent();

      var id = this._getParam('id');
      if (!id) {
        return;
      }

      var $item = $('#' + id);
      if (!$item.length) {
        return;
      }

      var $container = this.$container;
      var curOffsetTop = $item.offset().top;
      var prevOffsetTop = parseInt(this._getParam('distance')) || 0;

      // 要滚动到的位置,相当于先向下滚动到项目所在的位置,再向上滚动原来的一段偏移
      // 因为向上的距离变小,所以用减法
      // 如果offset小于0,则是向下
      // 因为此时滚动条位置为0,所以不加入计算
      var scrollTo = curOffsetTop - prevOffsetTop;

      if (scrollTo < 0) {
        // 要滚动到顶部更上的位置,需要加载上一页
        this.loadPrevPage(function () {
          // 加上滚动条的位置,才是项目相对顶部的位置
          scrollTo = $item.offset().top - prevOffsetTop + $container.scrollTop();
          $container.scrollTop(scrollTo);
        });
      } else if (curOffsetTop + prevOffsetTop + $item.outerHeight() > $container.prop('scrollHeight')) {
        // 要滚动到的位置 + 上面的偏移 + 项目的整体高度 > 容器的内部高度, 说明已经超出容器
        // 要滚动到底部更下的位置,需要加载下一页
        this.loadNextPage(function () {
          $container.scrollTop(scrollTo);
        });
      } else {
        // 滚动到当前容器中,直接滚动
        $container.scrollTop(scrollTo);
      }
    },

    _bindKeepScrollEvent: function () {
      // 点击子项目进入项目页面前,将页数等信息更新到URL中
      var self = this;
      this.$content.on('click', '> *', function () {
        var $item = $(this);
        var url = self._updateParams(window.location.href, {
          id: $item.attr('id'),
          page: $item.data('list-page'),
          distance: $item.offset().top
        });
        history.replaceState({}, document.title, url);
      });
    },

    // 将指定的参数更新到URL中,只支持name=value的结构
    _updateParams: function (url, params) {
      $.each(params, function (name, value) {
        var regex = new RegExp(name + '=[^&]+');
        if (regex.test(url)) {
          url = url.replace(regex, name + '=' + value);
        } else {
          var param = {};
          param[name] = value;
          url += (-1 == url.indexOf('?') ? '?' : '&') + $.param(param);
        }
      });
      return url;
    },

    // 获取当前URL中的参数
    _getParam: function (name) {
      name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
      var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
      return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    },

    destroy: function () {
      this.$container.off('scroll.list');
      this.$el.html('');
      this.$el.removeData('list');
      this.$empty && this.$empty.remove();
      this.$loading && this.$loading.remove();
      this.$finished && this.$finished.remove();
    },

    filter: function (params) {
      this.$el.html('');
      this.page = 0;
      this.url = $.appendUrl(this.url, params);
      this.loadData(function () {
      });
    }
  });

  $.fn.list = function (option) {
    var pluginArgs = arguments;
    return this.each(function () {
      var $this = $(this);
      var data = $this.data('list');
      var options = typeof option == 'object' ? option : {};
      options.$el = $this;

      if (!data) {
        $this.data('list', (data = new List(options)));
      } else {
        $.extend(data, options);
      }

      if (typeof option == 'string') {
        var args = [];
        for (var i in pluginArgs) {
          if (i != 0) {
            args.push(pluginArgs[i]);
          }
        }
        data[option].apply(data, args);
      }
    });
  };
  $.fn.list.Constructor = List;
}($));
