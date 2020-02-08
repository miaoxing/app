const webpack = require('webpack');
const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const ManifestPlugin = require('webpack-manifest-plugin');
const HappyPack = require('happypack');
const ExtractCssChunks = require("extract-css-chunks-webpack-plugin");
// const HardSourceWebpackPlugin = require('hard-source-webpack-plugin');
// const SpeedMeasurePlugin = require("speed-measure-webpack-plugin");
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

class WebpackConfig {
  constructor(options) {
    // 基于当前目录
    this.rootDir = process.cwd();

    this.name = options.name;
    this.manifest = options.manifest || false;
    this.distDir = options.distDir || 'dist';
    this.buildDir = options.buildDir || path.resolve(this.rootDir, 'public/' + this.distDir);
    this.externals = options.externals || {};
    if (options.getEntries) {
      this.getEntries = options.getEntries;
    }

    this.isProd = process.env.NODE_ENV === 'production';
    this.isHot = path.basename(require.main.filename) === 'webpack-dev-server.js';
    // HMR不支持chunkhash，只支持hash
    this.useVersioning = !this.isHot;
    this.publicPath = this.isProd ? '/' + this.distDir + '/' : 'http://localhost:8080/' + this.distDir + '/';
  }

  getEntries() {
    const entries = {};

    // 初始化通用的模块
    entries[this.name] = [];

    // 不使用完整路径将提示 Module not found: Error
    entries[this.name].push(this.rootDir + `/plugins/${this.name}/resources/containers/${this.name}.js`);

    return entries;
  }

  getConfig() {
    const isProd = this.isProd;
    const useVersioning = this.useVersioning;

    const config = {
      mode: this.isProd ? 'production' : 'development',
      devtool: this.isProd ? false : 'eval',
      resolve: {
        extensions: ['.tsx', '.ts', '.js'],
        modules: [
          this.rootDir,
          'plugins/app/resources/modules',
          'node_modules'
        ],
        alias: {
          'react-dom': '@hot-loader/react-dom',
        },
      },
      // NOTE: 需直接传入结果，不能使用回调函数，否则HMR不生效
      entry: this.getEntries(),
      output: {
        path: this.buildDir,
        publicPath: this.publicPath,
        filename: useVersioning ? '[name]-[chunkhash:6].js' : '[name].js',
        chunkFilename: useVersioning ? '[name]-[chunkhash:6].js' : '[name].js',
        pathinfo: false,
      },
      module: {
        rules: [
          {
            test: /\.tsx?$/,
            loader: 'awesome-typescript-loader',
            exclude: /node_modules/,
            options: {
              useCache: true,
              cacheDirectory: 'node_modules/.cache/awcache',
              forceIsolatedModules: true,
            }
          },
          {
            test: /.js$/,
            use: 'happypack/loader',
            exclude: /node_modules/,
          },
          {
            test: /\.(sa|sc|c)ss$/,
            use: [
              this.getExtractCssChunksLoader(),
              'css-loader',
              {
                loader: 'postcss-loader',
                options: {
                  plugins: function () {
                    return [
                      require('autoprefixer')
                    ];
                  }
                }
              },
              'sass-loader'
            ]
          },
          {
            test: /\.less$/,
            use: [
              this.getExtractCssChunksLoader(),
              'css-loader',
              {
                loader: 'less-loader',
                options: {
                  javascriptEnabled: true
                }
              }
            ]
          },
          {
            test: /\.(jpg|png|gif|svg|ttf|eot|woff(2)?)(\?[a-z0-9]+)?$/,
            loader: 'file-loader',
            options: {
              // 只支持hash，相当于contenthash
              // https://github.com/webpack-contrib/file-loader/issues/177
              name: useVersioning ? '[path][name]-[hash:6].[ext]' : '[path][name].[ext]'
            }
          }
        ]
      },
      externals: this.externals,
      optimization: {
        removeAvailableModules: this.isProd,
        removeEmptyChunks: this.isProd,
        // splitChunks: this.isProd ? {} : false,
        minimizer: []
      },
      plugins: [
        new HappyPack({
          loaders: ['babel-loader?cacheDirectory']
        }),
        new ExtractCssChunks({
          filename: useVersioning ? '[name]-[contenthash:6].css' : '[name].css',
          orderWarning: true,
        }),
        // new HardSourceWebpackPlugin(),
        // new BundleAnalyzerPlugin(),
      ],
      devServer: {
        // Fix "Invalid Host/Origin Header" warning
        // @link https://github.com/webpack/webpack-dev-server/issues/1604
        disableHostCheck: true,
        headers: {
          'Access-Control-Allow-Origin': '*'
        }
      },
      watchOptions: {
        ignored: [
          /node_modules/,
          /\.php$/,
        ]
      }
    };

    if (this.manifest) {
      config.optimization.runtimeChunk = {
        name: (this.name ? this.name + '-' : '') + 'manifest'
      };
    }

    if (useVersioning) {
      config.plugins.push(this.getManifestPluginConfig(this.buildDir));
    }

    if (isProd) {
      config.optimization.minimizer.push(this.getUglifyJSPlugin());
      config.plugins.push(new webpack.HashedModuleIdsPlugin());
      config.plugins.push(this.getWebpackLoaderOptionsPlugin());
    }

    return config;
  }

  getExtractCssChunksLoader() {
    return {
      loader: ExtractCssChunks.loader,
      options: {
        hot: this.isHot, // 需加上才会重新加载全部CSS
      }
    };
  }

  getWebpackLoaderOptionsPlugin() {
    return new webpack.LoaderOptionsPlugin({
      minimize: true,
      debug: false
    });
  }

  getUglifyJSPlugin() {
    return new UglifyJSPlugin({
      cache: true,
      parallel: true
    });
  }

  getManifestPluginConfig() {
    return new ManifestPlugin({
      fileName: (this.name ? this.name + '-' : '') + 'assets-hash.json',
      filter: function (obj) {
        return obj.isInitial;
      },
      map: function (obj) {
        // path改为只要hash部分
        var match = /(.+?)-(\w{6})\.(js|css)$/.exec(obj.path);
        if (match) {
          obj.path = match[2];
        }
        return obj;
      }
    });
  }

  static build(options = {}) {
    // const smp = new SpeedMeasurePlugin();
    const config = new WebpackConfig(options);
    // return smp.wrap(config.getConfig());
    return config.getConfig();
  }
}

module.exports = WebpackConfig;
