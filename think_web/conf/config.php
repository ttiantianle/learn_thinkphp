<?php
use think\Env;
return [
    // 显示错误信息
    'show_error_msg'         => true,
   'app_status' => ENV::get('status','dev'),
   //'auto_bind_module' => true,
    'url_route_on'           => true,
    //如果设置为true，则要求所有的url访问都必须设置路由
    'url_route_must'         => false,
    
    'session'                => [
        'id'             => '',
        // SESSION_ID的提交变量,解决flash上传跨域
        'var_session_id' => '',
        // SESSION 前缀
        'prefix'         => 'think',
        // 驱动方式 支持redis memcache memcached
        'type'           => '',
        // 是否自动开启 SESSION
        'auto_start'     => true
    ],
    'view_replace_str'   => ['__123__'=>'一二三']

];
