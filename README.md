# ip2location

[![Build Status](https://api.travis-ci.org/xdstack/ip2location.svg?branch=master)](https://travis-ci.org/xdstack/ip2location)

## 功能

通过 IP，获取该 IP 所在的位置，例如通过 ip：`27.196.21.222` 可以获得 `中国山东聊城`。

IP 数据库更新于：2018年07月02日，数据来源于 http://www.ipip.net/ ，IP 数据库由 ipip.net 所有，本项目仅供 php 项目 composer 安装方便使用。

## 特点

1. 不依赖数据库，使用 DATX 格式数据，查询性能高效
2. 使用简单，功能专注
3. 使用 [composer](https://getcomposer.org/) 进行安装管理，方便快捷，随时更新数据库

## Install

`composer require "xdstack/ip2location"`

## Usage

**使用方法超级简单，只用一个方法，那就是 `find`**

非 Laravel：

```
<?php 
require 'vendor/autoload.php'; 
use xdstack\ip2location\Ip; 
var_dump(Ip::find('27.196.21.222'));
```

// 返回结果
```
array(4) {
  [0] => string(6) "中国"
  [1] => string(6) "山东"
  [2] => string(6) "聊城"
  [3] => string(0) ""
}
```

Laravel：

`Ip::find('27.196.21.222')` 或 `Ip::find(Request::getClientIp())`

## Contributing
有什么新的想法和建议，欢迎提交 [issue](https://github.com/xdstack/ip2location/issues) 或者 [Pull Requests](https://github.com/xdstack/ip2location/pulls) 。

## License
MIT
