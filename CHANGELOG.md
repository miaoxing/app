## [0.10.10](https://github.com/miaoxing/app/compare/v0.10.9...v0.10.10) (2025-02-02)


### Bug Fixes

* **app:** 解决 `g-config` 命令将 `[id].jsx` 排在最前面导致其他页面失效 ([3334b41](https://github.com/miaoxing/app/commit/3334b41b3b6654f9004dffe230bb7a8c82484463))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.17.3` to `0.17.4`
* **@miaoxing/services:** upgrade from `0.9.11` to `0.9.12`

## [0.10.9](https://github.com/miaoxing/app/compare/v0.10.8...v0.10.9) (2024-12-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.3.0` to `9.3.1`
* **@miaoxing/plugin:** upgrade from `0.17.2` to `0.17.3`
* **@miaoxing/services:** upgrade from `0.9.10` to `0.9.11`

## [0.10.8](https://github.com/miaoxing/app/compare/v0.10.7...v0.10.8) (2024-12-30)


### Bug Fixes

* 限制 react 版本低于 19，避免测试失败 ([774fca7](https://github.com/miaoxing/app/commit/774fca7392b373c3aa86495e6a1fdfe0d691aeaa))


### Features

* **app:** 初始化登录日志表，模型 ([40a71b5](https://github.com/miaoxing/app/commit/40a71b5c8abb53847527518de6b71f777ae4e3fb))
* **app:** 记录用户登录日志 ([f9bae65](https://github.com/miaoxing/app/commit/f9bae65a5c4a9c6d162835787e9c12e7f5b50857))





### Dependencies

* **@miaoxing/dev:** upgrade from `9.2.0` to `9.3.0`
* **@miaoxing/plugin:** upgrade from `0.17.1` to `0.17.2`
* **@miaoxing/services:** upgrade from `0.9.9` to `0.9.10`

## [0.10.7](https://github.com/miaoxing/app/compare/v0.10.6...v0.10.7) (2024-11-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.17.0` to `0.17.1`
* **@miaoxing/services:** upgrade from `0.9.8` to `0.9.9`

## [0.10.6](https://github.com/miaoxing/app/compare/v0.10.5...v0.10.6) (2024-11-01)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.16.1` to `0.17.0`
* **@miaoxing/services:** upgrade from `0.9.7` to `0.9.8`

## [0.10.5](https://github.com/miaoxing/app/compare/v0.10.4...v0.10.5) (2024-09-30)


### Features

* **app, experimental:** 权限支持使用 `#` 表示操作 ([b2058b4](https://github.com/miaoxing/app/commit/b2058b4eb8c2c99a4acfed51349467c335b935b9))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.16.0` to `0.16.1`
* **@miaoxing/services:** upgrade from `0.9.6` to `0.9.7`

## [0.10.4](https://github.com/miaoxing/app/compare/v0.10.3...v0.10.4) (2024-09-01)


### Bug Fixes

* **app:** 如果未启用权限，则返回允许访问所有功能 ([b5520be](https://github.com/miaoxing/app/commit/b5520be1b42c7ed12ded04604679d68af9b1b3a7))


### Features

* 插件增加 wei 命令行入口 ([7a15a78](https://github.com/miaoxing/app/commit/7a15a78b8dbd4798942aca6b188b9f4d8de290c6))





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.3` to `9.2.0`
* **@miaoxing/plugin:** upgrade from `0.15.2` to `0.16.0`
* **@miaoxing/services:** upgrade from `0.9.5` to `0.9.6`

## [0.10.3](https://github.com/miaoxing/app/compare/v0.10.2...v0.10.3) (2024-08-03)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.2` to `9.1.3`
* **@miaoxing/plugin:** upgrade from `0.15.1` to `0.15.2`
* **@miaoxing/services:** upgrade from `0.9.4` to `0.9.5`

## [0.10.2](https://github.com/miaoxing/app/compare/v0.10.1...v0.10.2) (2024-07-31)


### Bug Fixes

* **app:** 解决 g-config 命令未生成 `[id].jsx` 路由的问题 ([cb8b50f](https://github.com/miaoxing/app/commit/cb8b50f0cc935523b157b730949325af4e925012))


### Features

* **app:** `g-config` 生成路径使用相对路径，支持 vite 加载 ([896b01c](https://github.com/miaoxing/app/commit/896b01cb48045225c6400da1d41c6a506ace2603))





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.1` to `9.1.2`
* **@miaoxing/plugin:** upgrade from `0.15.0` to `0.15.1`
* **@miaoxing/services:** upgrade from `0.9.3` to `0.9.4`

## [0.10.1](https://github.com/miaoxing/app/compare/v0.10.0...v0.10.1) (2024-06-30)


### Bug Fixes

* **app:** 提前运行 Cors 中间件，以便处理 options 请求 ([314f156](https://github.com/miaoxing/app/commit/314f1568cd2f91b4d8df9146ba8676b631b8cee7))


### Features

* 更新 `onControllerInit` 为 `onPageInit` ([d7f84ef](https://github.com/miaoxing/app/commit/d7f84ef2c4d89b2d71173c09e8fb0860e10c6da1))
* **app:** 控制器默认加上 `Cors` 中间件 ([781601f](https://github.com/miaoxing/app/commit/781601f6d2cb0970b2c2b1c7ec325caeda72bb15))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.7` to `0.15.0`
* **@miaoxing/services:** upgrade from `0.9.2` to `0.9.3`

# [0.10.0](https://github.com/miaoxing/app/compare/v0.9.0...v0.10.0) (2024-05-30)


### Code Refactoring

* **app:** 移除未使用的前端功能 ([db8cce2](https://github.com/miaoxing/app/commit/db8cce23a8dd9e4082d683298864000ba733af6b))


### Features

* **app:** `g-config` 命令忽略 `_` 或 `.` 开头的文件和目录 ([3639d42](https://github.com/miaoxing/app/commit/3639d42b78dc58f7edebd052eafdccef913be879))
* **app:** `location` 变化时，设置到 `req` 对象中，以便获得请求参数 ([f38da08](https://github.com/miaoxing/app/commit/f38da08ca500a9614231b1d7f82ff17996256366))
* **app:** `RouterStore `增加 `location` 变量 ([aeafd1f](https://github.com/miaoxing/app/commit/aeafd1fcc4d681972d015b8278b7a15e57edbbee))
* **experimental:** 移除 `$.fullUrl` 方法 ([fc2cbcc](https://github.com/miaoxing/app/commit/fc2cbcc9ca0f4ed3bd59645e22dee25a70268877))
* `api.xxx` 调用改为 `$.xx` ([97a330f](https://github.com/miaoxing/app/commit/97a330f67507cfef9acc591c502756e3f999fcd4))


### BREAKING CHANGES

* **app:** 移除未使用的前端功能





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.6` to `0.14.7`
* **@miaoxing/services:** upgrade from `0.9.1` to `0.9.2`

# [0.9.0](https://github.com/miaoxing/app/compare/v0.8.3...v0.9.0) (2024-05-01)


### Code Refactoring

* **app:** config 改为 `@mxjs/config` ([2998c96](https://github.com/miaoxing/app/commit/2998c9602ce27bdfae225f18c5dfed5badb7b2fd))


### Features

* **app:** `App` 组件改为函数式 ([aa09cf8](https://github.com/miaoxing/app/commit/aa09cf82ef3feb9829ac5bd1bbd03efa537cf877))
* **app:** 更新 `App` 组件支持 `react-router` v6 ([6686745](https://github.com/miaoxing/app/commit/6686745dbc94c8abeeb78fbc4ca3a394ea7a6812))
* **app:** 更新 `ErrorBoundary` 支持 `react-router` v6 ([4971caa](https://github.com/miaoxing/app/commit/4971caabdb0e5348dcf975cf643dce33a60cbd51))
* **app, experimental:** 增加 `RouterStore` 组件，用于在外部获取 `react-router` 的值 ([d88239b](https://github.com/miaoxing/app/commit/d88239b8da4900c930137ea61d08435119486496))
* **app, experimental:** 更新 `RouterStore` 组件支持 `react-router` v6，返回值改为 `navigate` 变量 ([f4e0862](https://github.com/miaoxing/app/commit/f4e08624742290b0c2e5fc7961924e3b86430a0a))


### BREAKING CHANGES

* **app:** config 改为 `@mxjs/config`





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.5` to `0.14.6`
* **@miaoxing/services:** upgrade from `0.9.0` to `0.9.1`

## [0.8.3](https://github.com/miaoxing/app/compare/v0.8.2...v0.8.3) (2024-03-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.1.0` to `9.1.1`
* **@miaoxing/plugin:** upgrade from `0.14.4` to `0.14.5`
* **@miaoxing/services:** upgrade from `0.8.6` to `0.9.0`

## [0.8.2](https://github.com/miaoxing/app/compare/v0.8.1...v0.8.2) (2024-02-29)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.3` to `0.14.4`
* **@miaoxing/services:** upgrade from `0.8.5` to `0.8.6`

## [0.8.1](https://github.com/miaoxing/app/compare/v0.8.0...v0.8.1) (2024-02-20)


### Features

* `@mxjs/loading` 依赖更改为 `@mxjs/a-loading` ([06b6107](https://github.com/miaoxing/app/commit/06b6107acb18f82ef296159f201fbb75dbab71d0))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.14.2` to `0.14.3`
* **@miaoxing/services:** upgrade from `0.8.4` to `0.8.5`

# [0.8.0](https://github.com/miaoxing/app/compare/v0.7.11...v0.8.0) (2024-01-31)


### Features

* 更新 `react` 支持 18 ([46ef334](https://github.com/miaoxing/app/commit/46ef33411d810047f93d6c298dc9f3c503b2b13e))
* 更新调用方法为 `react` 18 ([da6a7b2](https://github.com/miaoxing/app/commit/da6a7b269e19f3dfa51e6886c4896e0807a36ebf))
* **app:** 升级 `@chakra-ui/react` 到 v2 ([29634c8](https://github.com/miaoxing/app/commit/29634c8ced953dda3d13e2de40656364f2ac01d5))


### BREAKING CHANGES

* 更新调用方法为 `react` 18
* **app:** 升级 `@chakra-ui/react` 到 v2

## [0.7.11](https://github.com/miaoxing/app/compare/v0.7.10...v0.7.11) (2024-01-08)





### Dependencies

* **@miaoxing/dev:** upgrade from `9.0.0` to `9.1.0`
* **@miaoxing/plugin:** upgrade from `0.14.1` to `0.14.2`
* **@miaoxing/services:** upgrade from `0.8.3` to `0.8.4`

## [0.7.10](https://github.com/miaoxing/app/compare/v0.7.9...v0.7.10) (2023-12-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.4` to `9.0.0`
* **@miaoxing/plugin:** upgrade from `0.14.0` to `0.14.1`
* **@miaoxing/services:** upgrade from `0.8.2` to `0.8.3`

## [0.7.9](https://github.com/miaoxing/app/compare/v0.7.8...v0.7.9) (2023-11-30)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.3` to `8.2.4`
* **@miaoxing/plugin:** upgrade from `0.13.2` to `0.14.0`
* **@miaoxing/services:** upgrade from `0.8.1` to `0.8.2`

## [0.7.8](https://github.com/miaoxing/app/compare/v0.7.7...v0.7.8) (2023-11-02)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.13.1` to `0.13.2`
* **@miaoxing/services:** upgrade from `0.8.0` to `0.8.1`

## [0.7.7](https://github.com/miaoxing/app/compare/v0.7.6...v0.7.7) (2023-09-30)


### Features

* **app, experimental:** 记录请求日志 ([8de25f0](https://github.com/miaoxing/app/commit/8de25f0df196b1bb6855958f479111af947ea9d7))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.13.0` to `0.13.1`
* **@miaoxing/services:** upgrade from `0.7.5` to `0.8.0`

## [0.7.6](https://github.com/miaoxing/app/compare/v0.7.5...v0.7.6) (2023-09-02)


### Bug Fixes

* **app:** `$.loading` 超过 3 秒后自动消失 ([0ef23e2](https://github.com/miaoxing/app/commit/0ef23e22781e3bca653a8da29a0cb2a838a96bd6))





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.2` to `8.2.3`
* **@miaoxing/plugin:** upgrade from `0.12.2` to `0.13.0`
* **@miaoxing/services:** upgrade from `0.7.4` to `0.7.5`

## [0.7.5](https://github.com/miaoxing/app/compare/v0.7.4...v0.7.5) (2023-07-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.1` to `8.2.2`
* **@miaoxing/plugin:** upgrade from `0.12.1` to `0.12.2`
* **@miaoxing/services:** upgrade from `0.7.3` to `0.7.4`

## [0.7.4](https://github.com/miaoxing/app/compare/v0.7.3...v0.7.4) (2023-06-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.12.0` to `0.12.1`
* **@miaoxing/services:** upgrade from `0.7.2` to `0.7.3`

## [0.7.3](https://github.com/miaoxing/app/compare/v0.7.2...v0.7.3) (2023-05-31)





### Dependencies

* **@miaoxing/dev:** upgrade from `8.2.0` to `8.2.1`
* **@miaoxing/plugin:** upgrade from `0.11.2` to `0.12.0`
* **@miaoxing/services:** upgrade from `0.7.1` to `0.7.2`

## [0.7.2](https://github.com/miaoxing/app/compare/v0.7.1...v0.7.2) (2023-04-30)





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.11.1` to `0.11.2`
* **@miaoxing/services:** upgrade from `0.7.0` to `0.7.1`

## [0.7.1](https://github.com/miaoxing/app/compare/v0.7.0...v0.7.1) (2023-04-15)


### Features

* **app:** 增加权限相关功能和接口 ([a2e5083](https://github.com/miaoxing/app/commit/a2e50831c3e828197514fc449439c1929bc58898))





### Dependencies

* **@miaoxing/plugin:** upgrade from `0.11.0` to `0.11.1`
* **@miaoxing/services:** upgrade from `0.6.7` to `0.7.0`

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
