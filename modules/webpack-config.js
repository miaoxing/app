const webpack = require('webpack');
const path = require('path');
const HashAssetsPlugin = require('hash-assets-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

class WebpackConfig {
  constructor(options) {
    this.name = options.name;
    this.manifest = options.manifest || false;
    this.distDir = options.distDir || 'dist2';

    // 基于当前目录
    this.rootDir = process.cwd();
    this.buildDir = path.resolve(this.rootDir, this.distDir);
    this.isProd = process.env.NODE_ENV === 'production';
    this.useSourcemaps = !this.isProd;
    // 粗略通过命令行判断是否为热更新
    // xx/node xx/webpack-dev-server --hot --progress
    this.isHot = process.argv[2] === '--hot';
    // HMR不支持chunkhash，只支持hash，而HashAssetsPlugin不支持hash
    this.useVersioning = !this.isHot;
    this.publicPath = this.isProd ? '/' + this.distDir + '/' : 'http://localhost:8080/' + this.distDir + '/';
  }

  getStyleLoader() {
    return {
      loader: 'style-loader',
      options: {
        sourceMap: this.useSourcemaps
      }
    }
  }

  getCssLoader() {
    return {
      loader: 'css-loader',
      options: {
        sourceMap: this.useSourcemaps,
        minimize: this.isProd
      }
    }
  }

  getSassLoader() {
    return {
      loader: 'sass-loader',
      options: {
        sourceMap: this.useSourcemaps
      }
    };
  }

  getResolveUrlLoader() {
    return {
      loader: 'resolve-url-loader',
      options: {
        sourceMap: this.useSourcemaps
      }
    };
  }

  getEntries() {
    const entries = {};

    // 初始化通用的模块
    entries[this.name] = [];

    // https://github.com/gaearon/react-hot-loader
    if (this.isHot) {
      entries[this.name].push('react-hot-loader/patch');
    }

    // 不使用完整路径将提示 Module not found: Error
    entries[this.name].push(this.rootDir + `/vendor/miaoxing/${this.name}/modules/containers/${this.name}.js`);

    return entries;
  }

  getConfig() {
    const isProd = this.isProd;
    const useVersioning = this.useVersioning;

    const styleLoader = this.getStyleLoader();
    const cssLoader = this.getCssLoader();
    const sassLoader = this.getSassLoader();
    const resolveUrlLoader = this.getResolveUrlLoader();

    let cssLoaders = ExtractTextPlugin.extract({
      use: cssLoader,
      fallback: styleLoader
    });
    if (this.isHot) {
      cssLoaders = ['css-hot-loader'].concat(cssLoaders);
    }

    let sassLoaders = ExtractTextPlugin.extract({
      use: [
        cssLoader,
        resolveUrlLoader,
        sassLoader
      ],
      fallback: styleLoader
    });
    if (this.isHot) {
      sassLoaders = ['css-hot-loader'].concat(sassLoaders);
    }

    const config = {
      resolve: {
        modules: [
          __dirname,
          'vendor/miaoxing/app/modules',
          'node_modules'
        ]
      },
      // NOTE: 需直接传入结果，不能使用回调函数，否则HMR不生效
      entry: this.getEntries(),
      output: {
        path: this.buildDir,
        publicPath: this.publicPath,
        filename: useVersioning ? '[name]-[chunkhash:6].js' : '[name].js',
        chunkFilename: useVersioning ? '[name]-[chunkhash:6].js' : '[name].js'
      },
      module: {
        loaders: [
          {
            test: /\.(js|jsx)?/,
            exclude: /node_modules/,
            loader: 'babel-loader'
          },
          {
            test: /\.css$/,
            use: cssLoaders,
          },
          {
            test: /\.scss$/,
            use: sassLoaders,
          },
          {
            test: /\.(jpg|png|gif|svg|json|ttf|eot|woff(2)?)(\?[a-z0-9]+)?$/,
            loader: 'file-loader',
            options: {
              // 只支持hash，相当于contenthash
              // https://github.com/webpack-contrib/file-loader/issues/177
              name: useVersioning ? '[path][name]-[hash:6].[ext]' : '[path][name].[ext]'
            }
          }
        ]
      },
      externals: {
        'jquery': 'jQuery'
      },
      plugins: [
        new webpack.optimize.CommonsChunkPlugin({
          async: 'async',
          children: true,
          minChunks: 2
        }),
        new ExtractTextPlugin({
          filename: useVersioning ? '[name]-[chunkhash:6].css' : '[name].css'
        }),
        isProd ? new webpack.HashedModuleIdsPlugin() : new webpack.NamedModulesPlugin(),
        // new BundleAnalyzerPlugin(),
      ],
      // https://webpack.js.org/configuration/devtool/
      devtool: isProd ? '' : 'eval',
      devServer: {
        headers: {
          'Access-Control-Allow-Origin': '*'
        }
      }
    };

    if (this.manifest) {
      config.plugins.push(new webpack.optimize.CommonsChunkPlugin({
        name: (this.name ? this.name + '-' : '') + 'manifest',
        minChunks: Infinity
      }));
    }

    if (useVersioning) {
      config.plugins.push(this.getHashAssetsPluginConfig(this.buildDir));
    }

    if (isProd) {
      config.plugins.push(this.getUglifyJSPlugin());
      config.plugins.push(this.getWebpackLoaderOptionsPlugin());
      config.plugins.push(this.getWebpackDefinePlugin());
    }

    return config;
  }

  getWebpackDefinePlugin() {
    return new webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production')
    })
  }

  getWebpackLoaderOptionsPlugin() {
    return new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false
    })
  }

  getUglifyJSPlugin() {
    return new UglifyJSPlugin({
      cache: true,
      parallel: true
    });
  }

  getHashAssetsPluginConfig() {
    return new HashAssetsPlugin({
      filename: this.name + '-assets-hash.json',
      path: this.buildDir,
      hashLength: 6,
      prettyPrint: true,
      keyTemplate: function (filename) {
        var match = /(.+?)-\w{6}\.(js|css)$/.exec(filename);
        if (match) {
          return match[1] + '.' + match[2];
        } else {
          return filename;
        }
      }
    })
  }

  static build(options = {}) {
    const config = new WebpackConfig(options);
    return config.getConfig();
  }
}

module.exports = WebpackConfig;
