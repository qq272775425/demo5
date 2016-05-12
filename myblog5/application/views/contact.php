<!DOCTYPE HTML>
<html>
<head>
<title>如果您想联系我或者获得我的简历，请在下方留下您的邮箱，谢谢！</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="<?php echo site_url(); ?>">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
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
										<li><a class="scroll" href="#services">Skill</a></li>
										<li><a class="scroll" href="#port">Demo</a></li>
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
		<div class="single">
		   <div class="container">
              <div class="singel_right">
			     <div class="col-md-8">
				      <div class="contact-form">
				  	        <!--<form method="post" action="welcome/message">-->
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" name="username" required class="textbox">
						    	</p>
						        <p class="comment-form-author"><label for="author">Email:</label>
						     	   <input type="text" name="email" pattern="^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$"  required class="textbox">
						        </p>
						        <p class="comment-form-author"><label for="author">Message:</label>
						    	  <textarea name="content" required ></textarea>
						        </p>
						        <input name="submit" type="button" id="submit" value="Submit">
					        </form>
				       </div>
			     </div>
			     <div class="col-md-4 contact_right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						  黑龙江省哈尔滨市香坊区三大动力路23号5公寓
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
						   130-0987-3997
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="malito:mai(at)demolink.org">272775425@qq.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
		        </div>
		        <div class="clearfix"></div>
		</div>
		<div class="map">
           <iframe src="http://map.baidu.com/?newmap=1&s=con%26wd%3D%E5%93%88%E7%90%86%E5%B7%A5%E4%B8%9C%E5%8C%BA%26c%3D48&from=alamap&tpl=mapdots"> </iframe>
        </div>
     </div>
		  </div>
		<!-- footer -->
		<div class="container">
		<div class="footer">
				<div class="footer-left">
					<p>Template by <a href="http://5151chuangye.com" target="_blank">若有若无的小矫情</a></p>
				</div>
				<div class="footer-right">
					<ul>
						<li><a href="http://weibo.com/5847624952/profile?profile_ftype=1&is_all=1#_0"><span class="weibo"> </span></a></li>
						<li class=""><a class="popup-with-zoom-anim" href="#small-dialog" ><span class="weixin"> </span></a></li>
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
	<script>
		$(function(){
			$('#submit').on('click', function(){
				var $username = $('[name="username"]');
				var $email = $('[name="email"]');
				var $content = $('[name="content"]');
				/*if($username.val() == ''){
					alert('请输入用户名!');
					$username.focus();
				}*/
				//$.post(url, data, callback, type);
				$.post('Welcome/message', {
					username:$username.val(),
					email:$email.val(),
					content:$content.val()
				}, function(res){
					if(res == 'fail'){
						$username.css({
							border: '1px solid red'
						});
					}else if(res == 'success'){
						alert('我已经收到您的信息，将在近期以邮件的形式回复您!');
					}
				});
			});

			$('[name="username"]').on('blur', function(){
				$.get('welcome/check_name', {uname: this.value}, function(res){
					if(res == 'fail'){
						alert('您已经给我发过信息，确定继续发送？');
					}
				})
			});

		});
	</script>
			<!---pop-up-box---->
				<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					<iframe src="images/weixincode.png"> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
</body>
</html>

