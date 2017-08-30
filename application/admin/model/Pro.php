<?php

namespace app\admin\model;

use think\Model;

class Pro extends Model
{
    public function getAttributesAttr($val)
        {
            $attributes = [1=>'推荐',2=>'新品',3=>'热卖',4=>'促销',5=>'包邮',6=>'限时',7=>'不参与会员折扣'];
            return $attributes[$val];
        }
    public function getStatusAttr($val)
        {
            $status = [1=>'下架',0=>'上架'];
            return $status[$val];
        }
}
