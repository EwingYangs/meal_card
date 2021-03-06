<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>“饭卡回家”系统注册</title>
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link href="/Public/Home/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/Home/css/register.css"/>
</head>
<body>
	<form action="<?php echo U('register')?>" method="post">
		<div class="logo">
			<img src="/Public/Home/images/1.jpg" alt="“饭卡回家”失物招领系统">
		</div>
		<p>
			<label>学号</label>
			<input name="sno" type="text" placeholder="请输入9位学号" class="user" />
		</p>
		<p>
			<label>姓名</label>
			<input name="sname" type="text" placeholder="请输入姓名" class="name" />
		</p>
		<p>
			<label>密码</label>
			<input name="password" type="password" placeholder="密码" class="pwd1" />
		</p>
		<p>
			<label>确认</label>
			<input name="password2" type="password" placeholder="确认密码" class="pwd2" />
		</p>
		<p>
			<label>手机</label>
			<input name="snum" type="text" placeholder="请输入11位手机号" class="phone" />
		</p>
		<p>
			<label>系别</label>
			<select name="dep"> 
			  <option value="互联网金融与信息工程系">互联网金融与信息工程系</option>  
			  <option value="金融系">金融系</option>  
			  <option value="会计系">会计系</option>  
			  <option value="保险系">保险系</option>  
			  <option value="经济贸易系">经济贸易系</option>  
			  <option value="工商管理系">工商管理系</option>  
			  <option value="财经传媒系">财经传媒系</option>  
			  <option value="法律系">法律系</option>  
			  <option value="外语系">外语系</option>  
			  <option value="劳动经济与人力资源管理系">劳动经济与人力资源管理系</option>  
			  <option value="公共管理系">公共管理系</option>  
			  <option value="应用数学系">应用数学系</option>  
			</select>  
		</p>
		<div class="btnbox">
			<input type="submit" class="btn btn-primary" value="注册" style="width:55px;height:33px">
			<a type="button" class="btn btn-primary" href="<?php echo U('login')?>">返回</a>
		</div>
	</form>
</body>
<script src="/Public/Home/js/jquery/jquery.min.js"></script>
<script src="/Public/Home/js/layui/layer.js"></script>
<script src="/Public/Home/js/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/Home/js/login.js"></script>
</html>