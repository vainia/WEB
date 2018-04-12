<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>Стихи А.С.Пушкина</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/fav.png" type="image/png">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47711575 = new Ya.Metrika({
                    id:47711575,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47711575" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<body>

<div class="wrapper">

	<header class="header">
		<section class="hero">
			<div class="caption">
				<h3><a href="." style="text-decoration: none; color: white;">PUSHKIN</a></h3>
				<h4>
					<span class="rsep"></span>
					биография и творчество поэта
					<span class="lsep"></span>
				</h4>
			</div>
		</section>
		<nav class="top-menu">
		<ul class="menu-main">
		  <li><a href="" class="current">Список стихов</a></li>
		  <li><a href="biography">Биография</a></li>
		  <li><a href="bibliography">Библиография</a></li>
		  <li><a href="duels">Дуэли</a></li>
	   </ul>
		</nav>
	</header><!-- .header-->

	<div class="middle">
		<div class="container">

			<aside class="left-sidebar">
				<iframe data-aa='839235' src='//ad.a-ads.com/839235?size=250x250' scrolling='no' style='width:250px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
			</aside><!-- .left-sidebar -->

			<main class="content">

				<div class="upper-ads">
					<iframe data-aa='839201' src='//ad.a-ads.com/839201?size=728x90' scrolling='no' style='width:728px; height:90px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
				</div><!-- .upper-ads -->
				<div class="widget" style="padding-left: 0px; padding-right: 0px; margin-left: 0px; margin-right: 0px;">
				  <h3 class="widget-title" style="font-size: 26px; padding-top: 2px;">Стихи</h3>
				  <ul class="widget-list">
						<?php
							include("base/connect.php");
							connectDB();
							$articles = $mysqli->query("SELECT * FROM `verses`");
							$articles = resultToArray($articles);
							closeDB();
                     $format = '<li><a href="verse?id=%d">%s</a></li>';
							foreach ($articles as $key => $value) {
								$id = $value['id'];
								$versname = $value['title'];
								echo sprintf($format, $id, $versname);
							}
							// foreach ($articles as $key => $value)
							// 	echo '<li><a href="verse?id='.$value['id'].'">'.$value['title'].'</a></li>';
						?>
				  </ul>
				</div>
				<div class="under-ads">
					<iframe data-aa='839201' src='//ad.a-ads.com/839201?size=728x90' scrolling='no' style='width:728px; height:90px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
				</div><!-- .under-ads -->

			</main><!-- .content -->
		</div><!-- .container-->

		<aside class="right-sidebar">
			<iframe data-aa='839235' src='//ad.a-ads.com/839235?size=250x250' scrolling='no' style='width:250px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true'></iframe>
		</aside><!-- .right-sidebar -->

	</div><!-- .middle-->

</div><!-- .wrapper -->

<script type="text/javascript">
	var fixmeTop = $('.left-sidebar').offset().top;
	$(window).scroll(function() {
		 var currentScroll = $(window).scrollTop();
		 if (currentScroll >= fixmeTop) {
			  $('.left-sidebar').css({
					position: 'fixed',
					top: '0',
					left: '0'
			  });
		 } else {
			  $('.left-sidebar').css({
					position: 'static'
			  });
		 }
	});
</script>

<script type="text/javascript">
	var fixmeTopR = $('.right-sidebar').offset().top;
	$(window).scroll(function() {
		 var currentScrollR = $(window).scrollTop();
		 if (currentScrollR >= fixmeTopR) {
			  $('.right-sidebar').css({
					position: 'fixed',
					top: '0'
			  });
		 } else {
			  $('.right-sidebar').css({
					position: 'static'
			  });
		 }
	});
</script>

<footer class="footer">
	<nav class="top-menu">
		<ul class="menu-main">
		  <li class="quote">
			  "Истинный вкус состоит не в безотчетном отвержении такого-то слова, такого-то оборота, но в чувстве соразмерности и сообразности"
		  </li>
		</ul>
	</nav>
	<font style="font-size:11px">Стихи А.С.Пушкина © 2018</font>
	<!-- Yandex.Metrika informer -->
	<a href="https://metrika.yandex.ru/stat/?id=47711575&amp;from=informer"
	target="_blank" rel="nofollow"
	style="float: right; margin-bottom: 0px; margin-top: 0px; padding-top: 0px; padding-bottom: 0px;">
	<img src="https://informer.yandex.ru/informer/47711575/3_0_FFFFCCFF_FFFFCCFF_0_pageviews"
	style="width:88px; height:31px; border:0;" alt="Статистика"
	title="Данные за сегодня (просмотры, визиты и уникальные посетители)"
	class="ym-advanced-informer" data-cid="47711575" data-lang="ru" />
	</a>
	<!-- /Yandex.Metrika informer -->
</footer><!-- .footer -->

</body>
</html>
