<?php /* Template Name: Mainpage ukr */ ?>
<?php get_header(); ?>

<section class="heroscreen" style="background-image: url(<?php assets_url('img/heroscreen_bg.jpg') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="h1_box">
					<h1>Uber-Partners - Ваш надежный партнер</h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form_content">
					<div class="form_header">
						<h4 class="form_title">Подключиться к Uber</h4>
					</div>
					<div class="form_body">
						<?php echo do_shortcode( '[contact-form-7 id="88" title="form_driver"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="aboutus">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2 class="section_heading">Про Uber-Partners</h2>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="aboutus_item">
					<div class="ribbon"><span>о нас</span></div>
					<img class="aboutus_item_icon" src="<?php assets_url('img/city.png') ?>" alt="city_icon">
					<h3 class="block_heading">4 городa</h3>
					<p>Наши офисы представлены в Киеве, Харькове, Львове и Одессе</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="aboutus_item">
					<div class="ribbon"><span>о нас</span></div>
					<img class="aboutus_item_icon" src="<?php assets_url('img/driver.png') ?>" alt="driver_icon">
					<h3 class="block_heading">100 водителей</h3>
					<p>Более 100 водителей выбрали нас</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="aboutus_item">
					<div class="ribbon"><span>о нас</span></div>
					<img class="aboutus_item_icon" src="<?php assets_url('img/waypoint.png') ?>" alt="waypoint_icon">
					<h3 class="block_heading">500 000 км</h3>
					<p>500 тыс км совокупно проехали наши водители за 2018 год </p>
				</div>
			</div>
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="aboutus_item">
					<div class="ribbon"><span>о нас</span></div>
					<img class="aboutus_item_icon" src="<?php assets_url('img/money.png') ?>" alt="money_icon">
					<h3 class="block_heading">22 000 грн</h3>
					<p>Средний доход активного водителя Uber-Partners</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center advantages_row">
			<div class="advantages_item">
				<p>Официальный партнер Uber</p>
			</div>
			<div class="advantages_item">
				<p>Оптимальные ставки комиссии</p>
			</div>
			<div class="advantages_item">
				<p>Своевременные выплаты</p>
			</div>
			<div class="advantages_item">
				<p>Удобный вывод заработка</p>
			</div>
			<div class="advantages_item">
				<p>Ускоренная регистрация</p>
			</div>
			<div class="advantages_item">
				<p>Обучение и консультации</p>
			</div>			
		</div>
	</div>
</section>
<section class="joinus" id="joinus">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2 class="section_heading">Присоединяйтесь к команде Uber-Partners</h2>
			</div>
			<div class="col-md-4 col-sm-6 joinus_item">
				<img src="<?php assets_url('img/join_1.jpg') ?>" class="img img-fluid" alt="join_1">
				<h3 class="block_heading">На своем авто в Uber</h3>
				<p>Станьте водителем Uber на своем авто. Зарабатывайте в режиме полной занятости или в свободное время.</p>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#driverModalRus">Зарегистрироваться</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 joinus_item">
				<img src="<?php assets_url('img/join_2.jpg') ?>" class="img img-fluid" alt="join_2">
				<h3 class="block_heading">На авто компании в Uber</h3>
				<p>Станьте водителем Uber на авто компании. Работайте на новых и исправных авто в категориях UberX, UberSelect, UberBlack.</p>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#companyAvtoModalRus">Зарегистрироваться</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 joinus_item" id="ubereats">
				<img src="<?php assets_url('img/join_3.jpg') ?>" class="img img-fluid" alt="join_3">
				<h3 class="block_heading">Курьер в UberEats</h3>
				<p>Станьте курьером в сервисе UberEats. Доставляй еду на своем авто, велосипеде или скутере. Вам не нужны права и опыт работы.</p>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#eatsModalRus">Зарегистрироваться</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="calltoaction">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="block_heading">Уже есть аккаунт Uber, но хотите сменить партнера? Оставьте заявку с помощью этой кнопки.</h3>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#changePartnerModalRus">Сменить партнера Uber</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="avtopark" id="avtopark">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img class="img img-fluid avtopark_img" src="<?php assets_url('img/avtopark_kia.jpg') ?>"  alt="avtopark">
			</div>
			<div class="col-sm-6">
				<h2 class="section_heading">Запусти свой автопарк в Uber</h2>
				<p>Получать прибыль имея собственный автопарк в Uber -  легко!
Ваш стабильный доход от $500 в месяц с авто. Мы создали проверенную бизнес-модель и подготовили пошаговую инструкцию по запуску парка в Uber. Помогаем с подбором водителей, предоставляем ПО для управления автопарком, подключаем к Программе Лояльности Uber-Parnters и сопровождаем Аккаунт менеджером. Узнайте подробнее!</p>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#avtoparkModalRus">Узнать больше</button>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>