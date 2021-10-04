<?php
session_start();
if (!isset($_SESSION["theme"]))
{
	$_SESSION["theme"] = "main";
}
?>
<HTML>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
	</head>
	<body>
	<header> <!--- шапка сайта --->
	<div class="logo"> <!--- лого --->
		<a href="index.php"><img src ="img/logo2.png" class="logo-img"></a>
	</div>

	<div class="filter"> <!--- фильтр по сайту  --->
	<ul>
 <li><a href="index.php">Главная</a></li>
 <li><a href="gyro.html">Гироскутеры</a></li>
 <li><a href="seegway.html">Сигвеи</a></li>
 <li><a href="samokat.html">Электросамокаты</a></li>
 <li><a href="#kons">Консультанты</a></li>
 <li><a href="#">О компании</a></li>
	</ul>
</div>
	<div class ="theme-button" id="theme-button">Сменить тему</div>
	<div class="call">
		<a href="tel:+7 351 111 22 33"><img src="img/call.png" alt="Звонок" class="zvonok"></a>
		<p class="logo-title">+7 351 111 22 33</p>
	</div>
	</header>
	<main class="main">
		<article class="main_content">
			<p><!--- lorem120 --></p>
		</article>
	</main>
	<div class="wrapper">
	<div class="content">
	<div class="bonus">О нас:</div>
	<div class="text"> Мы являемся онлайн-магазином смарт-техники по Санкт-Петербургу, на нашем сайте вы можете найти современные средства передвижения такие как: электросамокаты, гироскутеры, сигвеи на ваш вкус.  </div>
	</div>
	</div>
	<!-- блок слайдера -->
  <div class="carousel-wrapper">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
		<span id="item-4"></span>
    <!-- 1й элемент слайдера -->
		<div class="bonus"> <!--- заголовок --->
			<p>Преимущества нашей компании: </p>
		</div>
    <div class="carousel-item item-1">
      <p>Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</p>
      <a class="arrow arrow-prev" href="#item-4"></a>
      <a class="arrow arrow-next" href="#item-2"></a>
    </div>
    <!-- 2й элемент слайдера -->
    <div class="carousel-item item-2">
      <p>Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</p>
      <a class="arrow arrow-prev" href="#item-1"></a>
      <a class="arrow arrow-next" href="#item-3"></a>
    </div>
    <!-- 3й элемент слайдера -->
    <div class="carousel-item item-3">
      <p>Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</p>
      <a class="arrow arrow-prev" href="#item-2"></a>
      <a class="arrow arrow-next" href="#item-4"></a>
    </div>
		<div class="carousel-item item-4">
			<p>Гарантия действует в течении 3 лет!</p>
			<a class="arrow arrow-prev" href="#item-3"></a>
			<a class="arrow arrow-next" href="#item-1"></a>
		</div>
  </div>
<div class="wrapper">
	<div class="content"> <!--- блок сайта, содержащий всю информацию --->
		<div class="bonus">
			<p> Особенности гироскутеров, электросамокатов и сигвеев: </p>
		</div>
		<div class="part"> <!--- особенности товаров --->
			<img class="img" src="img/elsam.png" alt="Электросамокат">
				<div class="po">
					<h1 class="zag">Электросамокат</h1>
					<p class="text">Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками</p>
			</div>
		</div>
		<div class="part">
			<img class="img" src="img/tov1.png" alt="Гироскутер">
				<div class="po">
					<h1 class="zag">Гироскутер</h1>
					<p class="text">Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.
Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.
Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.</p>
			</div>
		</div>
		<div class="part">
			<img class="img" src="img/tov4.png" alt="Сигвей">
				<div class="po">
					<h1 class="zag">Сигвей</h1>
					<p class="text">Сигвей - средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов.</p>
			</div>
		</div>
				<div class="bonus">
					<p><a name="kons"> Наши консультанты: </a></p> <!--- блок с консультантами  --->
				</div>
				<div class="textr">
					<div class="textritem">
<p><li>Иванов Иван Иванович - квалифицированный специалист сервисного центра My Gyro.</li></p>
<img class="rab" src="img/ivan.png" alt="ivan">
</div>
<div class="textritem">
<p><li>Пупкин Василий Васильевич – старший консультант My Gyro. </li></p>
<img class="rab" src="img/vasya.png" alt="vasya">
</div>
<div class="textritem">
<p><li>Захаров Андрей Борисович – менеджер-консультант My Gyro.</li></p>
<img class="rab" src="img/andrey.png" alt="andrey">
</div>
</div>
</div>
</div>
<div class="footzag">Наши бренды:</div>
<div class="footer">
	<div class="footer-img">
		<img src="img/xiaomi.png"> </div>
		<div class="footer-img">
		<img src="img/smart.png"> </div>
		<div class="footer-img">
		<img src="img/wistmart.png"> </div>
		<div class="footer-img">
		<img src="img/razor.png"> </div>
		</div>
	<div class="wrapper">
	<div class="content">
<div class="text">
<div class="text1"> <!--- блок с информацией о работе --->
	<p><li>Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</p></li>
	<img class="rabota" src="img/personal.jpg" alt="personal"></div>
</div>
<div class="bonus">
	<p><a name="company"> О компании </a></p>
</div>
<div class="text1"> <!--- блок с информацией о кмпании --->
<p><li>Наш магазин работает с 2016 года. Мы представлены в таких городах как Санкт-Петербург, Москва и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.</p></li>
<p><li>Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</p></li>
<p>Вы можете подписаться на нашу email рассылку по кнопке ниже:</p>
<p><strong>Ваше имя</strong></p> <!--- строки для заполнения --->
<p><input maxlength="25" size="40" value=""></p>
<p><strong>Ваш адрес эл. почты</strong></p>
<p><input maxlength="40" size="40" value=""></p>
</div>
</div>
<div class="sub"> <!--- кнопка подписки --->
	<a href=""><img class="subscribe" src="img/subscribe.png" alt="подписка"></a>
</div>
	</div>
			<a href="#" title="Вернуться к началу" class="topbutton">Наверх</a>
		<div class="sidebar">
		</div>
<script src="themes.js"></script>
</body>
</HTML>
