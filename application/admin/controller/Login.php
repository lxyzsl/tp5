<?php
namespace app\admin\controller;
use app\common\controller\Admin;

class Login extends Admin
{
    /**
     * 登录页
     */
    public function index()
    {
        if(IS_POST){
           return $this->returnResult(true,url('index/index'),'登录成功');
        }else{
            return $this->fetch();
        }

    }

    /**
     * 记录登录日志
     */
    public function saveLoginLog()
    {

    }

    /**
     * 登录账号时间检测
     */
    public function checkErrorNum()
    {

    }

    /**
     * 登出
     */
    public function logout()
    {

    }

    /**
     * 验证码
     */
    public function verify()
    {

    }

}