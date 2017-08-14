<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./template/pc/rainbow/user\order_detail.html";i:1499420874;s:38:"./template/pc/rainbow/user\header.html";i:1499420874;s:46:"./template/pc/rainbow/public\footer_index.html";i:1501146201;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的账户-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/myaccount.css" />
    <link rel="shortcut  icon" type="image/x-icon" href="__STATIC__/images/favicon.ico" media="screen"  />
    <script src="__STATIC__/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body class="bg-f5">
<script src="__PUBLIC__/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="__STATIC__/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="__PUBLIC__/static/js/layer/layer.js" type="text/javascript"></script>
<style>
	.list1 li{float:left;}
</style>
<div class="top-hander home-index-top p">
	<div class="w1224 pr">
		<div class="fl">
			<?php if(!(empty($user) || (($user instanceof \think\Collection || $user instanceof \think\Paginator ) && $user->isEmpty()))): ?>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/index'); ?>"><?php echo $user['nickname']; ?></a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/message_notice'); ?>">
					消息<?php if($user_message_count > 0): ?>（<span class="red"> <?php echo $user_message_count; ?> </span>）<?php endif; ?>
				</a>
			</div>
			<div class="fl ler">
				<a href="<?php echo U('Home/User/logout'); ?>">退出</a>
			</div>
			<?php else: ?>
			<div class="fl ler">
		        <a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
		        <span class="spacer"></span>
		        <a href="<?php echo U('Home/user/reg'); ?>">注册</a>
		    </div>
			<?php endif; ?>
			<div class="fl spc"></div>
			<div class="sendaddress pr fl">
				<!-- 收货地址，物流运费 -start-->
				<ul class="list1">
					<li class="jaj"><span>配&nbsp;&nbsp;送：</span></li>
					<li class="summary-stock though-line" style="margin-top:2px">
						<div class="dd" style="border-right:0px;">
							<div class="store-selector add_cj_p">
								<div class="text" style="width: 150px;background: inherit;top: 2px;border-left: 0"><div></div><b style="top: 2px"></b></div>
								<div onclick="$(this).parent().removeClass('hover')" class="close"></div>
							</div>
						</div>
					</li>
				</ul>
				<!--<i class="jt-x"></i>-->
				<!-- 收货地址，物流运费 -end-->
				<!--<span>深圳<i class="jt-x"></i></span>-->
			</div>
		</div>
		<div class="top-ri-header fr">
			<ul>
				<li><a href="<?php echo U('/Home/User/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('/Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li><a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">客户服务</a></li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="jt-x"></i>
						<div class="conta-hv-nav">
							<ul>
								<li>
									<a href="<?php echo U('/Home/Activity/group_list'); ?>">团购</a>
								</li>
								<li>
									<a href="<?php echo U('Home/Activity/flash_sale_list'); ?>">抢购</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo">
			<a href="/" class="logo"> <img src="__STATIC__/images/logo2.png"></a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="shopingcar-index fr">
			<div class="u-g-cart fr fixed" id="hd-my-cart">
				<a href="<?php echo U('Home/Cart/cart'); ?>">
					<p class="c-n fl">我的购物车</p>

					<p class="c-num fl">(<span class="count cart_quantity" id="cart_quantity">0</span>)
						<i class="i-c oh"></i>
					</p>
				</a>

				<div class="u-fn-cart u-mn-cart" id="show_minicart">
					<div class="minicartContent" id="minicart">
					</div>
					<!--有商品时-e-->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__STATIC__/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="__STATIC__/js/location.js"></script>
<!--------收货地址，物流运费--结束-------------->

