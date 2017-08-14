<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:35:"./template/pc/rainbow/user\reg.html";i:1502504805;s:46:"./template/pc/rainbow/public\footer_index.html";i:1501146201;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>注册-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
   
    <link href="__STATIC__/css/reg3.css" rel="stylesheet" />
 
    <script type="text/javascript" src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/tpshop.css" />
	<script src="__PUBLIC__/js/layer/layer.js"></script><!--弹窗js 参考文档 http://layer.layui.com/-->    
    <script src="__PUBLIC__/js/global.js"></script>
</head>
<body>
    <div class="regcon">
        <a class="m-fnlogoa fn-fl" href=""><img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>"/></a><span class="m-fntit">欢迎注册</span>
        <div class="ui_tab">
            <ul class="ui_tab_nav regnav">
                <li class="uli <?php if(I('get.t') == ''): ?>active<?php endif; ?> "><a href="<?php echo U('Home/User/reg'); ?>" >用户注册</a></li>
                <!-- <li class="uli <?php if(I('get.t') == 'email'): ?>active<?php endif; ?> "><a href="<?php echo U('Home/User/reg',array('t'=>'email')); ?>">邮箱注册</a></li> -->
                <li class="no fn-fr loginbtn">我已注册，马上<a href="<?php echo U('Home/User/login'); ?>">登录></a></li>
            </ul>
            
<?php if(\think\Request::instance()->param('t') == ''): ?>
		<form id="reg_form2"  method="post" action="Home/User/reg">  <!--加路径-->
			<input type="hidden" name="scene" value="1">    
            <div class="ui_tab_content">
                <div class="m-fnbox ui_panel" style="display: block;">
                    <div class="fnlogin clearfix">
                    
                        <div class="line">
                            <label class="linel"><span class="dt">手机号码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp fmobile J_cellphone" placeholder="请输入手机号码"  name="username" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" id="username" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><span class="dt">图像验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="图像验证码"  name="verify_code" required=""/>
                                <img width="100" height="35" src="/index.php/Home/User/verify/type/user_reg.html" id="reflsh_code2" class="po-ab to0">
                                    <a><img onclick="verify('reflsh_code2')" src="__STATIC__/images/chg_image.png" class="ma-le-210"></a>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                   <?php if($tpshop_config['sms_regis_sms_enable'] == 1): ?>
                        <div class="line">
                            <label class="linel"><span class="dt">手机验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="手机验证码" id="code" name="code" required=""/>                                
                                <button class="fn-fl icode" onclick="send_sms_reg_code()" type="button" id="count_down">发送</button>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                   <?php endif; ?>
                        <div class="line">
                            <label class="linel"><span class="dt">设置密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fpass J_password" placeholder="6-16位大小写英文字母、数字或符号的组合" autocomplete="off" maxlength="16"  id="password" name="password" value="" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><span class="dt">确认密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fsecpass J_password2" placeholder="请再次输入密码" autocomplete="off" maxlength="16" id="password2" name="password2" required="" value="" about="" />
                            </div>
                        </div>

                        <div class="line">
                            <label class="linel"><span class="dt">邀请码：</span></label>
                            <div class="liner">
                                <!--<input type="text" class="inp fmobile J_cellphone" placeholder="请输您的邀请码"  name="topyqm"  id="topyqm" required=""  />-->
                                <input type="text" class="inp fmobile J_cellphone" placeholder="请输您的邀请码" name="topyqm"  id="topyqm" required="" value="" onblur="yqmyz(this)" size="30" >
                                <span id="chk"></span>
                            </div>
                        </div>

                        <div class="line liney clearfix">
                            <label class="linel">&nbsp;</label>
                            <div class="liner">
                                <div class="clearfix checkcon">
                                    <p class="fn-fl checktxt"><input type="checkbox" class="iyes fn-fl J_protocal" checked />
                                    <span class="fn-fl">我已阅读并同意</span><a class="itxt fn-fl" href="<?php echo U('Home/Article/detail',['article_id'=>1415]); ?>" target="_blank">《TPshop网服务协议》</a>
                                    </p>
                                      <p class="fn-fl errorbox v-txt" id="protocalBox"></p>
                                </div>
                                <a class="regbtn J_btn_agree" href="javascript:void(0);" onClick="check_submit();">同意协议并注册</a>
                                <p class="v-txt" id="err_check_code">
                                    <span class="fnred">请勾选</span>我已阅读并同意<a class="itxt" href="<?php echo U('Home/Article/detail',['article_id'=>1415]); ?>" target="_blank">《TPshop网服务协议》</a>
                                </p>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
            <!--<input type="submit" name="" id="" value="提交">-->
            </form>
