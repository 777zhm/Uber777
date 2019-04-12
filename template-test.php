<?php /* Template Name: Test ukr */ ?>
<?php get_header(); ?>

<section class="heroscreen" style="background-image: url(<?php assets_url('img/heroscreen_bg.jpg') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="h1_box">
					<h1>TEST PAGE</h1>
				</div>
			</div>
			<div class="col-md-6">
				<form class="contact_form_hero" action="form_hero_send.php" method="post">
					<div class="form_header">
						<h4>Подключиться к Uber</h4>
					</div>
					<div class="form_body">
						<input type="text" class="form-control" placeholder="ФИО" id="username" name="username" required>
						<input type="tel" class="form-control" placeholder="Телефон" id="usertel" name="usertel" required>
						<input type="email" class="form-control" placeholder="E-mail" id="useremail" name="useremail" required>
						<label for="driverlicense">Права
							<img src="<?php assets_url('img/upload.png') ?>" />
							<input type="file" id="driverlicense"  name="driverlicense" />
						</label>
						
						<label for="techpassport">Техпаспорт
							<img src="<?php assets_url('img/upload.png') ?>" />
							<input type="file" id="techpassport"  name="techpassport" />
						</label>
						
						<label for="insurance">Страховка
							<img src="<?php assets_url('img/upload.png') ?>" />
							<input type="file" id="insurance"  name="insurance" />
						</label>				

					</div>
						<button type="submit" class="form_footer btn_filled">Отправить заявку</button>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="joinus">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2 class="section_heading">Присоединяйтесь к команде Uber-Partners</h2>
			</div>
			<div class="col-md-4 col-sm-6 joinus_item">
				<img src="<?php assets_url('img/join_1.jpg') ?>" class="img img-fluid" alt="join_1">
				<h3 class="block_heading">На своем авто в Uber</h3>
				<p>Станьте водителем Uber на своем авто. Зарабатывайте в режиме полной занятости или в свободное время с функцией “по маршруту”.</p>
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
			<div class="col-md-4 col-sm-6 joinus_item">
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


<!-- Start TEST -->
<section class="calltoaction">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="block_heading">Уже есть аккаунт Uber, но хотите сменить партнера? Оставьте заявку с помощью этой кнопки.</h3>
				<div class="btn_block text-center">
					<button class="btn_base" type="button" data-toggle="modal" data-target="#changePartnerModalUkr">Сменить партнера Uber</button>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END TEST -->

<section class="avtopark">
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