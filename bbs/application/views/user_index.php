<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="zh-CN">
  <title>51创业吧个人主页</title>
  <base href="<?php echo site_url();?>"/>
      <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.css" media="screen">
  <script type="text/javascript" src="js/jquery-1.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery_002.js"></script>
  <script type="text/javascript" src="js/oschina.js"></script>
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}	
  </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
<div id="OSC_Banner">
    <div id="OSC_Slogon">51chuangye.club</div>
    <div id="OSC_Channels">
        <ul>
        <li><a href="#" class="project">心情 here...</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div><!-- #EndLibraryItem --><div id="OSC_Topbar">
	  <div id="VisitorInfo">
		当前访客身份：
				<?php
				$login_user=$this->session->userdata("login_user");
				if($login_user){ 
				?>
				<?php echo $login_user->NAME;
				?>[<a href="user/login">退出</a>]
				<?php
				}else{ 
					
				?>
				游客[<a href="user/login">登陆</a>|<a href="user/reg">注册</a>]
				<?php
				}
				?>
				
</div>
		<div id="SearchBar">
    		<form action="#">
								<input name="user" value="154693" type="hidden">
																								<input id="txt_q" name="q" class="SERACH" value="在51chuangye.club中搜索" onblur="(this.value=='')?this.value='在51创业.ciub中搜索':this.value" onfocus="if(this.value=='在51创业.club中搜索'){this.value='';};this.select();" type="text">
				<input class="SUBMIT" value="搜索" type="submit">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
	<div id="OSC_Content"><div class="SpaceChannel">
	<div id="portrait"><a href="adminIndex.htm"><img src="images/portrait.gif" alt="Johnny" title="Johnny" class="SmallPortrait" user="154693" align="absmiddle"></a></div>
    <div id="lnks">
		<strong><?php echo $login_user->NAME;
				?>的主页&nbsp;&nbsp;&nbsp;&nbsp;<a href="welcome/index">返回论坛</a></strong>
			
		<div><a href="index_logined.htm">TA的发帖列表</a>&nbsp;|
			<a href="sendMsg.htm">发送留言</a></div>
	</div>
	<div class="clear"></div>
</div>
<div class="BlogList">
<ul>
<?php
	foreach($blogs as $blog){
?>
  <li class="Blog">
	<h2 class="BlogAccess_true BlogTop_0"><a href="blog/view/<?php echo $blog->BLOG_ID;?>"><?php echo $blog->TITLE;?></a></h2>
	<div class="outline">
	  <span class="time">发表于<?php echo $blog->ADD_TIME;?></span>
	  <span class="catalog">分类: <a href="#"></a><?php echo $blog->	CATALOG_NAME;?></span>
	  <span class="stat">统计: 1评/<?php echo $blog->CLICK_RATE;?>阅</span>
	  	</div>
		<div class="TextContent" id="blog_content_24027">
				<?php 
				echo mb_strlen($blog->CONTENT)<20?$blog->CONTENT:mb_substr($blog->CONTENT,0,20)."...";
				?>
				
		<div class="fullcontent"><a href="blog/view/<?php echo $blog->BLOG_ID;?>">阅读全文...</a></div>
			</div>
	  </li>
	  <?php }?>
</ul>
<div class="clear"></div>
	</div>
<div class="BlogMenu"><div class="admin SpaceModule">
  <strong>主页管理</strong>
  <ul class="LinkLine">
	<li><a href="user/newbbs">发表帖子</a></li>
  </ul>
</div>
<div class="catalogs SpaceModule">
  <strong>发帖分类</strong>
  <ul class="LinkLine">
    	<li><a href="#">工作日志(3)</a></li>
		<li><a href="#">日常记录(0)</a></li>
		<li><a href="#">转贴的文章(0)</a></li>
	  </ul>
</div>
</div>
<div class="clear"></div>
<script type="text/javascript" src="js/brush.js"></script>
<link type="text/css" rel="stylesheet" href="css/shCore.css">
<link type="text/css" rel="stylesheet" href="css/shThemeDefault.css">

	<div class="clear"></div>
	<div id="OSC_Footer">© 51创业吧(WWW.51chuangye.club)</div>
</div>
</div>
<script type="text/javascript" src="js/space.htm" defer="defer"></script>

</body></html>