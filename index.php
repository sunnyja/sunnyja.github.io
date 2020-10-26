<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<title>Jaguar-rolf</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js"></script>
</head>

<body>
	<header>
		<div class="header">
			<a href="index.html" title="Главная"><img class="logo" src="image/jag-Logo.png" alt="logo"></a>
			<a class="tel" href="tel:+78122106471">+7 812 210 64 71</a>
			<ul class="links">
				<li><a class="link1" href="#">заказать звонок</a><span class="ico_lnk1"></span></li>
				<li><a class="link2" href="#">сервис</a><span class="ico_lnk2"></span></li>
			</ul>
		</div>
	</header>
	<section class="ban">
		<?php $date = date("d.m");
		if ($date == '13.12') {
			$date_new = '16 декабря';
		}
		?>
		<div class="ban_dark">
			<div class="ban_text">
				<p class="ban_text_1 font_1">ТОЛЬКО ДО <?= $date_new ?>. <br>
					В РОЛЬФ НА ОКТЯБРЬСКОЙ НАБЕРЕЖНОЙ!</p>
				<p class="ban_text_1 font_2">Особые привилегии на Jaguar по уникальной программе!</p>
				<ul class="ban_text_3">
					<li class="ban_text_1 ban_text_2 font_3">- Сервисный пакет: 5 лет или 120 000 км обслуживания с выгодой до
						50%</li>
					<li class="ban_text_1 ban_text_2 font_3">- Автомобили в наличии с ПТС!</li>
				</ul>
				<button class="benefit_btn" href="#">получить спецпредложение</button>
			</div>
		</div>
		<div class="down_btn">
			<div class="down_btn_1"></div>
			<div class="down_btn_2"></div>
			<div class="down_btn_3"></div>
			<a href="#down">
				<div class="down_btn_4">
					<div class="down_btn_5">
						<svg class="down_svg" width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22 2.78334L19.4333 0.216675L11 8.65001L2.56667 0.216674L1.79516e-06 2.78334L11 13.7833L22 2.78334Z" fill="white"/>
						</svg>
					</div>
				</div>
				<div class="down_btn_6"><span>вниз</span></div>
			</a>
		</div>
	</section>
	<nav class="nav_menu_auto">
		<a id="down">
			<ul class="nav_menu">
				<li><a href="#xe">jaguar xe</a></li>
				<li><a href="#xf">jaguar xf</a></li>
				<li><a href="#xj">jaguar xj</a></li>
				<li><a href="#ftype">jaguar f-type</a></li>
				<li><a href="#fpace">jaguar f-pace</a></li>
				<li><a href="#epace">jaguar e-pace</a></li>
				<li><a href="#ipace">jaguar i-pace</a></li>
			</ul>
		</a>
	</nav>
	<section class="content_auto">
		<div class="xe auto_ban">
			<a id="xe">
			<div class="auto_info">
			</a>
				<h3 class="auto_name">xe</h3>
				<ul class="auto_benefits">
					<li>Кредит по ставке 4% годовых<sup>1</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>	
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="xf auto_ban">
			<a id="xf">
			<div class="auto_info">
			</a>
				<h3 class="auto_name">xf</h3>
				<ul class="auto_benefits ben_sm">
					<li>Преимущество до <span class="rub">100 000 </span><sup>2</sup></li>
					<li>В кредит по ставке 4% годовых<sup>3</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="xj auto_ban">
			<a id="xj">
			<div class="auto_info">
			</a>
			<h3 class="auto_name">xj</h3>
				<ul class="auto_benefits">
					<li>5 а/м по специальной цене.<sup>4</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="ftype auto_ban">
			<a id="ftype">
			<div class="auto_info">
			</a>
			<h3 class="auto_name">f-type</h3>
				<ul class="auto_benefits">
					<li>5 а/м по специальной цене.<sup>5</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="fpace auto_ban">
			<a id="fpace">
			<div class="auto_info">
			</a>
			<h3 class="auto_name">f-pace</h3>
				<ul class="auto_benefits ben_sm">
					<li>Преимущество до 517 000 рублей<sup>6</sup></li>
					<li>В кредит по ставке 4% годовых<sup>7</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="epace auto_ban">
			<a id="epace">
			<div class="auto_info">
			</a>
			<h3 class="auto_name">e-pace</h3>
				<ul class="auto_benefits ben_sm">
					<li>Цена от 2 595 000 рублей<sup>8</sup></li>
					<li>В кредит по ставке 4% годовых<sup>9</sup></li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
					<li>Сервисный пакет 79 000 рублей<sup>10</sup></li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps caps_sm">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
		<div class="ipace auto_ban">
			<a id="ipace">
			<div class="auto_info">
			</a>
			<h3 class="auto_name">i-pace</h3>
				<ul class="auto_benefits ben_sm">
					<li>Полностью электрический кроссовер</li>
					<li>Пройдите тест-драйв </li>
					<li>Финальные условия на ограниченный список автомобилей!</li>
					<li>Увеличенный бонус за Trade-In</li>
				</ul>
				<button class="benefit_auto_btn">получить спецпредложение</button>
				<button class="autos_btn">а/м в наличии
					<svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2.31665 0L0.683319 1.63333L6.04998 7L0.683319 12.3667L2.31665 14L9.31665 7L2.31665 0Z" fill="white"/>
					</svg>
				</button>
			</div>
			<ul class="auto_caps">
				<li><a href="#">пройти тест-драйв</a></li>
				<li><a href="#">обмен по трейд-ин</a></li>
				<li><a href="#">рассчитать кредит</a></li>
			</ul>
		</div>
	</section>
	<div class="heading">
		<h2>погрузитесь в атмосферу роскоши</h2>
	</div>
	<div class="video">
		<img class="video_img" src="image/video.jpg" alt="video_img">
	</div>
	<div class="heading">
		<h2>Персональные предложения на приобретение jaguar</h2>
	</div>
	<section class="content_buy">
		<form class="form_buy" action="#" method="POST">
			<p class="buy_model">модель</p>
			<select name="model" class="sel_buy">
				<option name="all_mod">Все</option>
				<option name="xe" value="xe">Jaguar XE</option>
				<option name="xf" value="xf">Jaguar XF</option>
				<option name="xj" value="xj">Jaguar XJ</option>
				<option name="ftype" value="ftype">Jaguar F-Type</option>
				<option name="fpace" value="fpace">Jaguar F-Pace</option>
				<option name="epace" value="epace">Jaguar E-Pace</option>
				<option name="ipace" value="ipace">Jaguar I-Pace</option>
			</select>
			<p class="buy_year">год выпуска</p>
			<select name="year" class="sel_buy">
				<option name="all_year">Все</option>
				<option name="2019" value="2019">2019</option>
			</select>
			<p class="buy_fuel">тип топлива</p>
			<select name="fuel" class="sel_buy">
				<option name="all">Все</option>
				<option name="ben" value="ben">Бензин</option>
				<option name="diz" value="diz">Дизель</option>
			</select>
		</form>
	</section>
	<script src="js/scroll.js"></script>
</body>
</html>