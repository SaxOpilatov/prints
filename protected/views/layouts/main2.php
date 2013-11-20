<!DOCTYPE html> 
<html>
<head> 

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<meta charset="UTF-8">
<title>Prints</title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/tpl/style.css">
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/js/design.js"></script>
<script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/js/jquery.flexslider-min.js"></script>
</head>

<body>

<section id="wrap">

<header id="top" class="clearfix">
<div class="wrap">
	<a href="#" class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/logo.png" width="149" height="81" alt="#"></a>
	
	<div class="right_side">
	
	<div class="top_side">
	
	<nav class="var_links_ico">
		<ul>
			<li><a href="#" class="icon-search">Поиск</a></li>
			<li><a href="#" class="icon-cart">Корзина</a></li>
		</ul>
	</nav>
	
	<nav class="var_links">
		<ul>
			<li><a href="#">Вход</a></li>
			<li><a href="#">Регистрация</a></li>
			<li><a href="#">Помощь</a></li>
		</ul>
	</nav>
	
	</div><!--.top_side-->
	
	<nav id="top_menu">
		<ul>
			<li><a href="#">Наклейки на iPhone & iPad</a></li>
			<li><a href="#">Чехлы для iPhone & iPad</a></li>
			<li><a href="#">Холсты</a></li>
			<li><a href="#">наклейки для МеБели IKEA</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="#">TOUR</a></li>
		</ul>
	</nav>
	
	
	</div>
</div>
</header>

<section id="top_slider">
	<ul class="slides">
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/slide_1.jpg" alt="#"></li>
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/slide_2.jpg" alt="#"></li>
		<li><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/slide_3.jpg" alt="#"></li>
	</ul>
</section>

<section id="content">
    <?php echo $content; ?>
	<div class="holder"></div>
</section><!--#wrap-->

<footer id="bottom">
<div class="wrap">
	
	<a href="#" class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/logo_min.jpg" alt="#"></a>

	<nav class="various_links">
		<ul>
			<li><a href="#">STANDART PROJECT</a></li>
			<li><a href="#">STANDART DISTRIBUTION</a></li>
			<li><a href="#">PROJECT</a></li>
			<li><a href="#">PROJECT</a></li>
			<li><a href="#">PROJECT</a></li>
			<li><a href="#">PROJECT</a></li>
			<li><a href="#">PROJECT</a></li>
		</ul>
	</nav>

	<nav class="social">
		<ul>
			<li class="twi"><a href="#"></a></li>
			<li class="fb"><a href="#"></a></li>
			<li class="vk"><a href="#"></a></li>
		</ul>
	</nav>
	
</div>
</footer>

</body>
</html>