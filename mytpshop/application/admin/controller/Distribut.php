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
class distribut extends Base {
    

     /**
     * 模块：分销商品
     * 功能：遍历展现分销商品
     */
    public function goods_list(){
        $mod  =   M('goods') ;
        //分页
        $page=new Page($mod->count(),10);
        $info =   $mod->where('is_fx = 1')->limit($page->firstRow,$page->listRows)->select() ;
        $info1 =   $mod->where('is_fx = 1')->select() ;
        //统计查询数据条数
        $num   =   count($info1) ;
        $this->assign('pageinfo',$page->show());
        $this->assign('info',$info);
        $this->assign('num',$num);    
        return $this->fetch();
    }



      /**
     * 模块：分销商品
     * 功能：分销商品删除（并非从数据库删除，只是改变字段值，将其变为非分销商品）
     */
    public function goods_delete(){
        $goods_id       =   $_GET['id'] ;
        $mod            =   M('goods');
        $info           =   $mod->where("goods_id= '$goods_id' ")->setField('is_fx','1');
        if($info){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }





    /**
     * 模块：分销商信息列表
     * 功能：分销商信息展示
     */

     public function distributor_list(){
        $model=M('users');   
        $count=$model->count();
        $page  = new Page($count,10);
        $show=$page->show();        
        $data=$model->limit($page->firstRow,$page->listRows)->select();
        $this->assign('show',$show);
        $this->assign('data',$data);
        return $this->fetch();

        
    }
    //分销商信息编辑
    public function distributor_edit(){
        //echo "this is edit" ;
        $id = I('get.user_id');
        $model = D('users');
        $info = $model->find($id);
        /*$info=$model->where('user_id' , $data['user_id'])->save($data);*/
        //var_dump($info);exit;
        $this->assign('info',$info);
        return $this->fetch();
        
    }
    
    //分销商信息编辑保存
    public function distributor_update(){
        $post = I('post.user_id');
        $data = I('post.');
        $model = D('users');
        //$info = $model->find($post);
        //$user = $model->where("user_id = '$user_id' ")->setField('user_id','1');
        $data = $model->where(array('user_id'=>$post))->save($data);
        //echo $model->getlastsql();exit ;
        if($data) {
                $this->success('操作成功！', U('Distribut/distributor_list') , 20);
            }else{
                $this->error('写入错误！');
            }


    }

    //分成日志
    public function rebate_log(){
        $mod=M('users')->select();
        $model=M('rebate_log');
        //$a=select nickname from rebate_log inner join users on rebate_log.id=users.id;
        $count=$model->count();
        $page=new Page($count,10);
        $show=$page->show();
        $data=$model->order('create_time desc')->limit($page->firstRow,$page->listRows)->select();
        //$data=$model->query("select tp_users.nickname as na from tp_rebate_log right join tp_users on tp_rebate_log.id=tp_users.user_id;");
        $this->assign('show',$show);
        $this->assign('data',$data);
        $this->assign('mod',$mod);
        return $this->fetch();
    }






    /**
     * 模块：分销关系列表
     * 功能：遍历展现分销关系
     */
     public function tree(){
        $supplier_count = M('users')->where('is_distribut=1')->count(); //显示有多少条数据
        $page = new Page($supplier_count, 10);  //分页数
        $show = $page->show();  
        $supplier_list = M('users')->where('is_distribut=1')->limit($page->firstRow, $page->listRows)->select();    //从数据库读取有多少分销用户
        $users = M('users')->select(); //从数据库读取总用户
        $this->assign('user',$supplier_list);
        $this->assign('users',$users);
        $this->assign('page', $show);
        return $this->fetch();
    }

    
    /**
     * 模块：分销关系修改
     * 功能：修改分销关系展示
     */
    public function treeedit(){
        $user_id=I('get.user_id');  //取出要修改的用户ID
        $a = 'user_id='.$user_id;   //where条件
        $mod = M('users')->where($a)->find();   //从数据库读取用户信息
        $this->assign('user',$mod);
        return $this->fetch();
    }
    /**
     * 模块：分销关系删除
     * 功能：把分销用户改成普通用户,实现删除分销关系的功能
     */
    public function treedel(){
        $user_id=I('get.user_id');  //获取要删除的用户ID
        $a = 'user_id='.$user_id;   //where条件
        $data['is_distribut']=0;    //把分销的字段改为0,实现删除的效果
        $mod = M('users')->where($a)->save($data);  //修改数据库数据
        if($mod){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    /**
     * 模块：执行分销关系修改
     * 功能：把已经提交的数据在数据库进行修改
     */
    public function doedit(){
        $data = I('post.'); //读取post提交的表单数据
        $id='user_id='.$data['user_id'];    //取出要修改的用户ID
        $user = M('users'); //获取数据库信息
        $c = $user->where($id)->save($data);    //执行修改
        if($c){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }





    /**
     * 模块：分销设置 代理佣金
     * 功能：代理佣金展示
     */

     public function set(){
        $model=M('dlyj');   
        $count=$model->count();
        $page  = new Page($count,10);
        $show=$page->show();        
        $data=$model->limit($page->firstRow,$page->listRows)->select();
        $this->assign('show',$show);
        $this->assign('data',$data);
        return $this->fetch();    
    }
    /**
     * 模块：分销设置 代理佣金 
     * 功能：把已经提交的数据在数据库进行修改
     */
     //分销商信息编辑保存
    // public function upd(){
    //     $id = I('get.id');
    //     //$data = I('post.');
    //     var_dump($data);exit;
    //     $model = M('dlyj');
    //     //$info = $model->find($post);
    //     //$user = $model->where("user_id = '$user_id' ")->setField('user_id','1');
    //     $data = $model->where(array('id'=>$id))->save($data);
    //     //echo $model->getlastsql();exit ;
    //     if($data) {
    //             $this->success('操作成功！', U('Distribut/set') , 20);
    //         }else{
    //             $this->error('哪里来的写入错误！');
    //         }
    // }
    public function upd(){
        $id=I('get.id');  //取出要修改的用户ID
        $a = 'id='.$id;   //where条件
        $data = M('dlyj')->where($a)->find();   //从数据库读取用户信息
        $this->assign('data',$data);
        return $this->fetch();
    }
    //分销佣金信息保存
    public function message(){
        $post = I('post.id');
        $data = I('post.');
        $model = M('dlyj');
        $data = $model->where(array('id'=>$post))->save($data);
        //echo $model->getlastsql();exit ;
        if($data) {
                $this->success('操作成功！', U('Distribut/set') , 20);
            }else{
                $this->error('写入错误！');
            }
    }
   
}