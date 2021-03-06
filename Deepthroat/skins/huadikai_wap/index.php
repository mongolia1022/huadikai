
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tag['seo.title']; ?></title>
  <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
  <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<script src="<?php echo $tag['path.skin']; ?>js/jquery.min.js"></script>
<script src="<?php echo $tag['path.skin']; ?>js/sly.min.js"></script>
<link href="<?php echo $tag['path.skin']; ?>css/common.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="head"><?php doc_focus('2',1,1,0,0,true,'ordering',3)?></div>

<div class="menu">
	<a href="javascript:void(0)" class="btn prev"><i class="ico-arrow-right ico-white"></i></a>
	<a href="javascript:void(0)" class="btn next"><i class="ico-arrow-left ico-white"></i></a>
	<div class="menu-list">
		<ul class="clearfix">
			<li> <a href="/wap" class="home">网站首页</a></li>
      <?php nav_main(); ?>
					</ul>
	</div>
</div>

  <?php doc_focus('6',5,0,0,0,true,'ordering',0)?>

<div class="wrap">
	<div class="cpzx">
		<div class="tit">
			<div class="fl">公司产品</div>
			<div class="fr"><a href="?p=3">更多+</a></div>
		</div>
		<div class="con">
			<ul class="pic">
								<?php doc_focus('4',4,2,0,0,true,'id',0)?>
							</ul>
		</div>
	</div>
	
	<div class="gsxw">
		<div class="tit">
			<div class="fl">公司新闻</div>
			<div class="fr"><a href="?p=2">更多+</a></div>
		</div>
		<div class="con">
			<ul class="txt">
        <?php doc_list('2',5,0,0,0,0,true,false,'id',0)?>
							</ul>
		</div>
	</div>
	
</div>

<script type="text/javascript">
	(function () {
		var $banner = $('.banner-list');
		$banner.sly({horizontal:1,itemNav:'basic',mouseDragging:1,touchDragging:1,releaseSwing:1,speed:300,dragHandle:1,dynamicHandle:1,clickBar:1,cycleBy:'pages',cycleInterval:5000});
		$(window).bind('load resize',function(){
			var blw = $banner.outerWidth()
			$banner.find('li').css('width',blw);
			$banner.sly('reload');
		});
	}());
</script>

<div class="foot" margin-bottom:50px;>
	<div class="fl"></div>
	<div class="fr">
		 <p><?php doc_article('26',0,0,0,0,0,true,true,'id',0)?></p>
	</div>
</div>
<div class="fixed">
	<ul>
		<li class="dh"><a href="tel:<?php echo SITETELEPHONE; ?>">电话</a></li>
		<li class="dt"><a href="http://f.amap.com/04EMLT" target="_blank">地图</a></li>
		<li class="qq"><a href="mqq://im/chat?chat_type=wpa&uin=<?php echo QQ; ?>&version=1&src_type=wap" target="_blank">QQ</a></li>
		<li class="zx"><a href="?p=6" target="_blank">咨询</a></li>
	</ul>
</div>
<script type="text/javascript">
	(function () {
		var $menu = $('.menu-list')
		$menu.sly({horizontal:1,itemNav:'basic',mouseDragging:1,touchDragging:1,releaseSwing:1,speed:300,dragHandle:1,dynamicHandle:1,clickBar:1,prevPage:$menu.parent().find('.prev'),nextPage:$menu.parent().find('.next')});
		$(window).bind('load resize',function(){
			if($(window).width()<460){
				var mlw = parseInt($menu.outerWidth()/4)
			} else if($(window).width()<640){
				var mlw = parseInt($menu.outerWidth()/5)
			} else if($(window).width()<860){
				var mlw = parseInt($menu.outerWidth()/6)
			} else {
				var mlw = parseInt($menu.outerWidth()/7)
			}
			$menu.find('li a').css('width',mlw);
			$menu.sly('reload');
		});
	}());
</script>
</body>
</html>