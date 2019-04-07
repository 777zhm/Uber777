<?php /* Template Name: Mainpage ukr */ ?>
<?php get_header(); ?>

<section class="heroscreen" style="background-image: url(<?php assets_url('img/heroscreen_bg.jpg') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">

			</div>
			<div class="col-sm-5">
				<form class="contact_form">
					<div class="form_header">
						<h4>Подключиться к Uber</h4>
					</div>
					
					<input type="text" class="form-control" placeholder="ФИО" name="useredrpou" required>
					<input type="tel" class="form-control" placeholder="Телефон" name="usertelephone" required>
					<input type="email" class="form-control" placeholder="E-mail" name="useremail" required>
					<label for="driverlicense">Права
						<input type="file" id="driverlicense" name="driverlicense" accept="image/png, image/jpeg">
					</label>
					<label for="techpassport">Техпаспорт
						<input type="file" id="techpassport" name="techpassport" accept="image/png, image/jpeg">
					</label>
					<label for="insurance">Страховка
						<input type="file" id="insurance" name="insurance" accept="image/png, image/jpeg">
					</label>
					<div class="form_footer">
						<button type="submit" class="btn_filled">Отправить заявку</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section_heading">Про Uber-Partners</h2>
			</div>
			<div class="col-sm-3">
				<h3 class="block_heading">4 городa</h3>
				<p>Наши офисы представлены в Киеве, Харькове, Львове и Одессе</p>
			</div>
			<div class="col-sm-3">
				<h3 class="block_heading">100 водителей</h3>
				<p>Более 100 водителей выбрали нас</p>
			</div>
			<div class="col-sm-3">
				<h3 class="block_heading">500 000 км</h3>
				<p>500 тыс км совокупно проехали наши водители за 2018 год </p>
			</div>
			<div class="col-sm-3">
				<h3 class="block_heading">22 000 грн</h3>
				<p>Средний доход активного водителя Uber-Partners</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="advantages_item">
				<p>Официальный партнер Uber в Украине</p>
			</div>
			<div class="advantages_item">
				<p>Оптимальные ставки комиссии</p>
			</div>
			<div class="advantages_item">
				<p>Удобный вывод заработка</p>
			</div>
			<div class="advantages_item">
				<p>Ускоренная регистрация</p>
			</div>
			<div class="advantages_item">
				<p>Своевременные выплаты</p>
			</div>
			<div class="advantages_item">
				<p>Обучение и консультации</p>
			</div>
		</div>
	</div>
</section>
<section class="joinus">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section_heading">Присоединяйтесь к команде Uber-Partners</h2>
			</div>
			<div class="col-sm-4">
				<img src="<?php assets_url('img/join_1.jpg') ?>" class="img img-fluid" alt="join_1">
				<h3 class="block_heading">На своем авто в Uber</h3>
				<p>Станьте водителем Uber на своем авто. Зарабатывайте в режиме полной занятости или в свободное время с функцией “по маршруту”.</p>
				<div class="btn_block text-center">
					<button class="btn_base">Зарегистрироваться</button>
				</div>
			</div>
			<div class="col-sm-4">
				<img src="<?php assets_url('img/join_2.jpg') ?>" class="img img-fluid" alt="join_2">
				<h3 class="block_heading">На авто компании в Uber</h3>
				<p>Станьте водителем Uber на авто компании. Работайте на новых и исправных авто в категориях UberX, UberSelect, UberBlack. <br><br></p>
				<div class="btn_block text-center">
					<button class="btn_base">Зарегистрироваться</button>
				</div>
			</div>
			<div class="col-sm-4">
				<img src="<?php assets_url('img/join_3.jpg') ?>" class="img img-fluid" alt="join_3">
				<h3 class="block_heading">Курьер в UberEats</h3>
				<p>Станьте курьером в сервисе UberEats. Доставляй еду на своем авто, велосипеде или скутере. Вам не нужны права и опыт работы.</p>
				<div class="btn_block text-center">
					<button class="btn_base">Зарегистрироваться</button>
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
					<button class="btn_base">Сменить партнера Uber</button>	
				</div>
			</div>
		</div>
	</div>
</section>
<section class="avtopark">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?php assets_url('img/avtopark.jpg') ?>" class="img img-fluid" alt="avtopark">
			</div>
			<div class="col-sm-6">
				<h2 class="section_heading">Запусти свой автопарк в Uber</h2>
				<p>Получать прибыль имея собственный автопарк в Uber -  легко!
Ваш стабильный доход от $500 в месяц с авто. Мы создали проверенную бизнес-модель и подготовили пошаговую инструкцию по запуску парка в Uber. Помогаем с подбором водителей, предоставляем ПО для управления автопарком, подключаем к Программе Лояльности Uber-Parnters и сопровождаем Аккаунт менеджером. Узнайте подробнее!</p>
				<div class="btn_block text-center">
					<button class="btn_base">Узнать больше</button>	
				</div>
			</div>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>