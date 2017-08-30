<?php

namespace app\admin\controller;


use think\Db;
use think\Request;

class User extends Common
{
    public function listadmin(){
        $data=Db::table('auth_group')->alias('a')->join('auth_group_access b','a.id=b.group_id')->join('admin c','b.uid=c.id')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function addadmin(Request $request){
        if($request->isPost()){
            $data['adminname']=$_POST['adminname'];
            $data['password']=$_POST['password'];
            $res=Db::table('admin')->insert($data);
            $group['uid']=Db::table('admin')->getLastInsID();
            $group['group_id']=$_POST['group_id'];
            $res2=Db::table('auth_group_access')->insert($group);
            if($res2){
                echo '<script>alert("添加管理员成功");parent.location.href="listadmin"</script>';
            }else{
                return $this->error('添加管理员失败');
            }
        }else{
            $data=Db::table('auth_group')->where("status=1")->select();
            $this->assign('data',$data);
            return $this->fetch();
        }
        
    }
    public function editadmin(Request $request){
        if($request->isPost()){
            $id=$_REQUEST['id'];
            $data['adminname']=$_POST['adminname'];
            $data['password']=$_POST['password'];
            $res=Db::table('admin')->where('id',$id)->update($data);
            $group['uid']=$id;
            $group['group_id']=$_POST['group_id'];
            $res2=Db::table('auth_group_access')->where('uid',$id)->update($group);
            if($res2){
                echo '<script>alert("修改管理员成功");parent.location.href="listadmin"</script>';
            }else{
                return $this->error('修改管理员失败');
            }
        }else{
            $id=$_REQUEST['id'];
            $arr=Db::table('auth_group_access')->alias('a')->join('admin b','a.uid=b.id')->where('id',$id)->find();
            $this->assign('arr',$arr);
            $data=Db::table('auth_group')->where("status=1")->select();
            $this->assign('data',$data);
            return $this->fetch();
        }
    
    }
    public function deladmin(Request $request){
        $ids=$_REQUEST['id'];
		$id = explode(',',$ids); 
		for($i=0;$i<count($id);$i++) 
		{ 
		Db::table('admin')->where('id',$id[$i])->delete();
        Db::table('auth_group_access')->where('uid',$id[$i])->delete();
		} 
		return $this->success('删除角色成功');
    }
    public function listrole(){
        $data=Db::table('auth_group')->where("status=1")->select();
        $this->assign('data',$data);
        return  $this->fetch();
    }
    public function addrole(Request $request){
        if($request->isPost()){
            $data['title']=$_POST['title'];
            $data['rules']=implode(",", $_POST['check']);
            $data['status']=1;
            $res=Db::table('auth_group')->insert($data);
            if ($res){
                echo '<script>alert("添加角色成功");parent.location.href="listrole"</script>';
            }else{
                return $this->error('添加角色失败');
            }
        }else{
            $data=Db::table('auth_rule')->where("status=1")->select();
            $this->assign('data',$data);
            // 临时关闭当前模板的布局功能
            $this->view->engine->layout(false);
            return  $this->fetch();
        }
    }
    public function editrole(Request $request){
        if($request->isPost()){
            $id=$_REQUEST['id'];
            $data['title']=$_POST['title'];
            $data['rules']=implode(",", $_POST['check']);
            $data['status']=1;
            $res=Db::table('auth_group')->where('id',$id)->update($data);
            if ($res){
                echo '<script>alert("修改角色成功");parent.location.href="listrole"</script>';
            }else{
                return $this->error('修改角色失败');
            }
        }else{
            $id=$_REQUEST['id'];
            $role=Db::table('auth_group')->where('id',$id)->find();
            $arr=explode(',', $role['rules']);
            $role['rules']=$arr;
            $this->assign('role',$role);
            $data=Db::table('auth_rule')->where("status=1")->select();
            $this->assign('data',$data);
            $this->view->engine->layout(false);
            return $this->fetch(); 
        }
    }
    public function delrole(Request $request){
        $id=$_REQUEST['id'];
        $res=Db::table('auth_group')->where('id',$id)->delete();
        if ($res){
            return $this->success('删除角色成功');
        }else{
            return $this->error('删除角色失败');
        }
    }
    public function permission(){
        $data=Db::table('auth_rule')->where("status=1")->select();
        $this->assign('data',$data);
        return  $this->fetch();
    }
    public function addpermission(Request $request){
        if($request->isPost()){
            $arr=$_POST;
            $res=Db::table('auth_rule')->insert($arr);
            if($res){
                echo '<script>alert("添加权限节点成功");parent.location.href="permission"</script>';
                 //return $this->success('添加权限节点成功','/admin/user/permission');
            }else{
                return $this->error('添加权限节点失败','/admin/user/addpermission');
            }
        }else{
            return $this->fetch();
        }
    }
    public function editpermission(Request $request){
        if($request->isPost()){
            $id=$_REQUEST['id'];
            $arr=$_POST;
            $res=Db::table('auth_rule')->where('id',$id)->update($arr);
            if($res){
                return $this->success('修改权限节点成功','/admin/user/permission');
            }else{
                return $this->error('修改权限节点失败','/admin/user/editpermission?id='.$id);
            }
        }else{
            $id=$_REQUEST['id'];
            $data=Db::table('auth_rule')->where('id',$id)->find();
            $this->assign('data',$data);
            return $this->fetch();
        }
    }
    public function delpermission(Request $request){
        $id=$_REQUEST['id'];
        $res=Db::table('auth_rule')->where('id',$id)->delete();
        if($res){
            return $this->success('删除权限节点成功','/admin/user/permission');
        }else{
            return $this->error('删除权限节点失败','/admin/user/permission');
        }
    }
}
