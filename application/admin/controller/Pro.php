<?php
namespace app\admin\controller;


use think\Db;
use think\Request;
use think\Model;

class Pro extends Common
{
    public function listpro()
    {
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $data=Db('cate')->where('id',$id)->find();
            $level=$data['level'];
            if($level==3){
                $pro=Db::table('cate')->alias('c')->join('pro p','p.cid = c.id')->where('cid',$id)->select();
            }elseif($level==2){
                $ccate=Db('cate')->where('pid',$id)->field('id')->select();
                $ids = array_column($ccate, 'id');
                $ids[]=(int)$id;
                $pro=Db::table('cate')->alias('c')->join('pro p','p.cid = c.id')->where('cid','in',$ids)->select();
            }elseif($level==1){
                $ccate=Db('cate')->where('pid',$id)->field('id')->select();
                $ids = array_column($ccate, 'id');
                $cccate=Db('cate')->where('pid','in',$ids)->field('id')->select();
                $ids2=array_column($cccate, 'id');
                $ids=array_merge($ids,$ids2);
                $ids[]=(int)$id;
                $pro=Db::table('cate')->alias('c')->join('pro p','p.cid = c.id')->where('cid','in',$ids)->select();
            }
        }else{
            $pro=Db::table('cate')->alias('c')->join('pro p','p.cid = c.id')->paginate(5);
            $page = $pro->render();
            $this->assign('page',$page);
        }
        $this->assign('pro',$pro);
        $this->view->engine->layout(false);
        return $this->fetch();

    }
    public function addpro(Request $request)
    {
        if ($request->isPost()) {
            $data=$_POST;
            unset($data['file']);
            $res=Db::table('pro')->insert($data);
            if($res){
                $this->success("添加成功",'listpro');
                //echo '<script>alert("添加成功");parent.location.href="index"</script>';
            }else{
                $this->error("添加失败",'addpro');
            
            }
        }else{
            $cate=Db::table('cate')->field(['*','concat(path,",",id) as paths'])->order('paths')->select();
            foreach($cate as $k=>$v){
                $cate[$k]['name']=str_repeat("|------",$v['level']).$v['name'];
            }
            $this->assign('cate',$cate);
            // 临时关闭当前模板的布局功能
            $this->view->engine->layout(false);
            return $this->fetch();
        }
    }
    public function editpro(Request $request)
    {
        if ($request->isPost()) {
            $id=$_GET['id'];
            $data=$_POST;
            unset($data['file']);
            $res=Db::table('pro')->where('id',$id)->update($data);
            if($res){
                $this->success("修改成功",'listpro');
                //echo '<script>alert("添加成功");parent.location.href="index"</script>';
            }else{
                $this->error("修改失败",'listpro');
        
            }
        }else{
            $id=$_GET['id'];
            $pro=Db::table('pro')->where('id',$id)->find();
            $this->assign('pro',$pro);
            // 临时关闭当前模板的布局功能
            $this->view->engine->layout(false);
            $cate=Db::table('cate')->field(['*','concat(path,",",id) as paths'])->order('paths')->select();
            foreach($cate as $k=>$v){
                $cate[$k]['name']=str_repeat("|------",$v['level']).$v['name'];
            }
            $this->assign('cate',$cate);
            return $this->fetch();
        }
    
    }
    public function upload() {
        /* $files = request()->file('image');
        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'upload');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                echo $info->getExtension(); 
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                echo $info->getFilename(); 
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }    
        } */
        var_dump($_FILES);
        
    }

}