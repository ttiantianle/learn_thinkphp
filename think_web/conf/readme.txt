应用配置
目录名称必须叫conf
文件必须叫config.php
tp5允许在这个目录下配置数据库
文件名称 database.php

场景配置
举例：只需修改config.php中的app_status项
家庭配置
公司配置

.env中设定的值默认会添加PHP_前缀（可修改），在thinkphp\base.php文件中
database.php 可以配合.env文件进行数据库配置
database.php文件中需要引入ENV类
需要注意的是在ENV::get()时，如果设置项加了分组一定要加前缀(分组名)，
具体看一下database.php中的username和.env文件中的设置

路由，美化url
在config.php中添加，以下配置项，开启路由
 'url_route_on'           => true,
 'url_route_must'         => false,//如果为true则要求所有的路由都必须设置

在conf下新建route.php返回一个数组，数组中的每项都是对url的美化

使用session需要配置