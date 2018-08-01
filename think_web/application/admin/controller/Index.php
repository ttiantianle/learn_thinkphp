<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        var_dump(config());
    }
    public function demo()
    {
        //return "admin index demo";
        return $this->fetch();
    }
}
