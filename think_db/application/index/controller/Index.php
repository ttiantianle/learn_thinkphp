<?php
namespace app\index\controller;
use think\Config;
use think\Env;
use think\Request;
use think\Controller;
use think\View;
use think\Db;
use app\index\model\User;
use app\index\model\Test;
use think\Loader;
//use think\Collection;
//use app\index\validate;
class Index extends Controller
{
    public function index()
    {  
//        $res = User::get(2);
//        //echo $res->sex;//自动调用getSexAttr
//        dump($res->toArray());//返回的数据相当于 调用了getSexAttr方法
//        dump($res->getData());//返回原始数据
//       $res = User::create([
//           'username'=>'imooc',
//           'sex'=>1,
//           'email'=>'imooc@qq.com',
//           'password'=>'imooc'
//       ]); 
//        $userModel = User::get(1);
//        $userModel->sex = 2;
//        $res = $userModel->save();
//       dump($res);
//        $res = Test::create([
//            'name'=>'imooc',
//            'password'=>md5('imooc'),
//        ]);
//        $userModel = Test::get(1);
//        $userModel->name = 'xiaoming';
//        $res = $userModel->save();
//        $res = Test::destroy(1);
//        $res = Test::get(1);//删除之后查看获取状态 null 
//        //dump($res);
//        $res = Test::withTrashed(true)->find(1);//想要获取软删除的数据
//        dump($res->getData());
//        $res = Test::onlyTrashed()->select();
//        foreach ($res as $val) {
//            dump($val->getData());
//        }
        //dump($res);
//       $res = Test::destroy(2);
//        $res = Test::destroy(2,true);//引入如删除后，想要真正删除数据，给第二个参数设置true
        #软删除
//        $user = Test::get(1);
//       $res = $user->delete();
       #真正的删除，注意必须是没有执行过软删除的数据，否则会报错
//       $user = Test::get(3);
//       $res = $user->delete(true);
//        dump($res);
    } 
    