<?php endif; if(\think\Request::instance()->param('t') == 'email'): ?>
		<form id="reg_form2"  method="post" action="">
            <div class="ui_tab_content">
                <div class="m-fnbox ui_panel" style="display: block;">
                    <div class="fnlogin clearfix">
                    
                        <div class="line">
                            <label class="linel"><span class="dt">邮箱：</span></label>
                            <div class="liner">
                                <input type="text" class="inp J_cellphone" placeholder="请输入邮箱"  name="username" id="username" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><span class="dt">图像验证码：</span></label>
                            <div class="liner">
                                <input type="text" class="inp imgcode J_imgcode" placeholder="图像验证码" id="verify_code2" name="verify_code" required=""/>
                                <img width="100" height="35" src="/index.php/Home/User/verify/type/user_reg.html" id="reflsh_code2" class="po-ab to0">
                                <a><img onclick="verify('reflsh_code2')" src="__STATIC__/images/chg_image.png" class="ma-le-210"></a>
                            </div>
                            <div id="show-voice" class="show-voice"></div>
                        </div>
                        <?php if($regis_smtp_enable == 1): ?>
                            <div class="line">
                                <label class="linel"><span class="dt">邮箱验证码：</span></label>
                                <div class="liner">
                                    <input type="text" class="inp imgcode J_imgcode" placeholder="邮箱验证码" id="code" name="code" required=""/>
                                    <button class="fn-fl icode" onclick="send_smtp_reg_code()" type="button" id="count_down">发送</button>
                                </div>
                                <div id="show-voice" class="show-voice"></div>
                            </div>
                        <?php endif; ?>
                        <div class="line">
                            <label class="linel"><span class="dt">设置密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fpass J_password" placeholder="6-16位大小写英文字母、数字或符号的组合" autocomplete="off" maxlength="16"  id="password" name="password" value="" required=""/>
                            </div>
                        </div>
                        <div class="line">
                            <label class="linel"><span class="dt">确认密码：</span></label>
                            <div class="liner">
                                <input type="password" class="inp fsecpass J_password2" placeholder="请再次输入密码" autocomplete="off" maxlength="16" id="password2" name="password2" required="" value=""/>
                            </div>
                        </div>
                        <div class="line liney clearfix">
                            <label class="linel">&nbsp;</label>
                            <div class="liner">
                                <div class="clearfix checkcon">
                                    <p class="fn-fl checktxt"><input type="checkbox" class="iyes fn-fl J_protocal" checked />
                                    <span class="fn-fl">我已阅读并同意</span><a class="itxt fn-fl" href="<?php echo U('Home/Article/detail',['article_id'=>1415]); ?>" target="_blank">《TPshop网服务协议》</a>
                                    </p>
                                      <p class="fn-fl errorbox v-txt" id="protocalBox"></p>
                                </div>
                                <a class="regbtn J_btn_agree" href="javascript:void(0);" onClick="check_submit();">同意协议并注册</a>
                                <p class="v-txt"><span class="fnred">请勾选</span>我已阅读并同意<a class="itxt" href="<?php echo U('Home/Article/detail',['article_id'=>1415]); ?>" target="_blank">《TPshop网服务协议》</a></p>
                        </div>
                    </div>
                    </div>
                    </div>
            </div>
            </form>
