<?php if (!defined('THINK_PATH')) exit();?><!-- 页头 -->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $_page_keywords?>" />
	<meta name="description" content="<?php echo $_page_description?>" />
    <title><?php echo $_page_title;?></title>
    <link rel="stylesheet" href="/Public/Home/css/base.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/css/global.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/css/header.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/css/bottomnav.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/css/footer.css" type="text/css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/header.js"></script>
</head>
<body>
    <!-- 顶部导航 start -->
	<div class="topnav">
		<div class="topnav_bd w1210 bc">
			<div class="topnav_left">
				
			</div>
			<div class="topnav_right fr">
				<ul>
					<li id="user_info">
	
					</li>
					
					<li class="line">|</li>
					<li><a href="<?php echo U('My/order')?>">我的订单</a></li>
					<li class="line">|</li>
					<li>客户服务</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- 顶部导航 end -->

    <!-- bannerBar  B-->
    <div class="bannerBar">
        <div class="banner w pr" align="center">
            <a href="#">
                <img id="banner" src="/Public/Home/images/banner.jpg" alt=""/>
            </a>
            <span class="close"></span>
        </div>
    </div>
    <!-- bannerBar  E-->


<script type="text/javascript" id="1" src="/Public/Home/js/home.js"></script>
	<link rel="stylesheet" href="/Public/Home/css/order.css" type="text/css">
	<link rel="stylesheet" href="/Public/Home/css/home.css" type="text/css">
	<!-- 页面主体 start -->
	    <!-- searchBar  B-->
    <div style="clear:both;"></div>

	<!-- 头部 start -->
	<div class="header w1210 bc mt15">
		<!-- 头部上半部分 start 包括 logo、搜索、用户中心和购物车结算 -->
		<div class="logo w1210">
			<h1 class="fl"><a href="/"><img id="logo" src="/Public/Home/images/logo.png" alt="京西商城"></a></h1>
			<!-- 头部搜索 start -->
			<div class="search fl">
				 <div class="search_form">
					<div class="form_left fl"></div>
					<form action="" name="serarch" method="get" class="fl">
						<input type="text" class="txt" value="<?php echo I('get.key','请输入商品关键字')?>" id="key"/>
						<input onclick="location.href='<?php echo U('Search/key_search','',false)?>/key/'+$('#key').val()" type="button" class="btn" value="搜索" />
					</form>
					<div class="form_right fl"></div>
				</div>
				<div style="clear:both;"></div>

				<div class="hot_search">
					<strong>热门搜索:</strong>
					<a href="">D-Link无线路由</a>
					<a href="">休闲男鞋</a>
					<a href="">TCL空调</a>
					<a href="">耐克篮球鞋</a>
				</div>
			</div>
			<!-- 头部搜索 end -->

			<!-- 用户中心 start-->
			<div class="user fl">
				<dl>
					<dt>
						<em></em>
						<a href="">用户中心</a>
						<b></b>
					</dt>
					<dd>
						<div class="prompt">
							您好，请<a href="">登录</a>
						</div>
						<div class="uclist mt10">
							<ul class="list1 fl">
								<li><a href="">用户信息></a></li>
								<li><a href="">我的订单></a></li>
								<li><a href="">收货地址></a></li>
								<li><a href="">我的收藏></a></li>
							</ul>

							<ul class="fl">
								<li><a href="">我的留言></a></li>
								<li><a href="">我的红包></a></li>
								<li><a href="">我的评论></a></li>
								<li><a href="">资金管理></a></li>
							</ul>

						</div>
						<div style="clear:both;"></div>
						<div class="viewlist mt10">
							<h3>最近浏览的商品：</h3>
							<ul>
								<li><a href=""><img id="1" src="/Public/Home/images/view_list1.jpg" alt="" /></a></li>
								<li><a href=""><img id="1" src="/Public/Home/images/view_list2.jpg" alt="" /></a></li>
								<li><a href=""><img id="1" src="/Public/Home/images/view_list3.jpg" alt="" /></a></li>
							</ul>
						</div>
					</dd>
				</dl>
			</div>
			<!-- 用户中心 end-->

			<!-- 购物车 start -->
			<div class="cart fl" id="cart">
				<dl>
					<dt>

						<a href="<?php echo U('Cart/lst')?>">去购物车结算</a>
						<i class="ci-count" id="shopping-amount"><span id="cart_count">0<span></i>
						<b></b>
					</dt>
					<dd>
						<div class="prompt" id="cart_div">
							购物车中还没有商品，赶紧选购吧！
						</div>
					</dd>
				</dl>
			</div>
			<!-- 购物车 end -->
		</div>
		<!-- 头部上半部分 end -->
		
		<div style="clear:both;"></div>
    <!-- searchBar  E-->
    <!-- nav   B-->
    <div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl <?php if($_show_nav == 0){echo 'cat1';}?>"> <!-- 非首页，需要添加cat1类 -->
				<div class="cat_hd <?php if($_show_nav == 0){echo 'off';}?>">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>
				
				<div class="cat_bd <?php if($_show_nav == 0){echo 'none';}?>">
					<?php foreach($catData as $k=>$v){?>
					<?php if($k < 13){?>
					<div class= "cat <?php if($k == 0){echo ' item1';}?>">
						<h3><a href="<?php echo U('Search/cat_search?id='.$v['cat_id'],'',false)?>"><?php echo $v['cat_name']?></a> <b></b></h3>
						<div class="cat_detail">
							<?php foreach($v['children'] as $k1=>$v1){?>
							<dl <?php if($k1 == 0 ){echo 'class="dl_1st"';}?>>
								<dt><a href="<?php echo U('Search/cat_search?id='.$v1['cat_id'],'',false)?>"><?php echo $v1['cat_name']?></a></dt>
								<dd>
								<?php foreach($v1['children'] as $k2=>$v2){?>									
									<a href="<?php echo U('Search/cat_search?id='.$v2['cat_id'],'',false)?>"><?php echo $v2['cat_name']?></a>	
								<?php }?>				
								</dd>
							</dl>
							<?php }?>
						</div>
					</div>
					<?php }?>
					<?php }?>
					
				</div>

			</div>
			<!--  商品分类部分 end--> 

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="">首页</a></li>
					<li><a href="">电脑频道</a></li>
					<li><a href="">家用电器</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="">积分商城</a></li>
					<li><a href="">夺宝奇兵</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
			
		</div>
		<!-- 导航条部分 end -->
		<div style="clear:both;"></div>
		<script>
		<?php $c = C('IMAGE_CONFIG');?>
		var picView = "<?php echo $c['viewPath'];?>";
		$('#cart').mouseover(function(){
			$.ajax({
				type : "get",
				url : "<?php echo U('Cart/ajaxGetCart')?>",
				dataType : "json",
				success : function(data){
					//拼装出html
					if(data){
					var html = '';
					html = '<div>你的购物车有以下商品！</div><table style="align:center;width:300px" >';
						$(data).each(function(k,v){
							html += '<tr>';
							html += '<td><img width="50" src="'+picView+v.mid_logo+'"></td>';
							html +=	'<td>名称：'+v.goods_name+'</td>';
							html +=	'<td>数量：'+v.goods_number+'件</td>';
							html += '</tr>';
						});
					html += '</table>';
					//放到div中
					$('#cart_div').html(html);
					
					}
				}
			});
		});
		$(function(){
		    $.ajax({
		        type : "get",
		        url : "<?php echo U('Cart/ajaxGetCartCount')?>",
		        dataType : "text",
		        success : function(data1){
		            $('#cart_count').html(data1);
		        }
		    });
		});
		</script>
	<div class="main w1210 bc mt10">
		<div class="crumb w1210">
			<h2><strong>用户中心 </strong><span>> 我的订单</span></h2>
		</div>
		
		<!-- 左侧导航菜单 start -->
		<div class="menu fl">
			<h3>用户中心</h3>
			<div class="menu_wrap">
				<dl>
					<dt>订单中心 <b></b></dt>
					<dd class="cur"><b>.</b><a href="<?php echo U('order')?>">我的订单</a></dd>
					<dd><b>.</b><a href="">我的关注</a></dd>
					<dd><b>.</b><a href="">浏览历史</a></dd>
					<dd><b>.</b><a href="">我的团购</a></dd>
				</dl>

				<dl>
					<dt>账户中心 <b></b></dt>
					<dd><b>.</b><a href="">账户信息</a></dd>
					<dd><b>.</b><a href="">账户余额</a></dd>
					<dd><b>.</b><a href="">消费记录</a></dd>
					<dd><b>.</b><a href="">我的积分</a></dd>
					<dd><b>.</b><a href="">收货地址</a></dd>
				</dl>

				<dl>
					<dt>订单中心 <b></b></dt>
					<dd><b>.</b><a href="">返修/退换货</a></dd>
					<dd><b>.</b><a href="">取消订单记录</a></dd>
					<dd><b>.</b><a href="">我的投诉</a></dd>
				</dl>
			</div>
		</div>
		<!-- 左侧导航菜单 end -->

		<!-- 右侧内容区域 start -->
		<div class="content fl ml10">
			<div class="order_hd">
				<h3>我的订单</h3>
				<dl>
					<dt>便利提醒：</dt>
					<dd>待付款（<?php echo $data['noPayCount']?>）</dd>
				</dl>

			</div>

			<div class="order_bd mt10">
				<table class="orders">
					<thead>
						<tr>
							<th width="10%">订单号</th>
							<th width="20%">订单商品</th>
							<th width="10%">收货人</th>
							<th width="20%">订单金额</th>
							<th width="20%">下单时间</th>
							<th width="10%">订单状态</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach($data['data'] as $k=>$v){?>
						<tr>
							<td><a href=""><?php echo $v['order_sn']?></a></td>
							<td>
							<a href="">
								<?php
 $_arr = explode(',',$v['logo']); foreach($_arr as $k1=>$v1){ showImage($v1); } ?>
							</a>
							</td>
							<td><?php echo $v['shr_name']?></td>
							<td>￥<?php echo $v['total_price']?></td>
							<td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
							<td>
								<?php if($v['pay_status'] == '是'){?>
								已支付
								<?php }else{?>
								未支付  <?php echo builtAlipayBtn($v['order_sn'],'去支付');?>
								<?php }?>
							</td>
							<td>
							<a href="">查看</a>
							<?php if($v['pay_status'] == '否'){?>
							 | <a href="">取消订单</a>
							<?php }?>
							</td>
						</tr>
						
					<?php }?>
						<tr>
							<td colspan="6"><?php echo $data['page'];?></td>
						<tr>
					</tbody> 
				</table>
				
			</div>
		</div>
		<!-- 右侧内容区域 end -->
		<!-- 引入帮助 -->.

	</div>
	<!-- 页面主体 end-->