    public function yanzhengqiDemo()
    {
//        $data = [
//            'name'=>'thinkphp',
//            'email'=>'thinkphp@qq.com'
//            ];
//
//        $validate = Loader::validate('User');
//
//        if(!$validate->check($data)){
//            dump($validate->getError());
//        }
        #第二个参数验证规则
        $result = $this->validate(
                [
                    'name'  => 'thinkphp',
                    'email' => 'thinkphp@qq.com',
                ],
                [
                    'name'  => 'require|max:25',
                    'email'   => 'email',
                ]);
        if(true !== $result){
            // 验证失败 输出错误信息
            dump($result);
        }
    }
    public function juheModelDemo() {
//        $data=[];
//        for($i=1;$i<10;$i++){
//            $data[] =[
//                'username'=>"imooc_{$i}",
//                "email"=>"imooc_{$i}@qq.com",
//                "password"=> md5("imooc_{$i}"),     
//                "num"=> $i+10
//            ];
//        }
//        $user = new User;
//        $user->saveAll($data);//返回模型对象
//        dump($user);
//        $res = User::count();
//        $res = User::where('id','>',5)
//                ->count();
//        $res = User::max('num');
//         $res = User::where('id','<',5)
//                 ->max('num');
//         
//         $res = User::sum('id');
//         $res = User::where('id','<',5)->sum('id');
//         $res = User::avg('id');
//         $res = User::where('id','<',5)->avg('id');
//         
//        $res = User::min('id');
//         $res = User::where('id','<',5)->min('num');
//        dump($res);
    }
    public function deleteModelDemo() {
        //$res = User::destroy(1);//返回受影响记录数
        //$res = User::destroy(['id'=>2]);//返回受影响记录数
//        $res = User::destroy(function($query){
//            $query->where('id','<',5);
//        });
//        $userModel = User::get(6);//没有 数据会报错
//        $res = $userModel->delete();
//          $res = User::where('id','eq',5)//返回受影响记录数，没有返回0
//                    ->delete();
         $res = User::where("1=1")//删除所有数据
                    ->delete();
        dump($res);
    }
    public function updateModelDemo() {
//        $data=[];
//        for($i=1;$i<21;$i++){
//            $data[] =[
//                'username'=>"imooc_{$i}",
//                "email"=>"imooc_{$i}@qq.com",
//                "password"=> md5("imooc_{$i}"),     
//                "num"=> $i+100 
//            ];
//        }
//        $userModel= new User;
//        $res = $userModel->saveAll($data);
//        dump($res);
        #更新数据
        #数组中存在主键可以不加where条件
//        $res = User::update([
//            'id'=>1,//存在主键
//            'username'=>'1778975430'
//        ]);
//        $res = User::update([
//            'username'=>'1778975430'
//        ],['id'=>2]);//第二个参数是where条件
//        
//         $res = User::update([
//            'username'=>'1778975430'
//        ],function($query){
//             $query->where('id','<',5);
//        });//第二个参数是where条件,闭包函数
//        #推荐使用，可以返回受影响记录数
//        $res = User::where('id','<',6)
//                ->update([
//                    'username'=>'1778975430'
//                ]);
               
//        $userModel =User::get(1);
//        $userModel->username = '123';
//        $userModel->email = '123@qq.com';
//        $res = $userModel->save(); //返回受影响数
//        $userModel = new User;
//        $res = $userModel->save([
//            'email'=>'321@qq.com'
//        ],['id'=>5]);//第二个参数条件
//         $userModel = new User;
//        $res = $userModel->save([
//            'email'=>'321@qq.com'
//        ],function($query){
//            $query->where('id','<',5);
//        });//第二个参数条件,闭包函数
        #不建议使用
        $userModel = new User;
        $res = $userModel->saveAll([
            ['id'=>1,'username'=>1],
            ['id'=>2,'username'=>2]
        ]);
        dump($res);
        
        
    }
    public function addModelDemo()
    {
        #create
//        $res = User::create([
//            'username' => 'imooc',
//            'password' => md5('imooc'),
//            'email' => 'imooc@qq.com',
//            'num' => 100,
//            'demo'=>132//不存在数据
//        ],true);//第二个参数为true排除掉数据库不存在的字段，第二个参数为一个数组时表示只允许添加指定的字段
//          $res = User::create([
//            'username' => 'imooc',
//            'password' => md5('imooc'),
//            'email' => 'imooc@qq.com',
//            'num' => 100,
//            'demo'=>132//不存在数据
//        ],['username','email']);//第二个参数为true排除
//        dump($res->id);
//        
//        #save方法
//        $userModel = new User;
//        $userModel->username = '1713830';
//        $userModel->email='1713830600@qq.com';
//        $userModel->save();//成功返回1
//        dump($userModel->id);
        
//        $userModel= new User;
//         $res = $userModel->save([
//            'username' => 'imooc',
//            'password' => md5('imooc'),
//            'email' => 'imooc@qq.com',
//            'num' => 100
//        ]);
//          $userModel= new User;
//         $res = $userModel->allowField(true)->save([ //allowField方法排除不存在字段，或者是数组允许插入的字段
//            'username' => 'imooc',
//            'password' => md5('imooc'),
//            'email' => 'imooc@qq.com',
//            'num' => 100,
//             'demo'=>123//不存在字段
//        ]);
        #添加多条数据
//        $userModel= new User;
//        $res = $userModel->allowField(true)->saveAll([
//           ['email'=>'17791@qq.com'],
//           ['email'=>'17792@qq.com','demo'=>'1234']
//        ]);
//        foreach ($res as $val)
//        {
//            dump($val->toArray());
//        }
//        dump($res);
    }

