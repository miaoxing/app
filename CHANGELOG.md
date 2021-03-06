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
