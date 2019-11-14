# laravel-sql-monitor


## 功能介绍

> 目前支持版本为: `laravle5.5~` `laravel6^`

##### 监控当前`页面功能`或者`接口`内执行的所有sql详细数据，以日志形式输出到laravel业务日志中（json方式写入日志）

- 监控的方法名称以 `sql_monitor_action:` 为前缀的方法路径
- sql执行语句
- sql执行参数
- sql执行时长(ms为单位)
- sql执行的的文件路径和文件内执行的行数

## 安装和配置

- 安装扩展，复制一下命令直接安装扩展包
```
composer require zanehy/laravel-sql-monitor
```

- 配置，在 `/config/app.php` 文件内 `providers` 下增加以下配置
```
Zanehy\SqlMonitor\SqlMonitorServiceProvider::class,
```

- 开启监听，以下三种配置中任意一种符合要求即可开启监听模式
    1. 配置 `env` 的 `APP_ENV` 为 `local`
    2. 配置 `env` 的 `APP_DEBUG` 为 `true`
    3. 新增 `env` 的配置 `MONITOR` 为 `true` （该种方式主要是为了兼容前两种配置在生产环境下需单独开启sql监听模式增加的一种独立开关配置）
    4. 增加 `env` 的配置 `MONITOR_ACTIONS` 为要监控的方法（模糊匹配，多个监控的方法以 `|` 隔开即可，案例： `MONITOR_ACTIONS=test|monitor` 监听链接中带 `test` 和 `monitor` 的方法）
    
- 日志打印和输出，日志字段解释
    * action： 当前访问的页面或者接口地址，以 `sql_monitor_action:` 为前缀
    * sql：当前方法执行的sql语句 使用 `?` 作为占位符
    * bindings： 当前sql使用到的参数，以数组形式展示，与上面sql中的占位符 `?` 依次对应
    * time: 当前sql语句执行的时间，毫秒 `ms` 为单位
    * file: 当期sql执行的文件名称（包含路径）
    * line: 当前sql在上文件中执行的行数



