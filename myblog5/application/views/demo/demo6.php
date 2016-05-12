<!DOCTYPE HTML>
<html>
<head>
<title>demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<base href="<?php echo site_url(); ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!---- kindeditor---->
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<!---- kindeditor-end---->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<!---//webfonts--->
</head>
<body>	
	<!-- container -->
		<!-- header -->
		<div id="home" class="single_header">
			<div class="container">
				<!-- -->
				<div class="nav-icon">
					 <a href="#" class="right_bt" id="activator"><span> </span> </a>
				</div>
				 <div class="box" id="box">
					 <div class="box_content">        					                         
						<div class="box_content_center">
						 	<div class="form_content">
								<div class="menu_box_list">
									<ul>
										<li><a href="index.html">home</a></li>
										<li><a class="scroll" href="#about">About</a></li>
										<li><a class="scroll" href="#services">Services</a></li>
										<li><a class="scroll" href="#port">portfolio</a></li>
										<li><a class="scroll" href="#blog">Blog</a></li>
										<li><a href="contact.html">Contact</a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"> <span> </span></a>
							</div>                                  
						</div> 	
					</div> 
				</div>    
				<!-- script-for-box -->
				 <script type="text/javascript">
					var $ = jQuery.noConflict();
						$(function() {
							$('#activator').click(function(){
								$('#box').animate({'top':'0px'},500);
							});
							$('#boxclose').click(function(){
							$('#box').animate({'top':'-700px'},500);
							});
							
						});
						$(document).ready(function(){
						//Hide (Collapse) the toggle containers on load
						$(".toggle_container").hide(); 
						//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
						$(".trigger").click(function(){
							$(this).toggleClass("active").next().slideToggle("slow");
								return false; //Prevent the browser jump to the link anchor
						});
											
					});
				</script>
				<!-- script-for-box -->
				<!----->
				
			</div>
		</div>
		<!-- /header -->
		   <div class="container">
	 	   
		   </div>
		<!-- footer -->
		<div class="container">
		<div class="footer">
				<div class="footer-left">
					<p>Template by <a href="http://5151chuangye.com" target="_blank">若有若无的小矫情</a></p>
				</div>
				<div class="footer-right">
					<ul>
						<li><a href="#"><span class="weibo"> </span></a></li>
						<li><a href="#"><span class="weixin"> </span></a></li>
						<li><a href="#"><span class="youku"> </span></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					$().UItoTop({ easingType: 'easeOutQuart' });									
				});
			</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- /footer -->
	<!-- /container -->
</body>
</html>

