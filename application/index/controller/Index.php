<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class Index extends Controller
{
    public function index()
    {
        $cate1=Db('cate')->where('pid',0)->select();
        foreach($cate1 as $k=>$v){
            $cate1[$k]['ccate']=array();
            $cate2=Db('cate')->where('pid',$v['id'])->select();
            foreach ($cate2 as $k2=>$v2){
                array_push($cate1[$k]['ccate'],$v2);//合并一级与二级分类
                $cate1[$k]['ccate'][$k2]['ccate']=array();
                $cate3=Db('cate')->where('pid',$v2['id'])->select();
                foreach($cate3 as $k3=>$v3){
                    array_push($cate1[$k]['ccate'][$k2]['ccate'],$v3);
                }
            }
            
        }
        $this->assign('cate1',$cate1);
        return $this->fetch();
    }
    public  function details() {
        $id=$_GET['id'];
        $pro=Db('pro')->where('id',$id)->find();
        $this->assign('pro',$pro);
        return $this->fetch();
    }
    public  function lists(Request $request) {
        $id=$request->get('id');
        $cate=Db('cate')->where('id',$id)->find();
        $level=$cate['level'];
        if($level==3){
            $data=Db('pro')->where('cid',$id)->select();
        }elseif($level==2){
            $data=Db('pro')->where('cid',$id)->select();
            $cate=Db('cate')->where('pid',$id)->select();
            foreach ($cate as $v){
                $arr=Db('pro')->where('cid',$v['id'])->select();
                $data=array_merge($data,$arr); 
            }
        }elseif($level==1){
            $data=Db('pro')->where('cid',$id)->select();
            $cate1=Db('cate')->where('pid',$id)->select();
            foreach($cate1 as $v1){
                $data1=Db('pro')->where('cid',$v1['id'])->select();
                $cate=Db('cate')->where('pid',$v1['id'])->select();
                foreach ($cate as $v){
                    $arr=Db('pro')->where('cid',$v['id'])->select();
                    $data1=array_merge($data1,$arr);
                }
                $data=array_merge($data,$data1);
                
            }
            
        }
        $this->assign('data',$data);
        return $this->fetch();
    }
    public  function cart() {
        return $this->fetch();
    }

}
