<?php
namespace app\index\model;
use think\Model;
//使用软删除
use traits\model\SoftDelete;

class Test extends Model
{
    use SoftDelete;//默认字段名delete_time
    //1、'auto_timestamp'  => true,修改配置文件 
    protected $autoWriteTimestamp = true;//2、在模型中开启
    //上面两种都会对字段create_time 和 update_time自动更新
    protected $createTime = 'create_at';
   // protected $createTime = false; //可以设置关闭某一项
    protected $updateTime = 'update_at';
    protected $deleteTime = 'delete_at';
    
}
