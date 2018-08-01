<?php
namespace app\api\controller;
use think\Config;
class index
{
    public function index()
    {
        return 'this is  api index index';
    }
    public function demo()
    {
        return 'this is  api index demo';
    }
    public function getUserInfo($type='json')
    {
        if(!in_array($type, ['json','xml','jsonp']))
        {
            $type = 'json';
        }
        Config::set('default_return_type',$type);
        $data = [
            'code'      =>  200,
            'result'    =>  [
                'username'  =>  'tianshaoteng',
                'email'     =>  '1713830600@qq.com'
            ]  
        ];
        return $data;
    }
}