<div class="home-index-middle">
    <div class="w1224">
        <div class="g-crumbs">
            <a href="<?php echo U('User/index'); ?>">我的商城</a><i class="litt-xyb"></i>
            <a href="<?php echo U('User/order_list'); ?>">订单中心</a><i class="litt-xyb"></i>
            <span><b>订单：<?php echo $order_info['order_sn']; ?></b></span>
        </div>
        <div class="home-main">
            <div class="com-topyue">
                <div class="wacheng fl">
                    <p class="ddn1"><span>订单号：</span><span><?php echo $order_info['order_sn']; ?></span></p>
                    <?php if($order_info['order_prom_type'] == 4): ?>
                        <p class="ddn1"><span>订单类型：</span><span>预售订单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                        <?php if($order_info['pre_sell_is_finished'] == 2): ?>
                            <p class="ddn1"><span>关闭原因：</span><span>商家取消活动，返换订金</span></p>
                            <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">订单关闭</h3>
                        <?php endif; if($order_info['pre_sell_is_finished'] == 1): if(time() > $order_info['pre_sell_retainage_end']): ?>
                                <p class="ddn1"><span>关闭原因：</span><span>已过支付尾款时间</span></p>
                                <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">订单关闭</h3>
                            <?php endif; endif; endif; if($order_info['pay_btn'] == 1): ?>
                        <h3 style="font: 700 24px/34px 'Microsoft YaHei';color: #e4393c; padding-top:20px;">等待付款</h3>
                        <a class="ddn3" style="margin-top:20px;" href="<?php echo U('Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>">立即付款</a>
                        <?php else: ?>
                        <h1 class="ddn2"><?php echo $order_info['order_status_desc']; ?></h1>
                        <!--<a class="ddn3" href="">评价</a>-->
                    <?php endif; if($order_info['receive_btn'] == 1): ?>
                        <a class="ddn3" style="margin-top:20px;" href="javascript:;" onclick="order_confirm(<?php echo $order_info['order_id']; ?>)">确认收货</a>
                    <?php endif; if($order_info['cancel_btn'] == 1): ?>
                        <a class="ddn3" style="margin-top:10px;color:#666;" href="javascript:;" onclick="cancel_order(<?php echo $order_info['order_id']; ?>)">取消订单</a>
                    <?php endif; if($order_info['order_prom_type'] == 4 AND $order_info['pay_status'] == 2 AND $order_info['pre_sell_is_finished'] == 1 AND (time() >= $order_info['pre_sell_retainage_start'] AND time() <= $order_info['pre_sell_retainage_end'])): ?>
                        <a class="ddn3" style="margin-top:20px;" href="<?php echo U('/Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>'">支付尾款</a>
                    <?php endif; ?>

                    <p class="ddn4"><a href="<?php echo U('order_detail',array('id'=>$order_info[order_id],'act'=>'print')); ?>" target="_blank"><i class="y-comp6"></i>打印订单</a></p>
                </div>
                <div class="wacheng2 fr">
                    <p class="dd2n">感谢您在商城购物，欢迎您对本次交易及所购商品进行评价。</p>
                    <div class="liuchaar p">
                        <ul>
                            <li>
                                <div class="aloinfe">
                                    <i class="y-comp"></i>
                                    <div class="ddfon">
                                        <p>提交订单</p>
                                        <p><?php echo date('Y-m-d',$order_info['add_time']); ?></p>
                                        <p><?php echo date('H:i:s',$order_info['add_time']); ?></p>
                                    </div>
                                </div>
                            </li>
                            <li><i class='y-comp91 <?php if($order_info[pay_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime1">
                                    <i class='y-comp2 <?php if($order_info[pay_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>付款成功</p>
                                        <?php if($order_info[pay_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['pay_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <li><i class='y-comp91 <?php if($order_info[shipping_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime2">
                                    <i class='y-comp3 <?php if($order_info[shipping_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>卖家发货</p>
                                        <?php if($order_info[shipping_time] > 0): ?>
                                            <p><?php echo date('Y-m-d',$order_info['pay_time']); ?></p>
                                            <p><?php echo date('H:i:s',$order_info['pay_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <li><i class='y-comp91 <?php if($order_info[shipping_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime3">
                                    <i class='y-comp4 <?php if($order_info[shipping_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>等待收货</p>
                                        <?php if($order_info[shipping_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['shipping_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                            <li><i class='y-comp91 <?php if($order_info[confirm_time] == 0): ?>top322<?php endif; ?>'></i></li>
                            <li>
                                <div class="aloinfe fime4">
                                    <i class='y-comp5 <?php if($order_info[confirm_time] == 0): ?>lef64<?php endif; ?>'></i>
                                    <div class="ddfon">
                                        <p>完成</p>
                                        <?php if($order_info[confirm_time] > 0): ?>
                                            <p><?php echo date('Y-m-d H:i:s',$order_info['confirm_time']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="grouupanjf">
                        <?php if($order_info['pay_status'] == 0): ?>
                            <a href="javascript:;">完成订单可能获得:<i class="y-comp7"></i>积分&nbsp;&nbsp;<i class="y-comp8"></i>会员成长值&nbsp;&nbsp;<i class="y-comp7"></i>优惠券</a>
                            <?php else: ?>
                            <!--<a href="javascript:;">-->
                                <!--<i class="y-comp7"></i>积分<span class="red"><?php echo $order_info['integral']; ?></span>-->
                            <!--</a>-->
                            <!--<a href="javascript:;">-->
                                <!--<i class="y-comp8"></i>会员成长值<span class="red">+<?php echo intval($order_info['order_amount']); ?></span>-->
                            <!--</a>-->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($order_info['shipping_status'] == 1): ?>
            <div class="home-main reseting ma-to-20">
                <div class="com-topyue">
                    <div class="wacheng fl">
                        <div class="shioeboixe">
                            <div class="sohstyle p">
                                <div class="odjpyes">
                                    <img src="__STATIC__/images/kuaidi-1.jpg"/>
                                </div>
                                <div class="osnhptek">
                                    <p><span>送货方式：</span><span><?php echo $order_info['shipping_name']; ?></span></p>
                                    <p><span>快递单号：</span><span><?php echo $order_info['invoice_no']; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wacheng2 fr">
                        <div class="listchatu">
                            <ul id="express_info">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                queryExpress();
                function queryExpress()
                {
                    var shipping_code = "<?php echo $order_info['shipping_code']; ?>";
                    var invoice_no = "<?php echo $order_info['invoice_no']; ?>";
                    $.ajax({
                        type : "GET",
                        dataType: "json",
                        url:"/index.php?m=Home&c=Api&a=queryExpress&shipping_code="+shipping_code+"&invoice_no="+invoice_no,//+tab,
                        success: function(data){
                            var html = '';
                            if(data.status == 200){
                                $.each(data.data, function(i,n){
                                    if(i == 0){
                                        html += "<li class='first'><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }else{
                                        html += "<li><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }
                                });
                            }else{
                                html += "<li class='first'><i class='node-icon'></i><span class='txt'>"+data.message+"</span></li>";
                            }
                            $("#express_info").html(html);
                        }
                    });
                }
            </script>
        <?php endif; ?>
        <div class="home-main ma-to-20">
            <div class="rshrinfmas">
                <div class="spff">
                    <h2>收货人信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">收货人：</span><span class="lascl"><?php echo $order_info['consignee']; ?></span></p>
                        <p><span class="fircl">地址：</span>
                            <span class="lascl"><?php echo $region_list[$order_info['province']]; ?>,<?php echo $region_list[$order_info['city']]; ?>,<?php echo $region_list[$order_info['district']]; ?>,<?php echo $order_info['address']; ?></span>
                        </p>
                        <p><span class="fircl">手机号码：</span><span class="lascl"><?php echo $order_info['mobile']; ?></span></p>
                    </div>
                </div>
                <div class="spff">
                    <h2>配送信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">配送方式：</span><span class="lascl"><?php echo $order_info['shipping_name']; ?></span></p>
                        <p><span class="fircl">运费：</span><span class="lascl"><em>￥</em><?php echo (isset($order_info['shipping_price']) && ($order_info['shipping_price'] !== '')?$order_info['shipping_price']:0); ?></span></p>
                        <p><span class="fircl">买家留言：</span><span class="lascl"><?php echo (isset($order_info['user_note']) && ($order_info['user_note'] !== '')?$order_info['user_note']:''); ?></span></p>
                    </div>
                </div>
                <div class="spff">
                    <h2>付款信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">付款方式：</span><span class="lascl"><?php echo $order_info['pay_name']; ?></span></p>
                        <p><span class="fircl">付款时间：</span><span class="lascl"><?php if($order_info[pay_status] == 1 or $order_info[pay_status] == 2): ?><?php echo date('Y-m-d H:i:s',$order_info['pay_time']); else: ?>未支付<?php endif; ?></span></p>
                        <?php if($order_info['order_prom_type'] != 4): ?>
                            <p><span class="fircl">商品总额：</span><span class="lascl"><em>￥</em><?php echo $order_info['goods_price']; ?></span></p>
                            <p><span class="fircl">运费金额：</span><span class="lascl"><em>￥</em><?php echo $order_info['shipping_price']; ?></span></p>
                            <p><span class="fircl">优惠券：</span><span class="lascl"><em>￥</em><?php echo $order_info['coupon_price']; ?></span></p>
                            <p><span class="fircl">积分抵扣：</span><span class="lascl"><em>￥</em><?php echo $order_info['integral_money']; ?></span></p>
                            <p><span class="fircl">订单优惠：</span><span class="lascl"><em>￥</em><?php echo $order_info['order_prom_amount']; ?></span></p>
                        <?php endif; ?>
                        <p><span class="fircl">余额支付：</span><span class="lascl"><em>￥</em><?php echo $order_info['user_money']; ?></span></p>
                        <!-- 预售商品 start -->
                        <?php if($order_info['order_prom_type'] == 4 AND $order_info['paid_money'] > 0): if($order_info['pay_status'] == 1): ?>
                                <p><span class="fircl">已付尾款：</span><span class="lascl"><em>￥</em><?php echo $order_info['order_amount']; ?></span></p>
                            <?php endif; ?>
                            <tr>
                                <p><span class="fircl">已付订金：</span><span class="lascl"><em>￥</em><?php echo $order_info['paid_money']; ?></span></p>
                            </tr>
                            <tr>
                                <p><span class="fircl">发货时间：</span><span class="lascl"><em></em><?php echo $order_info['pre_sell_deliver_goods']; ?></span></p>
                            </tr>
                        <?php endif; ?>
                        <!-- 预售商品 end -->
                    </div>
                </div>
                <div class="spff mar0">
                    <h2>发票信息</h2>
                    <div class="psbaowq">
                        <p><span class="fircl">发票类型：</span><span class="lascl">普通发票</span></p>
                        <p><span class="fircl">发票抬头：</span><span class="lascl"><?php echo $order_info['invoice_title']; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="beenovercom">
            <div class="shoptist">
                <span><?php echo $tpshop_config['shop_info_store_name']; ?><a href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&Site=TPshop商城&Menu=yes" target="_blank"><i class="y-comp9"></i></a></span>
            </div>
            <div class="orderbook-list">
                <div class="book-tit">
                    <ul>
                        <li class="sx1">商品</li>
                        <li class="sx2">商品编号</li>
                        <li class="sx3">购买单价</li>
                        <li class="sx4">赠送积分</li>
                        <li class="sx5">商品数量</li>
                        <li class="sx6">操作</li>
                    </ul>
                </div>
            </div>
            <div class="order-alone-li">
                <?php if(is_array($order_info['goods_list']) || $order_info['goods_list'] instanceof \think\Collection || $order_info['goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order_info['goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
                    <table width="100%" border="" cellspacing="" cellpadding="">
                        <tr class="conten_or">
                            <td class="sx1">
                                <div class="shop-if-dif">
                                    <div class="shop-difimg">
                                        <a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><img src="<?php echo goods_thum_images($goods['goods_id'],78,78); ?>"></a>
                                    </div>
                                    <div class="cebigeze">
                                        <div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><?php echo $goods['goods_name']; ?></a></div>
                                        <p class="mayxl"><?php echo $goods['spec_key_name']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="sx2"><?php echo $goods['goods_sn']; ?></td>
                            <td class="sx3"><span>￥</span><span><?php echo $goods['member_goods_price']; ?></span></td>
                            <td class="sx4">
                                <span><?php echo $goods['give_integral']; ?></span>
                            </td>
                            <td class="sx5">
                                <span><?php echo $goods['goods_num']; ?></span>
                            </td>
                            <td class="sx6">
                                <div class="twrbac">
                                    <?php if(($order_info['comment_btn'] == 1) and ($goods['is_comment'] == 0)): ?>
                                        <a href="<?php echo U('Home/User/comment_list',array('order_id'=>$order_info['order_id'],'goods_id'=>$goods['goods_id'])); ?>">评价</a>
                                        <span>|</span>
                                    <?php endif; if(($order_info[return_btn] == 1) and ($goods[is_send] < 2)): ?>
                                        <a href="<?php echo U('Home/User/return_goods',array('order_id'=>$order_info['order_id'],'order_sn'=>$order_info['order_sn'],'goods_id'=>$goods['goods_id'],'spec_key'=>$goods['spec_key'])); ?>">申请售后</a>
                                    <?php endif; ?>

                                    <p>
                                        <a class="songobuy" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">再次购买</a>
                                    </p>
                                    <?php if($goods[is_send] == 0): ?><a>未发货</a><?php endif; if($goods[is_send] == 1): ?><a>已发货</a><?php endif; if($goods[is_send] > 1): ?><a>已申请售后</a><?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="numzjsehe">
            <p><span class="sp_tutt">商品总额：</span><span class="smprice"><em>￥</em><?php echo $order_info['goods_price']; ?></span></p>
            <p><span class="sp_tutt">返&nbsp;&nbsp;&nbsp;&nbsp;现：</span><span class="smprice"><em>￥</em>0.00</span></p>
            <p><span class="sp_tutt">运&nbsp;&nbsp;&nbsp;&nbsp;费：</span><span class="smprice"><em>￥</em><?php echo $order_info['shipping_price']; ?></span></p>
            <p><span class="sp_tutt">价格调整：</span><span class="smprice"><em>￥</em>
                <?php if($order_info['discount'] > 0): ?>
                    -<?php echo abs($order_info['discount']); else: ?>
                    <?php echo abs($order_info['discount']); endif; ?>
                </span></p>
            <p><span class="sp_tutt">应付总额：</span><span class="smprice red"><em>￥</em><?php echo $order_info['order_amount']; ?></span></p>
        </div>
    </div>
</div>
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
    //取消订单
    function cancel_order(id){
        layer.confirm("确定取消订单?",{
            btn:['确定','取消']
        },function(){
            location.href = "/index.php?m=Home&c=User&a=cancel_order&id="+id;
        }, function(tmp){
            layer.close(tmp);
        })
    }
    //确定收货
    function order_confirm(order_id){
        layer.confirm("你确定收到货了吗?",{
            btn:['确定','取消']
        },function(){
            location.href='/index.php?m=Home&c=User&a=order_confirm&id='+order_id;
        })
    }
</script>
</body>
</html>