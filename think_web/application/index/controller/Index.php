<?php
namespace app\index\controller;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\View;
class Index extends Controller
{
//    public function __construct() {
//        //动态配置，针对当前类起作用
//        config('before', 'beforeAction');
//    }
    public function index(Request $request)
    {
        //动态配置，只针对当前方法起作用
        //config('indexAction','index');
       // dump(config());
       // 关于config函数请看thinkphp\helper.php;
       // 设置配置项
       // $res = Config::set('app_host','index');//config('app_host','index')
       //  设置配置项，带作用于参数
       // $res = Config::set('username','along','index');//config('username','along','index')
       //  $res = Config::get('app_host','index');//此时获取时需要加上作用域
        //获取配置值
        //$res = Config::get('app_host');//config('app_host')
        //查看是否有此配置项
        //$res = Config::has('app_name');
       // dump($res);
        //系统环境变量
        //dump($_ENV);
        //获取系统环境变量
        //$res = ENV::get('email');
        //当email不存在时直接输出第二个参数值
        //$res = ENV::get('email','default');
        //
       // $res = ENV::get('databese_username');
        //$res = ENV::get('databese.username');
        //dump($res);
       // dump(config());
       // return "index index index";
       // 三种方法获取Request对象
       // $request = request();
       // 单例模式
        //$request = Request::instance();
        //dump($request);
        //获取浏览器输入框的值
//        dump($request->domain());
//        dump($request->pathinfo());//含后缀 .html
//        dump($request->path());//不含后缀
//        //请求类型
//        dump($request->method());
//        dump($request->isGet());
//        dump($request->isPost());
//        dump($request->isAjax());
//        //请求的参数
//        dump($request->get('id'));
       // dump($request->get());
      //  dump($request->param());
//        dump($request->post());
//       // session('username','tiantianle');
//       //session('username',null);销毁
//       //session(null);销毁
//        dump($request->session());
//        //cookie('email', '1713830600@qq.com');
//        dump($request->cookie());
//        dump($request->cookie('email'));
//        //获取模块 控制器 方法
//        dump($request->module());
//        dump($request->controller());
//        dump($request->action());
//        
//        dump($request->url()); //包含？后面的参数
//        dump($request->baseUrl());//不包含参数
//        
//        推荐使用request对象获取，不存在函数名定义的问题
//        dump($request->param());
//        //$res = input('id');//返回参数中的id值（包含post与get）
//        $res = input('get.id');//返回get参数中id值
//        dump($request->get('id'));
//        $res = input('post.id',100,'intval');//返回post参数中id值,不存在给一个默认值,并且过滤设置为整型
//        dump($request->post('id',100));//post方法也可以设置第三个参数过滤
//        session('email','1713830600@qq.com');
//         $res = input('session.email','imooc@163.com');//返回post参数中id值,不存在给一个默认值,并且过滤设置为整型
//         dump($res);   
//         //Tp5中控制器中不要出现echo 和die
//         //想要显示可以直接return “123”
        //响应 response
//        $res = [
//            'code'=>200,
//            'list'=>[1,2,3,4,5,6]
//        ];
//        //config('default_return_type', 'xml');
//       //Config::set('default_return_type', 'json');
//        return $res;
        //这种方法不推荐使用，选择继承controller类
//        视图
        //默认模板地址
        // app\index\view\index\index.html
       // return view();
        //第二个参数向页面分配对象,页面中使用{$email}获取
        //第三个参数 替换
//        return view('index',[
//            'email'=>'1713830600@qq.com',
//            'user'=>'tianshaoteng'
//        ],[
//            'STATIC'=>'这是static替换内容'
//        ]);
        // app\index\view\index\upload.html
        //return view('upload');
        //app/index/view/public/upload.html
        //return view('public/upload');
        
       // return $this->fetch();
       // return $this->fetch('index');
        //return $this->fetch('upload');
        //return $this->fetch('public/upload
        //$this->assign也可以用来传值
//        $this->assign('assign','assign的值');
//     // $this->view->key2='value2'; //传值方式
//      //View::share('key3','value3');//传值方式
//        return $this->fetch('index',[
//            'email'=>'1713830600@qq.com',
//            'user'=>'tianshaoteng'
//        ],[
//            'STATIC'=>'只是替换的'
//        ]);
//        视图中的内容
//        <!--        <p>{$email}</p>
//        <p>{$assign}</p>
//        <p>STATIC</p>
//        <p>__123__</p>
//        <p>__URL__</p>
//        <p>__STATIC__</p>
//        <p>__JS__</p>
//        <p>__CSS__</p>
//-->
//        $this->assign('user','imooc');
//        return $this->display('这是一个{$email}的字符串{$user}', [
//            'email'=>'1778975430@qq.com'
//        ]);
        //dump($_SERVER);
        //session('name','tiantianle');
        //cookie('last','猪头');
//        $this->assign('email','1713830600@qq.com');
//        $this->assign('time',time());
//        $this->assign('a',10);
//        $this->assign('b',20);
        
        /*
                <p>{$Think.server.HTTP_HOST}</p>
        <p>{$Think.env.PHP_STATUS}</p>
        <p>{$Think.session.name}</p>
        <p>{$Think.cookie.last}</p>
        <p>{$Think.get.id}</p>
        <p>{$Think.request.id}</p>
        <p>{$Think.post.id}</p>
        
        <p>{$Think.const.APP_PATH}</p>
        <p>{$Think.APP_PATH}</p>
        
        <h2>{$email}:{$email|md5}</h2>
        <h2>{$email}:{$email|md5}:{$email|md5|strtoupper}</h2>
        <h2>{$email}:{$email|substr=0,8}</h2>
        <h2>{$email}:{$email|substr=###,0,8}</h2>
        <h2>{$time}:{$time|date='Y-m-d',###}</h2>
        <p>{$a+$b}</p>
        <p>{$a-$b}</p>
        <p>{$a*$b}</p>
        <p>{$a/$b}</p>
        <p>{$a%$b}</p>
        <p>{$a++}</p>
        default是TP内置函数
         <p>{$love|default='love'}</p>
         {literal}标签内的内容是不会编译的
    {literal}
         {$email}
    {/literal}
        */
        
        
//        $list = [
//            'user1'=>[
//                'name'=>'1.1',
//                'email'=>'1.2'
//            ],
//            'user2'=>[
//                'name'=>'2.1',
//                'email'=>'2.2'
//            ],
//            'user3'=>[
//                'name'=>'3.1',
//                'email'=>'3.2'
//            ],
//        ];
//        $this->assign('list', $list);
   /*
         *这里最终便以为<?php php>
 {php}
 {/php}
        <!--volist name是传递过来的名字 id是自定义设置临时变量 offset从那个位置开始 length长度 对mod值取余
        empty是当为空数组时 显示这里内容，empty不能直接接收原生html标签可以通过在控制器中设置，然后empty接收变量
        这里有个内置变量$i表示当前第几个遍历从1开始的-->
        {volist name='list' id='vo' offset='' length='' mod='2' empty='这里没有数据'}
            <p>{$vo.name}</p>
        {/volist}
        
        <!--foreach 有个内置变量$key表示当前下标0开始-->
        {foreach $list as $vo}
            <p>{$vo.name}:{$vo.email}</p>
        {/foreach}
        {foreach name='list' item='vo'}
            <p>{$vo.name}:{$vo.email}</p>
        {/foreach}
        <!--for-->
        {for start='1' end='10' step='2'}
            <p>{$i}</p>
        {/for}
        */
//       $this->assign('a', 10); 
//       return $this->fetch();
    }
    
    
    public function demo()
    {
        //动态配置，只针对当前方法起作用
        //config('demoAction','demo');
        //dump(config());
        return "demo";
    }
    public function info($id)
    {//http://localhost/forwork/think_web/public/index.php/index/index/info?id=5
        //http://localhost/news/5.html
       // echo url('index/index/index',['id'=>10]).'</br>';
         echo url('index/index/info',['id'=>10]).'</br>';
        return $id;
    }
}