    public function selectModelDemo()
    {
        //dump(Db::connect());
       //$res =  Db::query("select * from imooc_user where id = ?",[1]);
        //$res = User::get(1);
        //dump($res->username);可以直接使用model对象获取属性值
        //$res = $res->toArray();转换成数组
//        $res = User::get(function($query){
//            $query->where('id','eq',1);
//        });//闭包函数
//        $res = User::where("id",12)
//                ->field("id,username")
//                ->find();
//           $res = user::all("1,2,3");//主键
//           $res = user::all([1,2,3]]);//主键
//           res = User::all(function($query){
//            $query->where('id','<',5);
//        });//闭包函数
//        $res = User::where('id','>',15)
//                ->field('username,email')
//                ->limit(3)
//                ->order('id desc')
//                ->select();
//        foreach($res as $val){
//        dump($val->toArray());
//        }
        //dump($res->toArray());
//        $res = User::where('id',15)->value('email');//只获取一条
//         $res = User::column('email');//返回一维数组
        $res = User::column('email','username');//返回一维关联数组，第二个参数作为键
        dump($res);
    }
    public function modelDemo(){
       //推荐使用第一种方法
 //      $res = User::get(1)->toArray();
//        
//        $user = new User;
//        $res = $user::get(2);
        
//        $user = Loader::model('user');
//        $res = $user::get(3);
//        $user = model('user');
//        $res = $user::get(3);
       // $res=$res->toArray();
      
//        User::get();
//        User::where()->field()->find();  
//        User::all();
          $res = collection(User::where('id','>',0)->select())->toArray();
//        
//     User::create([]);
//        User::create([],true);#添加数据，不存在字段不插入
//         User::create([],['','']);#允许指定字段插入
//         
//        $usermodel =new User;
//        $usermodel->username='';
//        $usermodel->password=md5('');
//        $usermodel->save();
          
//          $usermodel =new User;
//          $usermodel->save([ ''=>'',]);
//          $usermodel->allowField("username,email")->save([ ''=>'',]);
        
//             $usermodel =new User;
//             $res=$usermodel->saveAll([
//                 [ 'email'=>''],
//                 ['email'=>''],
//              ]);
        dump($res);
        
    }
    public function dbLianshiDemo(){
//        $db = Db::name('user');
//        $data =[];
//        for($i=1;$i<21;$i++){
//            $data[] = [
//              'username'=>"imooc_{$i}",
//              "email"   =>"imooc_{$i}@qq.com",
//              "password"=>md5("imooc_{$i}"),
//              "num"     => $i+100
//            ];
//        }
//        $res = $db->insertAll($data);
        $res = Db::table('imooc_user')
            ->where('id','>',10)
            ->field("username,id,group")
            //->order('id desc')
            //->limit(3,5)
           //->page(2,5) // 相当于limit(（2-1）*5,5)  
            ->group("`group`")//只保存分组中的一条
            ->select();
        dump($res);
    }
    public function dbGouzaoqiDemo()
    {
        $db = Db::name('user');
        $sql = $db->where('id','EQ','q')
           ->where('email','NEQ','www.com')
           ->whereOr('username','EQ','tianshoat')
           ->buildSql();
        dump($sql);
    }
     public function dbDeleteDemo()
     {
          $db = Db::name('user');
          #删除 
          $res = $db->where(['id'=>1])->delete();
           $res = $db->where("1=1")->delete();
          $res = $db->delete(2);#删除条件是 主键
          dump($res);
     }
    public function dbUpdateDemo()
    {
        $db = Db::name('user');
        #update 返回受影响数，但是必须加where条件即使更新所有也必须加
//        $res = $db->where(['id'=>1])->update(['username'=>'tianshaoteng']);
//        dump($res);
//        #setField 返回受影响记录数 每次只更新一个字段
//       $res = $db->where(['id'=>3])->setField('username','wangsan');
//       #setInc （没有第二个参数时）每次执行该字段自增1 有第二个参数时每次增加第二个参数值 返回受影响行数
//        $res = $db->where(['id'=>2])->setInc('num');
         #setdec （没有第二个参数时）每次执行该字段自减1 有第二个参数时每次减少第二个参数值 返回受影响行数
        $res = $db->where(['id'=>2])->setDec('num');
        dump($res);
    }
    public function dbInsertDemo() {
        $db = Db::name('user');
        #insert 返回值为受影响记录数，插入数
//        $res = $db->insert([
//            'email'     =>  'immoc@qq.com',
//            'username'  =>  'wang',
//            'password'  =>  md5('321')
//        ]);
//        #返回自增id
//         $res = $db->insertGetId([
//            'email'     =>  'immoc@qq.com',
//            'username'  =>  'wang',
//            'password'  =>  md5('321')
//        ]);
//        #插入多条记录 $data 是一个二维数组，返回受影响记录数
        //$db->insertAll($data);
        dump($res);
    }
    public function dbSelectDbDemo()
    {
          //$res = Db::query("select * from imooc_user where id = ?",[1]);
//       $res = Db::execute("insert into imooc_user set username=? and password=? and email=?",[
//           'le',
//           md5('321'),
//           '321@qq.com']);
        #返回的结果是一个二维数组，不存在返回一个空数组
        //$res = Db::table('imooc_user')->select();
       // $res = Db::table('imooc_user')->select()->where(['id'=>100]);
        #column 返回一个数组，如果存在第二个参数，就返回一个数组，用第二个参数的值作为key
        #如果结果不存在返回空数组
        //$res = Db::table('imooc_user')->column('username');
        //$res = Db::table('imooc_user')->column('email','username');
        
        #find 范湖一个记录，一维数组
        #如果不存在返回NULL
       // $res = Db::table('imooc_user')->find();
        //$res = Db::table('imooc_user')->where(['id'=>100])->find();
        #value 返回一条记录 并且是某个字段的值,不存在返回null
        //$res = Db::table('imooc_user')->value('username');
        //$res = Db::table('imooc_user')->where(['id'=>100])->value('username');
       
        //$res = Db::name('user')->select();
        $res = db('user')->select();
         $res = db('user',[],false)->select();
        dump($res); 
    }

    public function dbConnnectDemo(){
         //$res =  Db::connect();
      //dump($res);
       /* $res = Db::connect([
            'type'            => 'mysql',
             'hostname'        => '127.0.0.1',
            'database'        => '',
            'username'        => 'root',
            'password'        => '123',
            'hostport'        => '',
            'charset'         => 'utf8',
            'prefix'          => '',
        ]);*/
        $res = Db::connect('mysql://root_user:root@127.0.0.1:3306/shop#utf8');
        dump($res);
    }
}
