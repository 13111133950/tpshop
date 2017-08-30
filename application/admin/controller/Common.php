<?php
namespace app\admin\controller;
use think\Controller;
use think\Auth;
use think\Request;
class Common     extends Controller
{
    //当任何函数加载时候  会调用此函数
     public function _initialize(){//默认的方法  会自动执行 特征有点像构造方法
        if(empty(session('admin'))){
            $uid=11; //游客账号 caocao
        }else{
            $uid=session('admin')['id'];
        }
        $auth = new Auth();  
        $request = Request::instance();  
        if (!$auth->check($request->module() , $uid)) {// 第一个参数是规则名称,第二个参数是用户UID
            if(!$auth->check($request->module() . '/' . $request->controller() , $uid)){
                if(!$auth->check($request->module() . '/' . $request->controller() . '/' . $request->action(), $uid)){
                    $this->error('您没有权限','/admin/index/index');
                }
            }
        }
    }
    
    
}