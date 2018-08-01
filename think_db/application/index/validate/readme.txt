验证器
可以在模型中或控制器中单独验证
$validate = new Validate([
    'name'  => 'require|max:25',
    'email' => 'email'
]);
$data = [
    'name'  => 'thinkphp',
    'email' => 'thinkphp@qq.com'
];
if (!$validate->check($data)) {
    dump($validate->getError());
}
或者定义验证器validate与model view controller 同级

