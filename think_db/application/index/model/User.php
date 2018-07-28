<?php
namespace app\index\model;
use think\Model;
class User extends Model
{
    protected $auto = [ //更新或插入是使用修改器settimeattr
        'time'
    ];
    protected $insert = [ //新增时使用修改器setinserttimeattr
        'time_insert'
    ];
    protected $update = [ //跟新是使用该修饰器
        'time_update'
    ];
    #命名 immoc_user ->User.php User
    #       immoc_user_info ->UserInfo.php UserInfo
    public function getSexAttr($val,$data) { //获取器,第二个参数可加可不加
        switch ($val) {
            case "1":
                return "男";
                break;
            case "2":
                return "女";
                break;
            default:
                return "未知";
                break;
        }
    }
    public function setPasswordAttr($val,$data) { //修饰器 会自动加密,第二个参数是新增表数据中的数据 
       return md5($val);
       //return md5($val.$data['email']);
    }
    public function setTimeAttr() {
        return time();
    }
    public function setTimeInsertAttr() {
        return time();
    }
    public function setTimeUpdateAttr() {
        return time();
    }
}