<!-- 引入帮助 -->

<div style="clear:both;"></div>
<!-- slogen口号  B-->
    <div class="slogen" style="margin-top:20px;">
        <span class="slogen1"></span>
        <span class="slogen2"></span>
        <span class="slogen3"></span>
        <span class="slogen4"></span>
    </div>
    <!-- 底部导航 start -->
	<div class="bottomnav w1210 bc mt10">
	
		<div class="bnav1">
			<h3><b></b> <em>购物指南</em></h3>
			<ul>
				<li><a href="">购物流程</a></li>
				<li><a href="">会员介绍</a></li>
				<li><a href="">团购/机票/充值/点卡</a></li>
				<li><a href="">常见问题</a></li>
				<li><a href="">大家电</a></li>
				<li><a href="">联系客服</a></li>
			</ul>
		</div>
		
		<div class="bnav2">
			<h3><b></b> <em>配送方式</em></h3>
			<ul>
				<li><a href="">上门自提</a></li>
				<li><a href="">快速运输</a></li>
				<li><a href="">特快专递（EMS）</a></li>
				<li><a href="">如何送礼</a></li>
				<li><a href="">海外购物</a></li>
			</ul>
		</div>

		
		<div class="bnav3">
			<h3><b></b> <em>支付方式</em></h3>
			<ul>
				<li><a href="">货到付款</a></li>
				<li><a href="">在线支付</a></li>
				<li><a href="">分期付款</a></li>
				<li><a href="">邮局汇款</a></li>
				<li><a href="">公司转账</a></li>
			</ul>
		</div>

		<div class="bnav4">
			<h3><b></b> <em>售后服务</em></h3>
			<ul>
				<li><a href="">退换货政策</a></li>
				<li><a href="">退换货流程</a></li>
				<li><a href="">价格保护</a></li>
				<li><a href="">退款说明</a></li>
				<li><a href="">返修/退换货</a></li>
				<li><a href="">退款申请</a></li>
			</ul>
		</div>

		<div class="bnav5">
			<h3><b></b> <em>特色服务</em></h3>
			<ul>
				<li><a href="">夺宝岛</a></li>
				<li><a href="">DIY装机</a></li>
				<li><a href="">延保服务</a></li>
				<li><a href="">家电下乡</a></li>
				<li><a href="">京东礼品卡</a></li>
				<li><a href="">能效补贴</a></li>
			</ul>
		</div>
	</div>

	<!-- 底部导航 end -->


