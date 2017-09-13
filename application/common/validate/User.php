<?php
namespace app\common\validate;
use think\Validate;
class User extends Validate
{
    protected $rule = [
        'username'  =>  'require|length:4,10',
        'password'=>'require|confirm',
        'email' =>  'require|email',
        //'repassword'=>'require|confirm:password',
    ];
    
    protected $message = [
        'username.require'  =>  '用户名为空',
        'username.length:4,10'  =>  '用户名必须为4-10个字符',
        'email.require'  =>  '邮箱为空',
        'email' =>  '邮箱格式错误',
        
        
        //'require'=>':attribute为空'
    ];
    
    /* protected $scene = [
        'add'   =>  ['name','email'],
        'edit'  =>  ['email'],
    ]; */
}