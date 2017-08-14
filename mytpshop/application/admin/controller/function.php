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
use app\admin\logic\OrderLogic;
use think\AjaxPage;
use think\Page;
use think\Db;

class Order extends Base {
    //每消费2800奖金派发方法
    public function huiyuan($id){
        $user_id      =     $id ;//获得充值2800会员的ID
        $mod          =     M('users');
        $info         =     $mod ->where("user_id='$user_id' ")->find() ;
        $buy_name     =     $info['name'] ;  
        //获得该会员一二三级上级（上级可能不存在）
        $first_leader =     $info['first_leader'] ;//600
        $second_leader=     $info['second_leader'] ;//200
        $third_leader =     $info['third_leader'] ;//400
        $time         =     time() ;


        //派发三级分销奖金
        if(!empty($first_leader)){
             $info1   =     $mod->where("user_id='$first_leader' ")->setInc('distribut_money',600);
             // 构建写入的数据数组
             $data["user_id"]     =     $first_leader;//获佣用户
             $data["buy_user_id"] =     $user_id ;//购买人id
             $data["nickname"]    =     $buy_name ;//购买人名称
             $data["money"]       =     600 ;//获佣金额
             $data["create_time"] =     $time ;//分成记录生成时间
             //奖金派发存入记录表
             $log                 =     M('rebate_log') ;
             $info2               =     $log->add($data)  ;

             if(!empty($second_leader)){
                $info3   =     $mod('users')->where("user_id='$second_leader' ")->setInc('distribut_money',200);
                // 构建写入的数据数组
                $data["user_id"]     = $second_leader;//获佣用户
                $data["buy_user_id"] = $user_id ;//购买人id
                $data["nickname"]    = $info[] ;//购买人名称
                $data["money"]       = 200 ;//获佣金额
                $data["create_time"] = $time() ;//分成记录生成时间
                //奖金派发存入记录表
                $log                 = M('rebate_log') ;
                $info4               = $log->add($data)  ;

                if(!empty($third_leader)){
                    $info5   =     $mod('users')->where("user_id='$second_leader' ")->setInc('distribut_money',400);
                    // 构建写入的数据数组
                    $data["user_id"]     = $third_leader;//获佣用户
                    $data["buy_user_id"] = $user_id ;//购买人id
                    $data["nickname"]    = $info[] ;//购买人名称
                    $data["money"]       = 400 ;//获佣金额
                    $data["create_time"] = $time() ;//分成记录生成时间
                    //奖金派发存入记录表
                    $log                 = M('rebate_log') ;
                    $info6               = $mod_log->add($data)  ;
 
                }

             }  
             
        }







        //派发所述代理的奖金
        public function dljj($id){
            $mod          =     M('users'）;
            $mod_log      =     M('rebate_log');
            $info         =     $mod->where(" user_id='$id' ")->find() ;
            $first_leader =     $info['first_leader'] ;
            if(!empty($first_leader)){
                $info = $mod->where(" user_id='$first_leader' ")->getField('is_daili')->find() ;
             
                if($info==0){//第一个上级存在且为非代理，继续向上找
                    dljj($id);

                }else if($info==2){//第一个上级存在且为2级代理，发放奖金并继续向上查找
                    $info   =     $mod->where("user_id='$first_leader' ")->setInc('distribut_money',50); 
                    dljj($id);
                }else{//第一个上级为一级代理，直接派发奖金，结束查找
                    $info   =     $mod->where("user_id='$first_leader' ")->setInc('distribut_money',100);  
                }

            }else{
                //如果一级上级为空，则该用户为顶级，代理奖判定系统
            }

        }






























        
      
       
    }


}
