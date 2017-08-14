<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"./template/pc/rainbow/cart\cart4.html";i:1499420874;s:45:"./template/pc/rainbow/public\sign-header.html";i:1499420874;s:46:"./template/pc/rainbow/public\footer_index.html";i:1501146201;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单支付-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>"/>
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>"/>
    <link rel="stylesheet" href="__STATIC__/css/pay.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link href="__STATIC__/css/common.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="__STATIC__/css/jh.css">
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="__PUBLIC__/js/global.js"></script>
    <script src="__PUBLIC__/js/pc_common.js"></script>
    <script src="__PUBLIC__/js/layer/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
</head>
<body>
<div class="m-top-bar editable" moduleid="1539923" style="position:relative;min-height:25px;">
  <div class="container">
    <ul class="fl">
        <!--<?php if($user[user_id] > 0): ?>-->
            <!--<li class="fl J_login_status"><a href="<?php echo U('Home/user/index'); ?>" alt="" title="" target="_self"><?php echo $user['nickname']; ?></a>-->
                <!--<a  href="<?php echo U('Home/user/logout'); ?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>-->
            <!--</li>-->
            <!--<?php else: ?>-->
            <!--<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login'); ?>">-->
                <!--<span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>-->
        <!--<?php endif; ?>-->
        <div class="ls-dlzc fl nologin">
            <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
            <a class="red" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>
        </div>
        <div class="ls-dlzc fl islogin">
            <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
            <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
        </div>
        <script>
            $(function (){
                    var uname = getCookie('uname');
                    if (uname == '') {
                        $('.islogin').remove();
                        $('.nologin').show();
                    } else {
                        $('.nologin').remove();
                        $('.islogin').show();
                        $('.userinfo').html(decodeURIComponent(uname).substring(0,5));
                    }
            })

        </script>
      <li class="fl sep"></li>
      <!--<li class="fl select-city dropdown">
        <span class="menu-item">
        <span>送货至：</span>
        <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
      </li>-->
    </ul>
    <ul class="fr bar-right">
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="<?php echo U('/Home/User/index'); ?>">
        <span>我的商城</span><i class="dd"></i></a>
        <ul class="sub-panel">
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/order_list'); ?>">我的订单</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/account'); ?>">我的积分</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/coupon'); ?>">我的优惠券</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/goods_collect'); ?>">我的收藏夹</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/comment'); ?>">我的评论</a></li>
        </ul>
      </li> 
      <li class="fl sep"></li>
      <li class="fl dropdown mobile-feiniu"><a class="menu-item" href=""><i class="fl ico"></i>
        <span class="fl">手机TPshop网</span>
        <i class="dd"></i></a>
        <div class="sub-panel m-lst">
          <p>扫一扫，下载TPshop客户端</p>
          <dl>
            <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="__STATIC__/images/qrcode_vmall_app01.png"></a></dt>
            <dd class="fl mb10"><a target="_blank" href=""><i class="andr"></i> Andiord</a></dd>
            <dd class="fl"><a target="_blank" href=""><i class="iph"></i> iPhone</a></dd>
          </dl>
        </div>
      </li>
      <li class="fl sep"></li>
      <li class="fl">
          <a class="menu-item" href="<?php echo U('Home/Article/detail'); ?>" target="_blank">
        <span>帮助中心</span>
        </a>
      </li>
      <li class="fl sep"></li>
      <li class="fl about-us"><a class="txt fl" style="line-height:unset;" href="">关注我们：</a></li>
      <li class="fl dropdown weixin"><a href="" class="fl ico"></a>
        <div class="sub-panel wx-box">
          <span class="arrow-b">◆</span>
          <span class="arrow-a">◆</span>
          <p class="n"> 扫描二维码 <br>	关注TPshop网官方微信 </p>
          <img src="__STATIC__/images/qrcode_vmall_app01.png"></div>
      </li>
    </ul>
  </div>