<?php endif; ?>
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

    $(document).ready(function(){
		 $('input').click(function(){
		      $(this).siblings('p').hide();
		 });
	  	
	});
 
	// 普通 图形验证码 
    function verify(id){
        $('#'+id).attr('src','/index.php?m=Home&c=User&a=verify&type=user_reg&r='+Math.random());
    }
    function check_submit(){
        $.ajax({
            type : "POST",
            url:"<?php echo U('Home/User/reg'); ?>",
            dataType: "json",
            data: $('#reg_form2').serialize(),
            success: function(data){
                if(data.status == 1){
                    layer.msg(data.msg, {icon: 1},function(){
                        window.location.href = "<?php echo U('Home/Index/index'); ?>";
                    });
                }else{
                    layer.alert(data.msg, {icon: 2},function(index){
                        $('.verifyImg').trigger('click');
                        layer.close(index);
                    });
                }
            }
        });

    }



    function yqmyz(){
     /*   $.ajax({
            type : "GET",
            url:"<?php echo U('Home/User/yqmyz'); ?>",
            dataType: "json",
            data: $('#topyqm').serialize(),
            success: function(datas){
                if(data.status == 1){
                    layer.msg(data.msg, {icon: 1},function(){
                        window.location.href = "<?php echo U('Home/Index/index'); ?>";
                    });
                }else{
                    layer.alert(data.msg, {icon: 2},function(index){
                        $('.verifyImg').trigger('click');
                        layer.close(index);
                    });
                }
            }
        });*/
            //alert(123);
    }




    // 电子邮件注册  和 手机号码注册 切换
    function reg_tab(id,id2){
        $('#'+id).addClass('ema-tab');
        $('#'+id2).removeClass('ema-tab');
        $('#'+id+'_div').show();
        $('#'+id2+'_div').hide();
    }
	// 发送手机短信
    function send_sms_reg_code(){
        var mobile = $('input[name="username"]').val();
        var verify_code = $('input[name="verify_code"]').val();
        if(!checkMobile(mobile)){
            layer.alert('请输入正确的手机号码', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        if(verify_code == ''){
            layer.alert('请输入图像验证码', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        var url = "/index.php?m=Home&c=Api&a=send_validate_code&scene=1&type=mobile&mobile="+mobile+"&verify_code="+verify_code;
        $.ajax({
            url:url,
            dataType: "json",
            success: function(res){
            	if(res.status == 1)
    			{
    				$('#count_down').attr("disabled","disabled");
    				intAs = 5; // 手机短信超时时间
                    jsInnerTimeout('count_down',intAs);
                    layer.alert(res.msg, {icon: 1});
    			}else{
                    layer.alert(res.msg, {icon: 2});
                    verify('reflsh_code2')
                }
            }
        });
    }

    // 发送邮箱
    function send_smtp_reg_code(){
        var email = $('input[name="username"]').val();
        var verify_code = $('input[name="verify_code"]').val();
        if(!checkEmail(email)){
            layer.alert('请输入正确的邮箱', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        if(verify_code == ''){
            layer.alert('请输入图像验证码', {icon: 2});//alert('请输入正确的手机号码');
            return;
        }
        $.ajax({
            type : "POST",
            url:"<?php echo U('Home/Api/send_validate_code'); ?>",
            data : {type:'email',send:email,scene:1,verify_code:verify_code},// 你的formid
            dataType: "json",
            success: function(data){
                if(data.status == 1){
                    $('#count_down').attr("disabled","disabled");
                    intAs = 10; // 发送邮箱超时时间
                    jsInnerTimeout('count_down',intAs);
                    layer.alert(data.msg, {icon: 1});
                }else{
                    layer.alert(data.msg, {icon: 2});
                    verify('reflsh_code2')
                }
            }
        });
    }

    $('#count_down').removeAttr("disabled");
    //倒计时函数
    function jsInnerTimeout(id,intAs)
    {
        var codeObj=$("#"+id);
        //var intAs = parseInt(codeObj.attr("IntervalTime"));

        intAs--;
        if(intAs<=-1)
        {
            codeObj.removeAttr("disabled");
//            codeObj.attr("IntervalTime",60);
            codeObj.text("发送");
            return true;
        }

        codeObj.text(intAs+'秒');
//        codeObj.attr("IntervalTime",intAs);

        setTimeout("jsInnerTimeout('"+id+"',"+intAs+")",1000);
    };
    
    
    function checkMobile(tel) {
        var reg = /(^1[3|4|5|7|8][0-9]{9}$)/;
        if (reg.test(tel)) {
            return true;
        }else{
            return false;
        };
    }
    
    function checkEmail(str){
        var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
        if(reg.test(str)){
            return true;
        }else{
            return false;
        }
    }


</script>
</body> 
</html>
