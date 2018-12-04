<?php


namespace app\common\controller;
use think\Controller;


class Base extends Controller
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        define('CSS','/static/'.$this->request->module().'/css/');
        define('JS','/static/'.$this->request->module().'/js/');
        define('IMG','/static/'.$this->request->module().'/images/');
        define('COMMON_MIN_JS','/static/common/js/common.min.js?v='.time());
        define('FONT_CSS','/static/admin/css/font.css');
        define('ADMIN_CSS','/static/admin/css/xadmin.css');
        define('LAYUI_JS','/static/lib/layui/layui.js');
        define('ADMIN_JS','/static/admin/js/xadmin.js');
        define('JQ','https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js');
        defined('IS_POST') or define('IS_POST', $this->request->isPost());
        defined('IS_AJAX') or define('IS_AJAX', $this->request->isAjax());
        defined('IS_GET') or define('IS_GET', $this->request->isGet());
    }

    /**
     * 返回处理结果
     * @param Boolean $result 处理结果
     * @param string $url 跳转链接
     * @param string $type 返回类型，默认Ajax返回
     * @param string $info 返回信息
     * liuxuanyi 2018-11-29
     */
    protected function returnResult($result, $url = '', $info = '')
    {
        if($url === false){
            $url = '';
        }else{
            $url = empty($url) ? url(request()->controller() . '/index') : $url;
        }
        if($result === false){
            $info = empty($info) ? '操作失败！' : $info;
            $data = array('info' => $info, 'url' => $url, 'status' => 0);
        }else{
            $info = empty($info) ? '操作成功！' : $info;
            $data = array('info' => $info, 'url' => $url, 'status' => 1, 'id' => $result);
        }
        return json($data);
    }
}