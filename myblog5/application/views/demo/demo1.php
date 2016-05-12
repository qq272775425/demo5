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
<!---demo1-1样式--->
<style type="text/css">
	div.centent {
   		float:left;
   		text-align: center;
   		margin: 10px;
	}
	span { 
		display:block; 
		margin:2px 2px;
		padding:4px 10px; 
		background:#898989;
		cursor:pointer;
		font-size:12px;
		color:white;
	}
	.demo{
		padding: 1.8em 0;
    	border-top: 1px solid #DBDBDB;
	}
	.coding{
		margin-bottom:20px;
	}
	table		{ border:0;border-collapse:collapse;}
	td	{ font:normal 12px/17px Arial;padding:2px;width:100px;}
	th			{ font:bold 12px/17px Arial;text-align:left;padding:4px;border-bottom:1px solid #333;}
	.even		{ background:#FFF38F;}  /* 偶数行样式*/
	.odd		{ background:#FFFFEE;}  /* 奇数行样式*/
	.selected		{ background:#FF6500;color:#fff;}
	.tab { width:240px;margin:50px;}
 	.tab_menu { clear:both;}
 	.tab_menu li { float:left; text-align:center; cursor:pointer; list-style:none; padding:1px 6px; margin-right:4px; background:#F1F1F1; border:1px solid #898989; border-bottom:none;}
 	.tab_menu li.hover { background:#DFDFDF;}
 	.tab_menu li.selected { color:#FFF; background:#6D84B4;}
 	.tab_box { clear:both; border:1px solid #898989; height:100px;}
 	.hide{display:none}
 	@charset "utf-8";
body {background:#fff;}
body,button,ul,li,p,dl,dd,h1,h2,h3,h4,h5,h6,img{margin:0;padding:0;list-style-type:none;}
a{text-decoration:none;}
a:hover {text-decoration:underline;}
.fixclear {clear:both;zoom:1;}
.fixclear:after {clear:both;content:'';display:block;height:0;visibility:hidden;}

#bd .mod .hd,#bd .but-mod,#bd .idfloat .hd{background:url(../images/repeat.png) repeat-x;}
#bd .cons .but1,#bd .cons .but2,#bd .cons .but3,#bd .cons .but4{background:url(../images/button.png) no-repeat;height:38px;width:86px;}

#bd {font-family: '宋体', Simsun;width:100%;margin:0 auto;}
#bd a{color:#006699;font-size:14px;}
#bd p{color:#7A7A7A;font-size:12px;line-height:20px;}
#bd p a{color:#207207;font-size:12px;}
#bd img{border:1px solid #D0D0D0;background:#fff;padding:2px;}
#bd strong{display:block;font-size:14px;}
#bd .pic img,#bd .phos img{display:block;}
#bd .pic,#bd .phos a{display:block;text-align:center;line-height:25px;font-size:12px;}
#bd .lis li{background-position:-52px -140px;padding-left:10px;line-height:19px;margin:7px 0;}
#bd .pic-text .pic{float:left;padding-right:10px;}
#bd .pic-text .text{float:left;}
#bd .pic-text .text strong{display:block;font-weight:normal;}
#bd .pic-text .text strong a{font-size:14px;}
#bd .hd{position:relative;}
#bd .more{position:absolute;top:0;right:10px;color:#4F900B;font-size:12px;}
#bd .way{font-size:12px;padding:15px 0 0 0;}
#bd .way a{font-size:12px;}
#bd .cons{width:630px;margin:0 auto;}

#bd .mod .hd{background-position:0 -106px;height:31px;line-height:31px;border-bottom:1px solid #D0D0D0;}
#bd .mod .bd{border-top:2px solid #F5F4F5;}
#bd .mod p{}
#bd .mod .main{width:628px;border:1px solid #D0D0D0;margin-right:10px;float:left;}
#bd .mod .sider{width:308px;border:1px solid #D0D0D0;float:left;}

#bd .col{color:#FF6C00;}

.gray{color:#666!important;font-size:12px!important;}



#bd .mod-1{ border:solid 1px #cccccc; padding:0; margin:10px auto;}
#bd .mod-1 .inner{ border:solid 1px #ffffff; background:#f5f5f5; padding:6px 0 5px 5px;}
#bd .mod-1 .sider{ padding-left:13px; _padding-left:12px;}
#bd .mod-1 .slide img{ width:380px; height:211px; border:none 0; padding:0;}
#bd .mod-1 .slide{ float:left; width:615px; height:211px; overflow:hidden;}
#bd .mod-1 .slide .pics{ float:left;}
#bd .mod-1 .slide .tabs{ float:right; width:233px; height:212px; border:solid 1px #999999;}
#bd .mod-1 .slide .tabs li{ border-bottom:solid 1px #999999; _height:39px;}
#bd .mod-1 .slide .tabs a{ display:block; border:solid 1px #ffffff; height:39px; line-height:39px; text-align:center; background:url(images/re_03.gif) 0 0 repeat-x; color:#333333;}
#bd .mod-1 .slide .tabs a:hover{ text-decoration:none;}
#bd .mod-1 .slide .tabs .on a{ position:relative; height:43px; overflow:hidden; line-height:43px; margin:-1px -1px -1px -23px; padding-left:23px; border:none 0; background:url(images/on_03.png) 0 0 no-repeat; cursor:pointer; color:#ffffff;font-weight:bold;}
#bd .mod-1 .sider .item{ *padding-bottom:4px;_padding-bottom:3px;}


#container_btn_box{
	height:160px;
	width: 200px;
}
#container_btn{
            width: 50px;
            height: 50px;
            position:relative;
            
        }
#btn_menu li, #btn_home{
            width: 50px;
            height: 50px;
            position: absolute;
        }
#btn_menu li{
            left: 0;
            top: 0;
            -webkit-transition: all 1s ease;
        }
#btn_home{
            -webkit-transition: transform 1s ease;
        }
</style>
<!---demo1-1样式--->

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
			<div class="demo" id="demo1-1">
			<h3 class="scroll">下拉框左右选择</h3>
				<div class="centent">
					<select multiple="multiple" id="select1" style="width:100px;height:160px;">
							<option value="1">选项1</option>
							<option value="2">选项2</option>
							<option value="3">选项3</option>
							<option value="4">选项4</option>
							<option value="5">选项5</option>
							<option value="6">选项6</option>
							<option value="7">选项7</option>
					</select>
					<div>
						<span id="add" >选中添加到右边&gt;&gt;</span>
						<span id="add_all" >全部添加到右边&gt;&gt;</span>
					</div>
				</div>

				<div class="centent">
					<select multiple="multiple" id="select2" style="width: 100px;height:160px;">
					<option value="8">选项8</option>
					</select>
					<div>
						<span id="remove">&lt;&lt;选中删除到左边</span>
						<span id="remove_all">&lt;&lt;全部删除到左边</span>
					</div>
				</div>
			</div>
			<a class="more-btn" href="#">GitHub查看源代码</a>	
		</div>

		<div class="container">			  
			<div class="demo" id="demo1-2">
			<h3 class="scroll">反选全选</h3>
				<form method="post" action="">
   					你爱好的运动是？
   				<br/>
    				<input type="checkbox" name="items" value="足球"/>足球
					<input type="checkbox" name="items" value="篮球"/>篮球
					<input type="checkbox" name="items" value="羽毛球"/>羽毛球
					<input type="checkbox" name="items" value="乒乓球"/>乒乓球
   				<br/>
    				<input type="button" id="CheckedAll" value="全　选"/>
    				<input type="button" id="CheckedNo" value="全不选"/>
    				<input type="button" id="CheckedRev" value="反　选"/> 

					<input type="button" id="send" value="提　交"/> 
				</form>
			</div>	  
			<a class="more-btn" href="#">GitHub查看源代码</a>		  
		</div>  
		
				<div class="container">			  
			<div class="demo" id="demo1-3">
			<h3 class="scroll">表格的隔行换色选择变色</h3>
					<table>
		<thead>
			<tr><th> </th><th>姓名</th><th>性别</th><th>暂住地</th></tr>
		</thead>
		<tbody>
			<tr><td><input type="checkbox" name="choice" value=""/></td>
				<td>张山</td><td>男</td><td>浙江宁波</td></tr>
			<tr><td><input type="checkbox" name="choice" value="" /></td>
				<td>李四</td><td>女</td><td>浙江杭州</td></tr>
			<tr><td><input type="checkbox" name="choice" value="" checked='checked' /></td>
				<td>王五</td><td>男</td><td>湖南长沙</td></tr>
			<tr><td><input type="checkbox" name="choice" value="" /></td>
				<td>找六</td><td>男</td><td>浙江温州</td></tr>
			<tr><td><input type="checkbox" name="choice" value="" /></td>
				<td>Rain</td><td>男</td><td>浙江杭州</td></tr>
			<tr><td><input type="checkbox" name="choice" value="" /></td>
				<td>MAXMAN</td><td>女</td><td>浙江杭州</td></tr>
		</tbody>
	</table>
			</div>	  
			<a class="more-btn" href="#">GitHub查看源代码</a>		  
		</div> 
		
		<div class="container">			  
			<div class="demo" id="demo1-4">
			<h3 class="scroll">选项卡</h3>
				<div class="tab">
					<div class="tab_menu">
						<ul>
							<li class="selected">时事</li>
							<li>体育</li>
							<li>娱乐</li>
						</ul>
					</div>
					<div class="tab_box"> 
		 				<div>时事</div>
		 				<div class="hide">体育</div>
		 				<div class="hide">娱乐</div>
					</div>
				</div>
			</div>	  
			<a class="more-btn" href="#">GitHub查看源代码</a>		  
		</div>
				<div class="container">			  
			<div class="demo" id="demo1-5">
			<h3 class="scroll">雅虎轮播广告选项卡</h3>
		<div id="bd">
  <div class="cons">
    <div class="mod"> 
      <!-- 焦点图模块 start -->
      <div class="mod-1">
        <div class="inner fixclear">
          <div class="slide fixclear">
            <ul class="pics">
              <li style="display: none; "><a href="http://ks.cn.yahoo.com/question/17504629.html" target="_blank" name="ks/jd/1"><img src="images/indexfocus20111002a.jpg" alt="教教你怎么对付小三"></a></li>
              <li style="display: none; "><a href="http://ks.cn.yahoo.com/question/16312560.html" target="_blank" name="ks/jd/2"><img src="images/indexfocus20111002b.jpg" alt="从手可以看出哪些身体疾病？"></a></li>
              <li style=""><a href="http://ks.cn.yahoo.com/question/13591758.html" target="_blank" name="ks/jd/3"><img src="images/indexfocus20111002c.jpg" alt="半夜惊醒 千万不要去卫生间！"></a></li>
              <li style="display: none; "><a href="http://ks.cn.yahoo.com/newspic/ks/947/1/" target="_blank" name="ks/jd/4"><img src="images/indexfocus20111002d.jpg" alt="佛的各种手势代表什么？"></a></li>
              <li style="display: none; "><a href="http://ks.cn.yahoo.com/newspic/ks/907/1/" target="_blank" name="ks/jd/5"><img src="images/indexfocus20111002e.jpg" alt="哪些小习惯会影响你的桃花运？"></a></li>
            </ul>
            <ul class="tabs">
              <li><a href="http://ks.cn.yahoo.com/question/17504629.html" target="_blank" name="ks/jd/1">教教你怎么对付小三</a></li>
              <li><a href="http://ks.cn.yahoo.com/question/16312560.html" target="_blank" name="ks/jd/2">从手可以看出哪些身体疾病？</a></li>
              <li class="on"><a href="http://ks.cn.yahoo.com/question/13591758.html" target="_blank" name="ks/jd/3">人必须戒掉的17个坏习惯</a></li>
              <li><a href="http://ks.cn.yahoo.com/newspic/ks/947/1/" target="_blank" name="ks/jd/4">世界末日理论十大真相</a></li>
              <li><a href="http://ks.cn.yahoo.com/newspic/ks/907/1/" target="_blank" name="ks/jd/5">生活中须注意的邪门事</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			</div>	  
			<a class="more-btn" href="#">GitHub查看源代码</a>		  
		</div>
<div class="container">			  
			<div class="demo" id="demo1-6">
			<h3 class="scroll">旋转合并的按钮</h3>
			<div id="container_btn_box">
				<div id="container_btn">
        <ul id="btn_menu">
            <li><img src="images/close_btn.png" alt=""/></li>
            <li><img src="images/full_btn.png" alt=""/></li>
            <li><img src="images/open_btn.png" alt=""/></li>
            <li><img src="images/prev_btn.png" alt=""/></li>
            <li><img src="images/refresh_btn.png" alt=""/></li>
        </ul>
        <div id="btn_home">
            <img src="images/home_btn.png" alt=""/>
        </div>
    </div>
    </div>
			</div>	  
			<a class="more-btn" href="#">GitHub查看源代码</a>		  
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
			
<!---demo1-1样式--->			
<script type="text/javascript">
$(function(){
	//移到右边
	$('#add').click(function() {
	//获取选中的选项，删除并追加给对方
		$('#select1 option:selected').appendTo('#select2');
	});
	//移到左边
	$('#remove').click(function() {
		$('#select2 option:selected').appendTo('#select1');
	});
	//全部移到右边
	$('#add_all').click(function() {
		//获取全部的选项,删除并追加给对方
		$('#select1 option').appendTo('#select2');
	});
	//全部移到左边
	$('#remove_all').click(function() {
		$('#select2 option').appendTo('#select1');
	});
	//双击选项
	$('#select1').dblclick(function(){ //绑定双击事件
		//获取全部的选项,删除并追加给对方
		$("option:selected",this).appendTo('#select2'); //追加给对方
	});
	//双击选项
	$('#select2').dblclick(function(){
	   $("option:selected",this).appendTo('#select1');
	});
});
</script>
<!---demo1-1样式--->
<!---demo1-2样式--->
<script type="text/javascript">
  $(function(){
     //全选
     $("#CheckedAll").click(function(){
	     $('[name=items]:checkbox').attr('checked', true);
	 });
	 //全不选
     $("#CheckedNo").click(function(){
	    $('[type=checkbox]:checkbox').attr('checked', false);
	 });
	 //反选
     $("#CheckedRev").click(function(){
		  $('[name=items]:checkbox').each(function(){
			//此处用JQ写法颇显啰嗦。体现不出JQ飘逸的感觉。
			//$(this).attr("checked", !$(this).attr("checked"));
			
			//直接使用JS原生代码，简单实用
			this.checked=!this.checked;
		  });
	 });
	 //输出值
	$("#send").click(function(){
		var str="你选中的是：\r\n";
		$('[name=items]:checkbox:checked').each(function(){
			str+=$(this).val()+"\r\n";
		})
		alert(str);
	});
  })

</script>
  <!---demo1-2样式--->
  <!---demo1-3样式--->
<script type="text/javascript">
  	$(function(){
		$("tbody>tr:odd").addClass("odd"); //先排除第一行,然后给奇数行添加样式
		$("tbody>tr:even").addClass("even"); //先排除第一行,然后给偶数行添加样式
		$('tbody>tr').click(function() {
			//方法一
			/*if ($(this).hasClass('selected')) {
				$(this)
					.removeClass('selected')
					.find(':checkbox').attr('checked',false);
			}else{
				$(this)
					.addClass('selected')
					.find(':checkbox').attr('checked',true);
			}*/
			
			//方法二：
			var hasSelected=$(this).hasClass('selected');//判断当前是否选中
			//如果选中，则移出selected类，否则就加上selected类
			$(this)[hasSelected?"removeClass":"addClass"]('selected')
				//查找内部的checkbox,设置对应的属性。
				.find(':checkbox').attr('checked',!hasSelected);

		});
		// 如果复选框默认情况下是选择的，则高色.
		// $('table :checkbox:checked').parent().parent().addClass('selected');
		//简化:
		$('table :checkbox:checked').parents("tr").addClass('selected');
		//$('tbody>tr:has(:checked)').addClass('selected');
  })
  </script>
  <!---demo1-3样式--->
   <!---demo1-4样式--->
<script type="text/javascript">
  	$(function(){
	    var $div_li =$("div.tab_menu ul li");//选中所有“标签”
	    $div_li.click(function(){//为“标签”注册单击事件
			$(this).addClass("selected")            //当前<li>元素高亮
				   .siblings().removeClass("selected");  //去掉其它同辈<li>元素的高亮
            var index =  $div_li.index(this);  // 获取当前点击的<li>元素在全部li元素中的索引。
			$("div.tab_box > div")   	//选取直接子节点。不选取子节点的话，会引起错误。如果里面还有div 
					.eq(index).show()   //显示 <li>元素对应的<div>元素
					.siblings().hide(); //隐藏其它几个同辈的<div>元素
		}).hover(function(){
			$(this).addClass("hover");//鼠标滑过标签高亮
		},function(){
			$(this).removeClass("hover");//鼠标滑出标签，取消高亮
		})
	})
	</script>
	<!---demo1-4样式--->
	<!---demo1-5样式--->
	<script>
	$(function(){

	//轮播
	var $tabs = $(".mod-1 .slide .tabs li");	
	function Carousel(){
		var _timer = -1;
		this.start = function(){
			var idx = $tabs.index($tabs.filter(".on"));//得到导航列表已选中列表的索引
			_timer = setInterval(function(){
				if(idx == $tabs.length) idx = 0;
				$($tabs.get(idx++)/*[idx++]*/).trigger("mouseover");
				//idx++;
			}, 1000);
		};
		this.pause = function(){
			clearInterval(_timer);
		}
	}
	
	var carousel = new Carousel();
	carousel.start();
	$tabs.add(".mod-1 .slide .pics li").hover(function(){
		carousel.pause();	
	},function(){
		carousel.start();
	});
	
	//点击导航列表事件
	$(".mod-1 .slide .tabs li").mouseover(function(){
		var $li = $(this);//将当前列表对象保存起来，供下面的匿名函数调用
		setTimeout(function(){//使用setTimeout函数是为了延时一段时间，达到缓冲效果
			var idx = $li.index();//得到当前点击的列表的索引值
			$li.addClass("on").siblings().removeClass("on");//为当前点击的列表添加选中样式，并移除其兄弟切点样式	
			//alert(idx1);
			$($(".mod-1 .slide .pics li")[idx]).show()//显示对应当前列表索引的item
			.siblings().hide();
		}, 60);	
	});
});
</script>
<!---demo1-5样式--->
<!---demo1-6样式--->
<script>
        var oHome = document.getElementById('btn_home');
        var oMenu = document.getElementById('btn_menu');
        var aLi = oMenu.getElementsByTagName('li');
        var bClicked = false;//false代表收缩，true为展开
        oHome.onclick = function(){
            if(!bClicked){
                this.style.WebkitTransform = 'rotate(-360deg)';
                for(var i=0; i<5; i++){
                    aLi[i].style.WebkitTransitionDelay = 0.1*i+'s';
                    aLi[i].style.WebkitTransform = 'rotate(-360deg) scale(1)';
                    aLi[i].style.left = 150 * Math.sin(22.5*i*Math.PI/180) + 'px';
                    aLi[i].style.top = 150 * Math.cos(22.5*i*Math.PI/180) + 'px';
                }
            }else{
                this.style.WebkitTransform = 'rotate(0deg)';
                for(var i=0; i<5; i++){
                    aLi[i].style.WebkitTransitionDuration = '1s';
                    aLi[i].style.WebkitTransitionDelay = 0.1*(4-i)+'s';
                    aLi[i].style.WebkitTransform = 'rotate(0deg) scale(1)';
                    aLi[i].style.left = 0;
                    aLi[i].style.top = 0;
                }
            }
            bClicked = !bClicked;

        };

        var fn = function(){
            this.style.WebkitTransitionDuration = '0.1s';
            this.style.WebkitTransform = 'rotate(-360deg) scale(1)';
            this.style.opacity = 1;
            this.removeEventListener('webkitTransitionEnd', fn, false);
        };

        for(var i=0; i<5; i++){
            aLi[i].onclick = function(){
                this.style.WebkitTransitionDuration = '0.2s';
                this.style.WebkitTransform = 'rotate(-360deg) scale(2)';
                this.style.opacity = 0.2;
                this.addEventListener('webkitTransitionEnd', fn, false);
            };
        }
</script>
<!---demo1-6样式--->
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- /footer -->
	<!-- /container -->
</body>
</html>

