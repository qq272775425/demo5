<!DOCTYPE HTML>
<html>
<head>
<title>个人主页</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Portfolio  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<base href="<?php echo site_url(); ?>">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
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
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
	<style>
		.blog-list{
			list-style: none;
			margin: 0;
			padding: 0;
			float: left;
			width: 350px;	
			margin-right: 45px;
		}
		.blog-artical{
			width: 100%;
		}

	</style>
</head>
<body>	
	<!-- container -->
		<!-- header -->
		<div id="home" class="header">
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
										<li><a class="scroll" href="#home">Home</a></li>
										<li><a class="scroll" href="#about">About</a></li>
										<li><a class="scroll" href="#services">Skill</a></li>
										<li><a class="scroll" href="#port">Demo</a></li>
										<li><a class="scroll" href="#blog">Blog</a></li>
										<li><a class="scroll" href="#contact">Contact</a></li>
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
				<!-- banner-info -->
				<div class="banner-info text-center">
					<img src="images/pic.png" class="img-responsive" alt=""/>
					<h1>Haonan Yu</h1>
					<p>爱前端，爱生活    Enjoy Coding,Enjoy Life :)</p>
					<ul>
						<li><a href="welcome/contact">Hire Me</a></li>
						<li><a href="welcome/contact">Chat To Me</a></li>
					</ul>
				</div>
				<!-- banner-info -->
			</div>
		</div>
		<!-- /header -->
		<!-- about -->
		<div id="about" class="about">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>About Me</h2>
					<span></span>
				</div>
				<!-- head-section -->
				<!-- about-grids -->
				<div class="about-grids">
					<div class="col-md-6 about-left-grid">
						<h3>于浩男</h3>
						<span>希望任职前端开发工程师 </span>
						<p>熟练运用HTML，CSS进行页面布局熟练掌握ECMAscript，可以在不借助插件的条件下进行界面交互设计 ,掌握jQuery Dojo，以及相关插件 ,掌握PHP语言，Mongoose，能够熟练使用CI框架 会使用MySQL数据库 ,熟练使用HTML5，CSS3能够进行动画设计,掌握移动端开发，Node.js，Express框架</p>
						<p> 善于快速的将所学到的知识运用到实践中;能吃苦，比较执着，有钻研精神，对于不懂的知识充满求知欲，具有潜力;有责任感，大局观，有很强的执行能力; 性格开朗，外向，能够与各种类型的人搞好关系;热爱前端开发，并且对前端的未来充满信心;爱好广泛：摄影摄像，吉他贝斯，后期调音，锻炼旅游;我相信通过在贵公司的实习以及以后的学习，一定能在前端开发中成为技术大牛</p>
					</div>
					<div class="col-md-6 about-right-grid">
						<a class="popup-with-zoom-anim" href="#"><img src="images/video.jpg" title="name" /></a>
					</div>
				</div>
				<!-- about-grids -->
			</div>
		</div>
		<!-- about -->
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
			<!----//fea-video---->
		<!-- services -->
		<div id="services" class="services">
			<!-- head-section -->
				<div class="head-section service-head text-center">
					<h2>My Skills</h2>
					<span></span>
				</div>
				<!-- head-section -->
				<!-- skills-grids -->
				<div class="service-grids text-center">
					<div class="container">
						<div class="col-md-4" id="case0">
							<div class="service-grid t-service-grid">
								<span class="s-cion1"> </span>
								<h3>HTML CSS</h3>
								<p>深入理解html语义化、dom树、文本流等概念，能够解决一些常见的浏览器兼容问题，能够根据psd文件快速建站，具有较强的代码编写编写能力</p>
							</div>
						</div>
						<div class="col-md-4" id="case1">
							<div class="service-grid t-service-grid">
								<span class="s-cion2"> </span>
								<h3>JAVASCRIPT</h3>
								<p>对面向对象、原型、继承、闭包、事件处理机制、跨域等概念有比较深入的理解，熟练使用AJAX，可以在不借助类库的情况下熟练完成页面交互</p>
							</div>
						</div>
						<div class="col-md-4" id="case2">
							<div class="service-grid t-service-grid">
								<span class="s-cion3"> </span>
								<h3>DATABASES&PHP</h3>
								<p>熟练掌握mySQL和mongodb，能够使用PHP进行数据的增删改查、批量增删，多表查询操作，了解基本的排序算法和数据结构，并能够应用到实际问题处理中去。</p>
							</div>
						</div>
						<div class="col-md-4" id="case3">
							<div class="service-grid">
								<span class="s-cion4"> </span>
								<h3>CSS3 HTML5</h3>
								<p>了解html5中的一些新函数，并能够熟练使用，可以利用css3中的两种动画函数实现比较炫酷的动画，了解css3优化与加速渲染方式</p>
							</div>
						</div>
						<div class="col-md-4" id="case4">
							<div class="service-grid">
								<span class="s-cion5"> </span>
								<h3>NODE.JS</h3>
								<p>能够快速搭建node.js环境，能够熟练使用express框架，有过node.js项目开发经历，可以使用node.js实现在线聊天室的功能</p>
							</div>
						</div>
						<div class="col-md-4" id="case5">
							<div class="service-grid">
								<span class="s-cion6"> </span>
								<h3>FRAMEWORKS</h3>
								<p>熟练使用CI，Express框架，熟练使用jQuery、jQueryMobile、zepotp、bootstrap等类库和插件的使用</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- skills-grids -->
		</div>
		<!-- services -->
		<!-- portfolio -->
		<div id="port" class="portfolio">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>My Demo</h2>
					<span></span>
				</div>
				<!-- /head-section -->
				<!-- demo-grids -->
				<div class="portfolio-grids">
				
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic.jpg" title="动画" rel="title2">					
						    <div class="view view-first">
                              <img src="images/port-pic.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>jQuery动画 插件</h3>
                                <p>"js jQuery css3"</p> 
		                      </div>
                            </a></div>
                            
                    </div>
                
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic1.jpg" title="游戏" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic1.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>js小游戏</h3>
                                <p>"html css js"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic2.jpg" title="切图建站" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic2.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>快速切图建站</h3>
                                <p>"html css"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic3.jpg" title="图片特效" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic3.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>图片类特效</h3>
                                <p>"html5 css3"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic5.jpg" title="整站开发" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic5.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>整站开发</h3>
                                <p>"php ci框架 html5 js"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic6.jpg" title="插件" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic6.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>组件化编程</h3>
                                <p>"jquery"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic7.jpg" title="node.js" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic7.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>Express框架开发</h3>
                                <p>"Node.js js jQuery"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
					<div class="portfolio-grid about-grid">
						<a href="images/port-pic8.jpg" title="移动端开发" rel="title2">
						    <div class="view view-first">
                              <img src="images/port-pic8.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/hover-icon.png" alt=""/></div>
                                <h3>移动端开发与响应式设计</h3>
                                <p>"jQueryMobile css3"</p>
                                
		                      </div>
                            </a> </div>
                    </div>
				</div>
				<!-- demo-grids -->
				<p class="more-articals text-center">Check Out My <a href="demo/demo9">Demo</a> And Subscribe To Get All The Updates</p>
			</div>
		</div>
		<!-- /portfolio -->
		<!-- blog -->
		<div id="blog" class="blog">
			<div class="container">
				<!-- head-section -->
				<div class="head-section text-center">
					<h2>My Blog</h2>
					<span> </span>
				</div>
				<!-- /head-section -->
				<!-- blog-articals -->
				<div class="blog-articals">
					<ul class="blog-list">
					</ul>
					<ul class="blog-list">
					</ul>
					<ul class="blog-list" style="margin-right: 0;">
					</ul>
				</div>
				<div class="clearfix"> </div>
				<!-- blog-articals -->
				<p class="more-articals text-center">Check Out My <a href="#">Blog</a> And Subscribe To Get All The Updates</p>
			</div>
		</div>
		<!-- /blog -->
		<!-- projects -->
		<div class="projects">
			<div class="container">
				<div class="project-grids">
					<div class="cycle">
						<span> </span>
					</div>
					<div class="project-grid total-project">
						<p>15</p>
						<p>Projects</p>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="project-grid clientsgrid">
						<div>
						<p>5</p>
						<p>Residency</p>
						</div>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="project-grid people-grid">
						<div>
						<p>80%</p>
						<p>Completion</p>
						</div>
						<span> <i class="p-icon"> </i></span>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- projects -->
		<!-- catch-on -->
		<div id="contact" class="catch-on text-center">
			<p>如果您想给我一次展示自我的机会 <a class="catch" href="welcome/contact">Contact Me</a></p>
		</div>
		<!-- /catch-on -->
		<!-- footer -->
		<div class="container">
		<div class="footer">
				<div class="footer-left">
					<p>Template by 若有若无的小矫情<a href="admin/login">&nbsp;&nbsp;&nbsp;&nbsp;登陆管理</a></p>
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
			$blogHeadSection = $('#blog .head-section');
			var iHeadSectionTop = $blogHeadSection.offset().top,
				iHeadSectionHeight = $blogHeadSection.height();
			var bLoad = true;//判断是否该加载新数据
			var bLoaded = false;//判断本次请求的数据是不是加载完毕
			var isEnd = false;//判断是不是加载完数据库中的所有数据
			var page = 0;//控制分页

			function getMinUl(){
				$blogList = $('.blog-list');
				var $minUl =  $blogList.eq(0);
				for(var i=1; i<$blogList.length; i++){
					if($blogList.eq(i).height() < $minUl.height()){
						$minUl = $blogList.eq(i);
					}
				}
				return $minUl;
			}



			$(window).on('scroll', function(){

				if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
					if(bLoad){
						bLoad = false;
						$.get('welcome/get_articles?page='+page, function(res){
							if(!res.isEnd){
								for(var i=0; i<res.data.length; i++){
									var blog = res.data[i];
									var html = '<li class="blog-artical">'
													+ '<div class="blog-artical-pic">'
														+ '<a href="welcome/detail/'+blog.blog_id+'"><img src="'+blog.photo+'" title="name" /></a>'
													+ '</div>'
													+ '<div class="blog-artical-info">'
														+ '<h3><a href="welcome/detail/'+blog.blog_id+'">'+blog.title+'</a></h3>'
														+ '<span>'+blog.admin_name+' | <a href="#">13 comments</a></span>'
														//+ '<p>'+blog.content+'</p>'
														+ '<a class="more-btn" href="welcome/detail/'+blog.blog_id+'">See More</a>'
														+ '<div class="clearfix"> </div>'
													+ '</div>'
												+ '</li>';
									var $minUl = getMinUl();
									$minUl.append(html);
								}
								bLoaded = true;
								page += 6;
							}else{
								isEnd = true;
							}
						}, 'json');

					}


					var $minUl = getMinUl();
					if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
						bLoad = true;
						bLoaded = false;
					}
				}


			});
		});
</script>				  
</body>
</html>

