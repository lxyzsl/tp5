<?php
namespace app\admin\controller;
use app\common\controller\Admin;

class Index extends Admin
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {

    }

}
