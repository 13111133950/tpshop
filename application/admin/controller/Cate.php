<?php
namespace app\admin\controller;

use think\Db;
use think\Request;
class Cate extends Common
{
    public function ajax(){
        $data=Db::table('cate')->field('id,pid,name')->select();
        echo json_encode($data);
    }
    public function delcate(){
        $id=$_GET['id'];
        $data=Db::table('cate')->where('pid',$id)->find();
        if($data){
            $str="分类下面还子分类,不允许删除";
            echo json_encode($str);
        }else{
            $re=Db::table('cate')->where('id',$id)->delete();
            if($re){
                echo 1;
            }
        }
    }
    public function addcate()
    {
        if (request()->isPost()) {
            $cate=$_POST;
            if($cate['name']&&$cate['pid']!=0){
                $pcate=Db::table('cate')->where('id',$cate['pid'])->find(); //find()返回一维数组 select返回二维数组
                $cate['path']=$pcate['path'].','.$pcate['id'];
                $cate['level']=$pcate['level']+1;
            }elseif($cate['name']&&$cate['pid']==0){
                $cate['path']=0;
                $cate['level']=1;
            }else{
                $this->error("添加失败,内容不能为空",'addcate');
            }
            $res=Db::table('cate')->insert($cate);
            if($res){
                $this->success("添加成功",'addcate');
            }else{
                $this->error("添加失败",'addcate');
            } 
        }else{
            $cate=Db::table('cate')->field(['*','concat(path,",",id) as paths'])->order('paths')->select();
            foreach($cate as $k=>$v){
                $cate[$k]['name']=str_repeat("|------",$v['level']).$v['name'];
            }
            $this->assign('cate',$cate);
            $this->view->engine->layout(false);
            return $this->fetch();
        }
    }
}
