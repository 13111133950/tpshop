<?php
namespace app\index\controller;
use think\Controller;
use think\Cart;

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
    public  function lists($id,$order=null,$sales=null) {
        $le=Db('cate')->where('id',$id)->find();
        $level=$le['level'];
        if(!$order&&!$sales){
            $pro=Db('pro');
        }elseif($sales){
            $pro=Db('pro')->order('num '.$sales);
        }elseif($order=='desc'){
            $pro=Db('pro')->order('price '.$order);
            $this->assign('order','asc');
        }else{
            $pro=Db('pro')->order('price '.$order);
            $this->assign('order','desc');
        }
        if($level==3){
            $data=$pro->where('cid',$id)->select();
        }elseif($level==2){
            $cate=Db('cate')->where('pid',$id)->field('id')->select();
            $ids = array_column($cate, 'id');  //二维数组变一维
            $ids[]=(int)$id;
            $data=$pro->where('cid','in',$ids)->select();
        }elseif($level==1){
            $cate=Db('cate')->where('pid',$id)->field('id')->select();
            $ids = array_column($cate, 'id');
            $cate2=Db('cate')->where('pid','in',$ids)->field('id')->select();
            $ids2=array_column($cate2, 'id');
            $ids=array_merge($ids,$ids2);
            $ids[]=(int)$id;
            $data=$pro->where('cid','in',$ids)->select();
        }
        $this->assign('data',$data);
        $this->assign('id',$id);
        return $this->fetch();
        
    }
    public  function searchresult($info="手机",$order=null,$sales=null) {
        if(!$order&&!$sales){
            $data=Db('pro')->where('pname','like','%'.$info.'%')->select(); 
            $this->assign('data',$data);
        }elseif($sales){
            $data=Db('pro')->where('pname','like','%'.$info.'%')->order('num '.$sales)->select(); //注意 price后面的空格
            $this->assign('data',$data);
        }elseif($order=='desc'){
            $data=Db('pro')->where('pname','like','%'.$info.'%')->order('price '.$order)->select(); //注意 price后面的空格
            $this->assign('data',$data);
            $this->assign('order','asc');
        }else{
            $data=Db('pro')->where('pname','like','%'.$info.'%')->order('price '.$order)->select(); //注意 price后面的空格
            $this->assign('data',$data);
            $this->assign('order','desc');
        }
        $this->assign('info',$info);
        return $this->fetch();
    }
    
    public  function cart($act=null,$id=null,$num=null) {
        $cart=new Cart();
        
        if($act=='edit'){
            $cart->editnum($id,$num);
            $data="数量修改成功！";
            return $data;
        }elseif($act=='del'){
            $cart->delItem($id);
            $data="商品成功从购物车中删除！";
            return $data;
        }
        $price=$cart->getPrice();
        $cart=$cart->all();
        
        $this->assign('cart',$cart);
        $this->assign('price',$price);
        return $this->fetch();
    }
    public  function addtocart($id=null,$num=1) {
        $pro=Db('pro')->where('id',$id)->find();
        $cart=new Cart();
        $cart->addItem($pro);
        var_dump($cart->getPrice());
        
    }
    
    
    
    public  function test($info="手机",$id='1') {
        $cart=new Cart();
        return $cart->getPrice();
    }
}