<!-- 页脚 -->


   <div style="clear:both;"></div>
	<!-- 底部版权 start -->
	<div class="footer w1210 bc mt10">
		<p class="links">
			<a href="">关于我们</a> |
			<a href="">联系我们</a> |
			<a href="">人才招聘</a> |
			<a href="">商家入驻</a> |
			<a href="">千寻网</a> |
			<a href="">奢侈品网</a> |
			<a href="">广告服务</a> |
			<a href="">移动终端</a> |
			<a href="">友情链接</a> |
			<a href="">销售联盟</a> |
			<a href="">京东论坛</a>
		</p>
		<p class="copyright">
			 © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
		</p>
		<p class="auth">
			<a href="#"><img id="png" src="/Public/Home/images/auth2.png" alt=""/></a>
			<a href="#"><img id="png" src="/Public/Home/images/auth3.jpg" alt=""/></a>
			<a href="#"><img id="png" src="/Public/Home/images/auth4.png" alt=""/></a> 
			<a href="#"><img id="png" src="/Public/Home/images/auth5.jpg" alt=""/></a> 
			<a href="#"><img id="png" src="/Public/Home/images/auth6.jpg" alt=""/></a> 
			<a href="#"><img id="png" src="/Public/Home/images/auth1.png" alt=""/></a>
		</p>
	</div>
	<!-- 底部版权 end -->

	<script type="text/javascript">
		document.execCommand("BackgroundImageCache", false, true);
	</script>
</body>
</html>
</body>
</html>
<script>
	$.ajax({
		type : 'get',
		dataType : 'json',
		url : "<?php echo U('Member/ajaxConfirm')?>",
		success : function(data){
			if(data.login == 1){
				var html = '你好！'+data.username+' [<a href="<?php echo U('Member/logout')?>">退出</a>]';
			}else{
				var html = '您好，欢迎来到京东！[<a href="<?php echo U('Member/login')?>">登录</a>] [<a href="<?php echo U('Member/register')?>">免费注册</a>]'; 
			}
			$('#user_info').html(html);
		}
		
	});
</script>