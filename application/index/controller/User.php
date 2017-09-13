<?php 
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Session;
use think\Db;
use app\index\model\User as UserModel;
class User extends Controller
{
    public function reg(Request $request){
        if($request->isPost()){
            $data=$_POST;
            $result = $this->validate($data,'User');
            if(true !== $result){
                Session::flash('result',$result);
                echo '<script>window.history.go(-1)</script>';
            }else{
                $user = new UserModel($data);
                // 过滤post数组中的非数据表字段数据
                $user->allowField(true)->save(); //过滤模型中没有的字段
                $this->success("注册成功！即将跳转到登陆界面",'login');
            }
        }else{
            $this->view->engine->layout(false);
            return $this->fetch();
        }
    }
    public function login(Request $request){
        if($request->isPost()){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $res=Db::table('user')->where('username',$username)->where('password',$password)->find();
            if($res){
                session('user',$res);
                $this->success("登陆成功",'/index/index/index');
            }else{
                $this->error('用户名密码错误');
            }
        }else{
            $this->view->engine->layout(false);
            return $this->fetch();
        }
    }
    public function loginout(){
        session('user',null);
        $this->success('成功退出登陆，即将跳转到主页','/index/index/index');
    }
}
