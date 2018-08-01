<?php
namespace app\admin\controller;
class Index
{
    public function index()
    {
        var_dump(config());
    }
    public function demo()
    {
        return "admin index demo";
    }
}
