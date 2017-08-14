<?php
/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用 .
 * 不允许对程序代码以任何形式任何目的的再发布。
 * 采用TP5助手函数可实现单字母函数M D U等,也可db::name方式,可双向兼容
 * ============================================================================
 * Author: 当燃
 * Date: 2015-09-09
 */
namespace app\admin\controller;
use think\AjaxPage;
use think\Controller;
use think\Url;
use think\Config;
use think\Page;
use think\Verify;
use think\Db;
class Fendian extends Base {

     public function fendian(){
         $mod=M('users')->select();
         $model=M('user_store');
         $count=$model->count();
         //$a=select nickname from rebate_log inner join users on rebate_log.id=users.id;
         $page=new Page($count,2);
         $show=$page->show();
         $data=$model->order('store_time desc')
             ->limit($page->firstRow,$page->listRows)
             ->select();
         /* $data1=$model->order('create_time desc')->select();
          $num = count($data1) ;*/
         //$data1=$model->where('id=1')->select();
         //$data=$model->query("select tp_users.nickname as na from tp_rebate_log right join tp_users on tp_rebate_log.id=tp_users.user_id;");
         //$m=M('rebate_log')->select();
         //$num=count($data1);
         $this->assign('show',$show);
         $this->assign('data',$data);
         $this->assign('mod',$mod);
         $this->assign('count',$count);
         return $this->fetch();
     }

      /*public function tree(){
         echo "this is tree" ;
         return $this->fetch();
     }

      public function distributor_list(){
         echo "this is distributor_list()" ;
         return $this->fetch();
     }*/





}