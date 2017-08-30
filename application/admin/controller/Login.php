<?php
namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;

class Login extends Controller
{
    public function login(Request $request){
        if($request->isPost()){
            $adminname=$_POST['adminname'];
            $password=$_POST['password'];
            $res=Db::table('auth_group')->alias('a')->join('auth_group_access b','a.id=b.group_id')->join('admin c','b.uid=c.id')->where('adminname',$adminname)->where('password',$password)->find();
            if($res){
                session('admin',$res);
                $this->success("登陆成功",'/admin/index/index');
            }else{
                $this->error('用户名密码错误');
            }
        }else{
            $this->view->engine->layout(false);
            return $this->fetch();
        }
    }
    public function loginout(){
        session('admin',null);
        $this->success('成功退出登陆，即将跳转到主页','/admin/index/index');
    }
}