</div>
<div class="fn-cart-pay">
    <!-- cart-title -->
    <div class="wrapper1190">
        <div class="order-header">
            <div class="layout after">
                <div class="fl">
                    <div class="logo pa-to-36 wi345">
                        <a href="/"><img src="__PUBLIC__/images/newLogo.png" alt=""></a>
                    </div>
                </div>
                <div class="fr">
                    <div class="pa-to-36 progress-area">
                        <div class="progress-area-wd" style="display:none">我的购物车</div>
                        <div class="progress-area-tx" style="display:none">填写核对订单信息</div>
                        <div class="progress-area-cg">成功提交订单</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cart-title -->

        <div class="layout after-ta order-ha">
            <div class="erhuh">
                <i class="icon-succ"></i>

                <h3>订单提交成功，请您尽快付款！</h3>

                <p class="succ-p">
                    <?php if($master_order_sn != ''): ?>
                        订单号：&nbsp;&nbsp;<?php echo $master_order_sn; ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                        付款金额（元）：&nbsp;&nbsp;<b><?php echo $sum_order_amount; ?></b>&nbsp;<b>元</b>
                        <?php else: ?>
                        订单号：&nbsp;&nbsp;<?php echo $order['order_sn']; ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
                        付款金额（元）：&nbsp;&nbsp;<b><?php echo $order['order_amount']; ?></b>&nbsp;<b>元</b>
                    <?php endif; ?>
                </p>
                <div class="succ-tip">
                    请您在&nbsp;&nbsp;<b><?php echo $pay_date; ?></b>&nbsp;完成支付，否则订单将自动取消
                </div>
            </div>
            <div class="ddxq-xiaq">
                <?php if($master_order_sn != ''): ?>
                    <a href="<?php echo U('Home/User/order_list'); ?>">订单详情<i></i></a>
                    <?php else: ?>
                    <a href="<?php echo U('Home/User/order_detail',array('id'=>$order['order_id'])); ?>">订单详情<i></i></a>
                <?php endif; ?>
            </div>
            <form action="<?php echo U('Home/Payment/getCode'); ?>" method="post" name="cart4_form" id="cart4_form">
                <div class="orde-sjyy">
                    <h3 class="titls">选择支付方式</h3>

                    <div class="bsjy-g">
                        <dl>
                            <dd>
                                <div class="order-payment-area">
                                    <div class="dsfzfpte">
                                        <b>选择支付方式</b>
                                    </div>
                                    <div class="po-re dsfzf-ee">
                                        <ul>
                                            <?php if(is_array($paymentList) || $paymentList instanceof \think\Collection || $paymentList instanceof \think\Paginator): if( count($paymentList)==0 ) : echo "" ;else: foreach($paymentList as $k=>$v): ?>
                                                <li>
                                                    <div class="payment-area">
                                                        <input type="radio" id="input-ALIPAY-1" value="pay_code=<?php echo $v['code']; ?>" class="radio vam" name="pay_radio">
                                                        <label for="">
                                                            <img src="/plugins/<?php echo $v['type']; ?>/<?php echo $v['code']; ?>/<?php echo $v['icon']; ?>" width="120" height="40" onClick="change_pay(this);"/>
                                                        </label>
                                                    </div>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                </div>

                                <!--第三方网银支付 start-->
                                <?php if(is_array($bankCodeList) || $bankCodeList instanceof \think\Collection || $bankCodeList instanceof \think\Paginator): if( count($bankCodeList)==0 ) : echo "" ;else: foreach($bankCodeList as $k=>$v): ?>
                                    <div class="order-payment-area">
                                        <div class="dsfzfpte">
                                            <b><?php echo $paymentList[$k]['name']; ?></b>
                                            <em>网银支付</em>
                                        </div>
                                        <div class="po-re dsfzf-ee">
                                            <ul>
                                                <?php if(is_array($v) || $v instanceof \think\Collection || $v instanceof \think\Paginator): if( count($v)==0 ) : echo "" ;else: foreach($v as $k2=>$v2): ?>
                                                    <li>
                                                        <div class="payment-area">
                                                            <input type="radio" name="pay_radio" class="radio vam" value="pay_code=<?php echo $k; ?>&bank_code=<?php echo $v2; ?>" id="input-ALIPAY-1">
                                                            <label for="">
                                                                <img src="__STATIC__/images/images-out/<?php echo $bank_img[$k2]; ?>" width="120" height="40" onClick="change_pay(this);"/>
                                                            </label>
                                                        </div>
                                                    </li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <!--第三方网银支付 end -->

                            </dd>
                        </dl>
                        <div class="order-payment-action-area">
                            <a class="button-style-5 button-confirm-payment" href="javascript:void(0);" onClick="$('#cart4_form').submit();">确认支付方式</a>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="master_order_sn" value="<?php echo $master_order_sn; ?>"/>
                <input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>"/>
            </form>
        </div>
    </div>
</div>


<!--微信扫一扫支付对话框  -->
<div id="wchatQrcodeDlg" class="g-cartpay-dlg" style="display: none;" data-show="">
    <div class="g-cartpay-content">
        <div class="g-h"><span class="u-close"></span></div>
        <div class="g-c">
            <div class="g-t"> 使用微信支付<span>￥<small class='wx_amount'>118</small></span></div>
            <div class="g-qrcode"><img alt="使用微信支付" src="images/loading.gif"/></div>
        </div>
        <div class="g-f fixed"><i class="icon_scan"></i>

            <div class="u-label">
                <p>请使用微信扫一扫<br>
                    扫描二维码完成支付</p>
            </div>
        </div>
    </div>
    <div class="u-mask"></div>
</div>
<!--微信扫一扫支付对话框 / -->
<div id="addCardNewBind"></div>
<!--footer-s-->
<div class="footer p">
    <div class="mod_service_inner">
        <div class="w1224">
            <ul>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_duo">多</h5>
                        <p>品类齐全，轻松购物</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_kuai">快</h5>
                        <p>多仓直发，极速配送</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_hao">好</h5>
                        <p>正品行货，精致服务</p>
                    </div>
                </li>
                <li>
                    <div class="mod_service_unit">
                        <h5 class="mod_service_sheng">省</h5>
                        <p>天天低价，畅选无忧</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<div class="w1224">
    <div class="footer-ewmcode">
        <div class="foot-list-fl">
            <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <ul>
                    <li class="foot-th">
                        <?php echo $v[cat_name]; ?>
                    </li>
                    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,86400);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                        <li>
                            <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </div>
        <div class="QRcode-fr">
            <ul>
                <li class="foot-th">客户端</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
            <ul>
                <li class="foot-th">微信</li>
                <li><img src="__STATIC__/images/qrcode.png"/></li>
            </ul>
        </div>
    </div>
    <div class="mod_copyright p">
        <div class="grid-top">
           <!--  <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,86400);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                <a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>
                <span>|</span>
            <?php endforeach; ?> -->
            <a href="javascript:void (0);">客服热线:<?php echo $tpshop_config['shop_info_phone']; ?></a>
        </div>
        <p>Copyright © 2016-2025 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:'TPshop商城'); ?> 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>

        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_6" href="" target="_blank">网络举报APP下载</a>
        </p>
    </div>
</div>
</div>
<!--footer-e-->
<script>
    $(document).ready(function () {
        $("input[name='pay_radio']").first().trigger('click');
    });
    // 切换支付方式
    function change_pay(obj) {
        $(obj).parent().siblings('input[name="pay_radio"]').trigger('click');
    }
</script>
</body>
</html>
