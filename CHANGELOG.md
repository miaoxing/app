# [0.7.0](https://github.com/miaoxing/app/compare/v0.6.13...v0.7.0) (2023-03-01)


### Code Refactoring

* **app:** `UserModel` 的 `group` 关联改为引入 `BelongsToGroupTrait` ([9e55daf](https://github.com/miaoxing/app/commit/9e55daf526248113f76e09643407ae7d96345c56))


### Features

* 分组功能从 `admin` 插件迁移到 `app` 插件中 ([61af12e](https://github.com/miaoxing/app/commit/61af12e9422e0f4edf1132540ac13471d5035ec2))
* **app:** 增加 `UserModel` 服务 ([1c395cc](https://github.com/miaoxing/app/commit/1c395cc1ef658bc855d92a32ef53cb7c3a272b18))


### BREAKING CHANGES

* **app:** `UserModel::group()` 增加返回类型





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.10.1` to `0.11.0`
* **@miaoxing/services:** upgrade from `0.6.6` to `0.6.7`

## [0.6.13](https://github.com/miaoxing/app/compare/v0.6.12...v0.6.13) (2023-01-31)


### Bug Fixes

* **app:** `g-config` 生成页面支持合并多级目录 ([bd1aa36](https://github.com/miaoxing/app/commit/bd1aa368caa909756827b8b80e4a288e334ebfff))


### Features

* **app:** 支持 `pageInit` 事件 ([86acd94](https://github.com/miaoxing/app/commit/86acd942ae051565effc089c531cd27fe83291c6))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.10.0` to `0.10.1`
* **@miaoxing/services:** upgrade from `0.6.5` to `0.6.6`

## [0.6.12](https://github.com/miaoxing/app/compare/v0.6.11...v0.6.12) (2023-01-01)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.3` to `8.2.0`
* **@miaoxing/plugin:** upgrade from `0.9.4` to `0.10.0`
* **@miaoxing/services:** upgrade from `0.6.4` to `0.6.5`

## [0.6.11](https://github.com/miaoxing/app/compare/v0.6.10...v0.6.11) (2022-12-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.3` to `0.9.4`
* **@miaoxing/services:** upgrade from `0.6.3` to `0.6.4`

## [0.6.10](https://github.com/miaoxing/app/compare/v0.6.9...v0.6.10) (2022-11-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.2` to `0.9.3`
* **@miaoxing/services:** upgrade from `0.6.2` to `0.6.3`

## [0.6.9](https://github.com/miaoxing/app/compare/v0.6.8...v0.6.9) (2022-09-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.1` to `0.9.2`
* **@miaoxing/services:** upgrade from `0.6.1` to `0.6.2`

## [0.6.8](https://github.com/miaoxing/app/compare/v0.6.7...v0.6.8) (2022-09-03)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.9.0` to `0.9.1`
* **@miaoxing/services:** upgrade from `0.6.0` to `0.6.1`

## [0.6.7](https://github.com/miaoxing/app/compare/v0.6.6...v0.6.7) (2022-08-02)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.2` to `8.1.3`
* **@miaoxing/plugin:** upgrade from `0.8.5` to `0.9.0`
* **@miaoxing/services:** upgrade from `0.5.6` to `0.6.0`

## [0.6.6](https://github.com/miaoxing/app/compare/v0.6.5...v0.6.6) (2022-07-02)


### Bug Fixes

* 解决 composer 2.2+ 默认不启用插件导致安装路径错误 ([45f9281](https://github.com/miaoxing/app/commit/45f9281a2e86857ddc35acf42c280fd407deabc5))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.4` to `0.8.5`
* **@miaoxing/services:** upgrade from `0.5.5` to `0.5.6`

## [0.6.5](https://github.com/miaoxing/app/compare/v0.6.4...v0.6.5) (2022-07-01)


### Features

* **app, experimental:** 增加 `$.fullUrl` 的实现 ([2824acd](https://github.com/miaoxing/app/commit/2824acd80d47740129f4f6002faee5f73a8e480a))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.1` to `8.1.2`
* **@miaoxing/plugin:** upgrade from `0.8.3` to `0.8.4`
* **@miaoxing/services:** upgrade from `0.5.4` to `0.5.5`

## [0.6.4](https://github.com/miaoxing/app/compare/v0.6.3...v0.6.4) (2022-06-01)


### Features

* **app:** 返回前台配置增加是否演示模式 ([5e33f5a](https://github.com/miaoxing/app/commit/5e33f5a9b164c62859d7307718986d262bc91649))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.1.0` to `8.1.1`
* **@miaoxing/plugin:** upgrade from `0.8.2` to `0.8.3`
* **@miaoxing/services:** upgrade from `0.5.3` to `0.5.4`

## [0.6.3](https://github.com/miaoxing/app/compare/v0.6.2...v0.6.3) (2022-04-30)


### Bug Fixes

* **u, app:** 解决接口超过 3s 时，`$.loading` 会自动消失 ([328814f](https://github.com/miaoxing/app/commit/328814fb4146a0724ede36f458d3c34c5d6f5360))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.1` to `0.8.2`
* **@miaoxing/services:** upgrade from `0.5.2` to `0.5.3`

## [0.6.2](https://github.com/miaoxing/app/compare/v0.6.1...v0.6.2) (2022-03-31)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.8.0` to `0.8.1`
* **@miaoxing/services:** upgrade from `0.5.1` to `0.5.2`

## [0.6.1](https://github.com/miaoxing/app/compare/v0.6.0...v0.6.1) (2022-03-04)


### Bug Fixes

* 处理路径时，兼容结尾有 `/` 的情况 ([2dd4677](https://github.com/miaoxing/app/commit/2dd4677607f9bd59db0517fed254c3e1adf1a60d))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.7.1` to `0.8.0`
* **@miaoxing/services:** upgrade from `0.5.0` to `0.5.1`

# [0.6.0](https://github.com/miaoxing/app/compare/v0.5.1...v0.6.0) (2022-02-28)


### Code Refactoring

* **app:** 用户端加载默认前端资源 ([17fd8d6](https://github.com/miaoxing/app/commit/17fd8d655921ef118c75c47f24096f63f99940d3))


### BREAKING CHANGES

* **app:** 用户端加载默认前端资源





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.7.0` to `0.7.1`
* **@miaoxing/services:** upgrade from `0.4.2` to `0.5.0`

## [0.5.1](https://github.com/miaoxing/app/compare/v0.5.0...v0.5.1) (2022-02-05)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.0.1` to `8.1.0`
* **@miaoxing/plugin:** upgrade from `0.6.0` to `0.7.0`
* **@miaoxing/services:** upgrade from `0.4.1` to `0.4.2`

# [0.5.0](https://github.com/miaoxing/app/compare/v0.4.0...v0.5.0) (2022-01-12)


### Bug Fixes

* **app:** 解决 ts 运行失败 ([0255997](https://github.com/miaoxing/app/commit/0255997d0dc9b785a23e0670a5038ccb3974df28))
* **app, g-config:** 生成页面时忽略移动端目录 ([0c19a09](https://github.com/miaoxing/app/commit/0c19a09a0cc39b41e26cb66a1100ff15f0212e14))


### Features

* **app:** `$.ret` 提示改为 antd 的 message 组件 ([837247a](https://github.com/miaoxing/app/commit/837247ae4a0454cbf0eb96bc19287d2b481fa812))
* **app:** 启动时加载配置 ([64256bd](https://github.com/miaoxing/app/commit/64256bdf99d000fea5c2544b3c39285ca3829e90))
* **app:** 增加 `ConfigProvider` 组件，允许访问后台返回的配置 ([96e9b06](https://github.com/miaoxing/app/commit/96e9b06a7c1bd8ed5113c2ee1a2cf276f69d7b09))
* **app:** 更改 `$.alert` 和 `$.confirm` 为 antd 的 Modal 组件 ([240ad40](https://github.com/miaoxing/app/commit/240ad403d737c37a507a28fbd25e09c257f15c66))
* **app:** 更改 `$.loading` 为 antd 的 message 组件 ([745ad95](https://github.com/miaoxing/app/commit/745ad9505195998e485c2f46ff3131a1cfdff363))
* **webpack:** 改为通过 `HtmlWebpackPlugin` 生成静态首页，移除 `WebpackManifestPlugin` 生成的映射表 ([9fbf413](https://github.com/miaoxing/app/commit/9fbf4132c753ca7d556c649fa828bce2bf5f1991))


### BREAKING CHANGES

* **webpack:** 改为通过 `HtmlWebpackPlugin` 生成静态首页，移除 `WebpackManifestPlugin` 生成的映射表





### Dependencies

* **@miaoxing/dev:** upgrade from `8.0.0` to `8.0.1`
* **@miaoxing/plugin:** upgrade from `0.5.0` to `0.6.0`
* **@miaoxing/services:** upgrade from `0.4.0` to `0.4.1`

# [0.4.0](https://github.com/miaoxing/app/compare/v0.3.3...v0.4.0) (2021-10-28)


### Code Refactoring

* **$.http:** `$.http` 改为返回原始 `response` 对象，其中包含 `ret` 对象 ([896529e](https://github.com/miaoxing/app/commit/896529ee14b8d62782add16b5575f9c486efc20a))


### Features

* 更新 `react` 到 17 ([12a5c89](https://github.com/miaoxing/app/commit/12a5c89c00d34e6dc4e5094369988adebf6eb0a9))


### BREAKING CHANGES

* 更新 `react` 到 17
* **$.http:** `$.http` 改为返回原始 `response` 对象，其中包含 `ret` 对象





### Dependencies

* **@miaoxing/dev:** upgrade from `7.0.1` to `8.0.0`
* **@miaoxing/plugin:** upgrade from `0.4.7` to `0.5.0`
* **@miaoxing/services:** upgrade from `0.3.12` to `0.4.0`

## [0.3.3](https://github.com/miaoxing/app/compare/v0.3.2...v0.3.3) (2021-05-21)


### Bug Fixes

* **g-config:** 构造对象错误 ([362f7de](https://github.com/miaoxing/app/commit/362f7de44c4a93318ba8daf9e52e83995f1e7929))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.4.6` to `0.4.7`
* **@miaoxing/services:** upgrade from `0.3.11` to `0.3.12`

## [0.3.2](https://github.com/miaoxing/app/compare/v0.3.1...v0.3.2) (2021-05-12)





### Dependencies

* **@miaoxing/dev:** upgrade from `7.0.0` to `7.0.1`
* **@miaoxing/plugin:** upgrade from `0.4.5` to `0.4.6`
* **@miaoxing/services:** upgrade from `0.3.10` to `0.3.11`

## [0.3.1](https://github.com/miaoxing/app/compare/v0.3.0...v0.3.1) (2021-05-11)





### Dependencies

* **@miaoxing/dev:** upgrade from `6.4.0` to `7.0.0`
* **@miaoxing/plugin:** upgrade from `0.4.4` to `0.4.5`
* **@miaoxing/services:** upgrade from `0.3.9` to `0.3.10`

# [0.3.0](https://github.com/miaoxing/app/compare/v0.2.13...v0.3.0) (2021-04-27)


### Bug Fixes

* **watch-config:** 监听修改文件更新配置 ([0c4e7d0](https://github.com/miaoxing/app/commit/0c4e7d092d827b87511f98406452c8c89fe0fb51))
* 解析出事件名称首字母未转换为小写 ([d160534](https://github.com/miaoxing/app/commit/d160534f80106e126539e9ed2b1db1957392d0f5))


### Code Refactoring

* **app:** 调整事件的数据结构为 `{plugin: {events: {plugins, handlers}}}` ([d5345b7](https://github.com/miaoxing/app/commit/d5345b7417ab753e371a416a0355abd750f723b5))
* 更改主题为 `@chakra-ui/react` 的 `ThemeProvider` ([a606f81](https://github.com/miaoxing/app/commit/a606f814e495c0b13eec557ec70dc03c75410b8c))


### Features

* **g-config:** 解析事件方法支持包含 `async` 关键字 ([836c77e](https://github.com/miaoxing/app/commit/836c77ef29afe9623b5f774e259c217c216171e5))
* 升级 `emotion` 到 11 ([af0e9f5](https://github.com/miaoxing/app/commit/af0e9f572c05dc28754b33bf47da1b69296254b1))


### BREAKING CHANGES

* **app:** 调整事件的数据结构为 `{plugin: {events: {plugins, handlers}}}`
* 更改主题为 `@chakra-ui/react` 的 `ThemeProvider`
* 升级 `emotion` 到 11





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.4` to `6.4.0`
* **@miaoxing/plugin:** upgrade from `0.4.3` to `0.4.4`
* **@miaoxing/services:** upgrade from `0.3.8` to `0.3.9`

## [0.2.13](https://github.com/miaoxing/app/compare/v0.2.12...v0.2.13) (2021-03-22)


### Bug Fixes

* 废弃 `watch-auto-completion` 命令，改为使用 `watch-php` ([3748b8b](https://github.com/miaoxing/app/commit/3748b8bd1a295779a2edac8882bf77be010b6486))





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.3` to `6.3.4`
* **@miaoxing/plugin:** upgrade from `0.4.2` to `0.4.3`
* **@miaoxing/services:** upgrade from `0.3.7` to `0.3.8`

## [0.2.12](https://github.com/miaoxing/app/compare/v0.2.11...v0.2.12) (2021-03-17)





### Dependencies

* **@miaoxing/services:** upgrade from `0.3.6` to `0.3.7`

## [0.2.11](https://github.com/miaoxing/app/compare/v0.2.10...v0.2.11) (2021-03-12)


### Bug Fixes

* 更新前端包依赖 ([67ab67e](https://github.com/miaoxing/app/commit/67ab67e2d88189ea5c2c921b8f9dcfb5acc8f3c8))





### Dependencies

* **@miaoxing/dev:** upgrade from `6.3.2` to `6.3.3`
* **@miaoxing/plugin:** upgrade from `0.4.1` to `0.4.2`
* **@miaoxing/services:** upgrade from `0.3.5` to `0.3.6`

## [0.2.10](https://github.com/miaoxing/app/compare/v0.2.9...v0.2.10) (2021-03-10)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.1 to 6.3.2
* **@miaoxing/plugin:** upgrade from 0.4.0 to 0.4.1
* **@miaoxing/services:** upgrade from 0.3.4 to 0.3.5

## [0.2.9](https://github.com/miaoxing/app/compare/v0.2.8...v0.2.9) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.3.0 to 6.3.1
* **@miaoxing/plugin:** upgrade from 0.3.3 to 0.4.0
* **@miaoxing/services:** upgrade from 0.3.3 to 0.3.4

## [0.2.8](https://github.com/miaoxing/app/compare/v0.2.7...v0.2.8) (2021-03-09)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.2.0 to 6.3.0
* **@miaoxing/plugin:** upgrade from 0.3.2 to 0.3.3
* **@miaoxing/services:** upgrade from 0.3.2 to 0.3.3

## [0.2.7](https://github.com/miaoxing/app/compare/v0.2.6...v0.2.7) (2021-03-05)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.3.1 to 0.3.2
* **@miaoxing/services:** upgrade from 0.3.1 to 0.3.2

## [0.2.6](https://github.com/miaoxing/app/compare/v0.2.5...v0.2.6) (2021-03-05)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.2 to 6.2.0
* **@miaoxing/plugin:** upgrade from 0.3.0 to 0.3.1
* **@miaoxing/services:** upgrade from 0.3.0 to 0.3.1

## [0.2.5](https://github.com/miaoxing/app/compare/v0.2.4...v0.2.5) (2021-03-05)


### Bug Fixes

* 解决页面没有按需加载 ([e6a7663](https://github.com/miaoxing/app/commit/e6a76637cd9abdfb65b5751677f9557dc0077350))





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.4 to 0.3.0
* **@miaoxing/services:** upgrade from 0.2.4 to 0.3.0

## [0.2.4](https://github.com/miaoxing/app/compare/v0.2.3...v0.2.4) (2020-09-27)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.3 to 0.2.4
* **@miaoxing/services:** upgrade from 0.2.3 to 0.2.4

## [0.2.3](https://github.com/miaoxing/app/compare/v0.2.2...v0.2.3) (2020-09-25)


### Bug Fixes

* 忽略 pages 目录下的测试文件 ([de1ee17](https://github.com/miaoxing/app/commit/de1ee17c4079f1b7a3e0ed0408f2eb7726466e5a))
* 生成页面覆盖会被其他插件覆盖 ([967e0e7](https://github.com/miaoxing/app/commit/967e0e74827b13ec7045fbe14bfa7cd0cf6ce3f7))





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.1 to 6.1.2
* **@miaoxing/plugin:** upgrade from 0.2.2 to 0.2.3
* **@miaoxing/services:** upgrade from 0.2.2 to 0.2.3

## [0.2.2](https://github.com/miaoxing/app/compare/v0.2.1...v0.2.2) (2020-09-06)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.1 to 0.2.2
* **@miaoxing/services:** upgrade from 0.2.1 to 0.2.2

## [0.2.1](https://github.com/miaoxing/app/compare/v0.2.0...v0.2.1) (2020-09-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.2.0 to 0.2.1
* **@miaoxing/services:** upgrade from 0.2.0 to 0.2.1

# [0.2.0](https://github.com/miaoxing/app/compare/v0.1.7...v0.2.0) (2020-09-01)


### Code Refactoring

* 前端控制器改为 page 模式 ([5d2f2f3](https://github.com/miaoxing/app/commit/5d2f2f3ebc88c3f2767c2ca686b82deba6e5b171))
* 后端控制器改为 page 模式 ([7e11983](https://github.com/miaoxing/app/commit/7e1198379a6e6c631872ce3501bc2e423c70dfc1))
* 重构 app 包，增加 Req，Url，Event 服务，统一配置 ([df7e2cd](https://github.com/miaoxing/app/commit/df7e2cd9dd40086e8bd786cf8eeebfaa16783003))


### Features

* 增加 $.http $.patch $.put $.delete 接口 ([27b73a8](https://github.com/miaoxing/app/commit/27b73a89f64ce9fa2066ed31080155f588736e99))
* 增加 $.req $.url $.apiUrl 接口 ([0143931](https://github.com/miaoxing/app/commit/014393120110eff9723a3ecbc7a77c07ca6a2a8f))


### BREAKING CHANGES

* 重构 app 包，增加 Req，Url，Event 等服务，统一配置
* 前端控制器改为 page 模式
* 后端控制器改为 page 模式





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.7 to 0.2.0
* **@miaoxing/services:** upgrade from 0.1.7 to 0.2.0

## [0.1.7](https://github.com/miaoxing/app/compare/v0.1.6...v0.1.7) (2020-08-17)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.1.0 to 6.1.1
* **@miaoxing/plugin:** upgrade from 0.1.6 to 0.1.7
* **@miaoxing/services:** upgrade from 0.1.6 to 0.1.7

## [0.1.6](https://github.com/miaoxing/app/compare/v0.1.5...v0.1.6) (2020-08-14)





### Dependencies

* **@miaoxing/dev:** upgrade from 6.0.0 to 6.1.0
* **@miaoxing/plugin:** upgrade from 0.1.5 to 0.1.6
* **@miaoxing/services:** upgrade from 0.1.5 to 0.1.6

## [0.1.5](https://github.com/miaoxing/app/compare/v0.1.4...v0.1.5) (2020-08-14)





### Dependencies

* **@miaoxing/dev:** upgrade from  to 0.1.0
* **@miaoxing/plugin:** upgrade from 0.1.4 to 0.1.5
* **@miaoxing/services:** upgrade from 0.1.4 to 0.1.5

## [0.1.4](https://github.com/miaoxing/app/compare/v0.1.3...v0.1.4) (2020-08-11)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.3 to 0.1.4
* **@miaoxing/services:** upgrade from 0.1.3 to 0.1.4

## [0.1.3](https://github.com/miaoxing/app/compare/v0.1.2...v0.1.3) (2020-08-07)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.2 to 0.1.3
* **@miaoxing/services:** upgrade from 0.1.2 to 0.1.3

## [0.1.2](https://github.com/miaoxing/app/compare/v0.1.1...v0.1.2) (2020-08-06)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.1 to 0.1.2
* **@miaoxing/services:** upgrade from 0.1.1 to 0.1.2

## [0.1.1](https://github.com/miaoxing/app/compare/v0.1.0...v0.1.1) (2020-08-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from 0.1.0 to 0.1.1
* **@miaoxing/services:** upgrade from 0.1.0 to 0.1.1

# 0.1.0 (2020-07-30)


### Features

* init
