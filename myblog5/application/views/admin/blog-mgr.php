<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles of Authors</title>
  <meta name="description" content="这是一个 Article 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">文章</strong> / <small>Article</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button id="btn-add" type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button type="button" class="am-btn am-btn-default btn-delete"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">ID</th>
                <th class="table-title">封面缩略图</th>
                <th class="table-title">标题</th>
                <th class="table-type">添加时间</th>
                <th class="table-type">作者</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
          <?php
            foreach($blogs as $blog){
          ?>
              <tr>
                <td><input type="checkbox" class="single_check" value="<?php echo $blog -> blog_id; ?>"/></td>
                <td><?php echo $blog -> blog_id; ?></td>
                <td><img src="<?php if($blog -> photo){echo $blog -> photo;}else{echo('images/blog-post1.jpg');} ?>" width="100" height="100"/></td>               
                <td><a href="#"><?php echo $blog -> title; ?></a></td>
                <td><?php echo $blog -> add_time; ?></td>
                <td><?php echo $blog -> admin_name; ?></td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button data-id="<?php echo $blog -> blog_id; ?>"  class="am-btn am-btn-default am-btn-xs am-text-secondary text-edit"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                      <button data-id="<?php echo $blog -> blog_id; ?>"  class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only single_delete"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
                </td>
              </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
        <div class="am-cf">
          共 <?php echo $total_rows;?> 条记录
          <div class="am-fr">
            <ul class="am-pagination">
             <?php echo $this->pagination->create_links();?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2016 by @若有若无的小矫情 Inc. </p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>

 //$(function(){
  // $('.single_delete').on('click', function(){
   	 //var that = this;
    // var blogId =  $(this).data('id');
    // if(confirm('确定是否删除记录，不可恢复!?')){
       ////location.href = 'admin/delete_blog?blog_id='+blogId;
       //$.get('admin/delete_blog?blog_id='+blogId,function(res){
       //	if(res=='fail'){
       	//	$(that).parents('tr').remove();
       //	}{
       //	alert('当前操作失败');}
     //  },'text');
    // }
  // });
   $(function(){
   $('.single_deletebtn-add').on('click', function(){
     var blogId =  $(this).data('id');
     if(confirm('确定是否删除记录，不可恢复!?')){
       location.href = 'admin/delete_blog?blog_id='+blogId;
     }
   });

   $('#btn-add').on('click', function(){
     location.href = 'admin/post_blog';
   });
   
   var array1=[];
   
   $(".table-check").click(function(){
		  $('.single_check').each(function(){			
			//直接使用JS原生代码，简单实用
			this.checked=!this.checked;
			if(this.checked){		
				array1.push(this.value);		
			}else{
				array1.pop();}				
			});
	 });
	 
   $('.single_check').click(function(){
   if(this.checked){		
		array1.push(this.value);
		alert(array1);		
	}else{
		array1.pop();
		alert(array1);}
	});
	
	$('.btn-delete').on('click', function(){
     if(confirm('确定是否删除记录，不可恢复!?')){
       location.href = 'admin/delete_blogs?blog_ids='+array1;
     }
   });
   
   
   $('.text-edit').on('click', function(){
   var blogId =  $(this).data('id');
     location.href = 'admin/edit_blog?blog_id='+blogId;;
   });
	
	
 });
</script>
</body>
</html>
