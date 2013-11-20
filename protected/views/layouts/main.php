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
    <script>
    $( document ).ready(function() {
       var is_login_on = 0;
       var is_reg_on = 0;
       $("#enter_site").click(function() {
            if(is_login_on == 0) {
                var login_form = '<div class="popup_layer"><div class="popup signin"><h3>Вход</h3><div class="social_auth"><ul><li><a href="#" class="twi">Twitter</a></li><li><a href="#" class="fb">Facebook</a></li><li><a href="#" class="vk">ВКонтакте</a></li></ul></div><form><input type="text" name="#" placeholder="Эл.почта" value="maksstepenko@gm" class="inp-full inp-inverse"><input type="password" name="#" placeholder="Пароль" class="inp-full inp-inverse"><div class="ctrl"><input type="submit" value="Войти" class="btn btn-green"><a href="#" class="reset_pwd">Забыли пароль?</a></div></form></div></div>';
                $("#sax_enter_site").empty();
                $("#sax_enter_site").append(login_form);
                is_login_on = 1;
            } else {
                $("#sax_enter_site").empty();
                is_login_on = 0;
            }
       });
        $("#reg_site").click(function() {
            if(is_reg_on == 0) {
                var reg_form = '<div class="popup_layer reg"><div class="popup signin"><h3>Присоедениться</h3><div class="social_auth"><ul><li><a href="#" class="twi">Twitter</a></li><li><a href="#" class="fb">Facebook</a></li><li><a href="#" class="vk">ВКонтакте</a></li></ul></div><div class="avatar"><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/avatar_test.jpg" alt="#"><a href="#" class="upload-btn">Загрузи свой аватар</a></div><form><input type="text" name="#" placeholder="Имя" value="Макси" class="inp-min inp-inverse"><input type="text" name="#" placeholder="Фамилия" class="inp-min inp-inverse"><input type="text" name="#" placeholder="E-mail" class="inp-full inp-inverse"><input type="text" name="#" placeholder="Юзернейм" class="inp-full inp-inverse"><input type="password" name="#" placeholder="Пароль" class="inp-full inp-inverse"><input type="password" name="#" placeholder="Подтвердите пароль" class="inp-full inp-inverse"><div class="agree"><p>Нажимая кнопку «Присоедениться» вы подтверждаете что вам 18+ и вы принимаете лицензионное соглашение.</p><input type="submit" value="Присоедениться" class="btn btn-green"></div></form></div></div>';
                $("#sax_enter_site").empty();
                $("#sax_enter_site").append(reg_form);
                is_reg_on = 1;
            } else {
                $("#sax_enter_site").empty();
                is_reg_on = 0;
            }
        });
    });
    </script>
</head>

<body>

<section id="wrap">
<header id="top" class="clearfix">
<div class="wrap">
	<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/logo.png" width="149" height="81" alt="#"></a>
	
	<div class="right_side">
	
	<div class="top_side">
	
	<nav class="var_links_ico">
		<ul>
			<li><a href="#" class="icon-search">Поиск</a></li>
			<li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/cart" class="icon-cart">Корзина</a></li>
		</ul>
	</nav>
	
	<nav class="var_links">
		<ul>
			<li><a id="enter_site" href="#">Вход</a></li>
			<li><a id="reg_site" href="#">Регистрация</a></li>
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

    <?php echo $content; ?>

<footer id="bottom">
<div class="wrap">
	
	<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/tpl/images/logo_min.jpg" alt="#"></a>

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
<div id="sax_enter_site"></div>
</body>
</html>