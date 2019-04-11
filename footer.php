</main>

<footer class="footer">
	<div class="container">
		<div class="row contacts_row">
			<div class="col-lg-4 col-md-6 contacts_address">
				<span><a target="_blank" href="https://goo.gl/maps/PUx4ctJhM1k">г.Киев, ул.Княжий затон, 9а</a></span>
			</div>
			<div class="col-lg-4 col-md-6 contacts_email">
				<span>info@uber-partners.com.ua</span>
			</div>
			<div class="col-lg-2 col-md-12  contacts_telephone">
				<span><a href="tel:+380442288186">(044) 228-81-86</a></span>
			</div>
			<div class="col-lg-2 col-md-12  contacts_telephone">
				<span><a href="tel:+380688483041">(068) 848-30-41</a></span>
			</div>
		</div>
	</div>
</footer>

<!-- Start Modal Form RUS -->
<div class="modal fade form_modal" id="driverModalRus" tabindex="-1" role="dialog" aria-labelledby="driverModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form class="contact_form_modal">
				<div class="modal-header">
					<h4 class="modal-title">Заяка Uber Driver</h4>
				</div>
				<div class="modal-body form_body_modal">
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
				<button type="submit" class="modal_button_submit">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>

<div class="modal fade form_modal" id="companyAvtoModalRus" tabindex="-1" role="dialog" aria-labelledby="companyAvtoModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form class="contact_form_modal">
				<div class="modal-header">
					<h4 class="modal-title">Заяка на авто компании</h4>
				</div>
				<div class="modal-body form_body_modal">
					<input type="text" class="form-control" placeholder="ФИО" id="username" name="username" required>
					<input type="tel" class="form-control" placeholder="Телефон" id="usertel" name="usertel" required>
					<input type="email" class="form-control" placeholder="E-mail" id="useremail" name="useremail" required>
					<label for="driverlicense">Права
						<img src="<?php assets_url('img/upload.png') ?>" />
						<input type="file" id="driverlicense"  name="driverlicense" />
					</label>
				</div>
				<button type="submit" class="modal_button_submit">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>

<div class="modal fade form_modal" id="eatsModalRus" tabindex="-1" role="dialog" aria-labelledby="eatsModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form class="contact_form_modal">
				<div class="modal-header">
					<h4 class="modal-title">Заяка UberEats</h4>
				</div>
				<div class="modal-body form_body_modal">
					<input type="text" class="form-control" placeholder="ФИО" id="username" name="username" required>
					<input type="tel" class="form-control" placeholder="Телефон" id="usertel" name="usertel" required>
					<input type="email" class="form-control" placeholder="E-mail" id="useremail" name="useremail" required>
				</div>
				<button type="submit" class="modal_button_submit">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>

<div class="modal fade form_modal" id="changePartnerModalRus" tabindex="-1" role="dialog" aria-labelledby="changePartnerModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form class="contact_form_modal">
				<div class="modal-header">
					<h4 class="modal-title">Заяка смена партнера</h4>
				</div>
				<div class="modal-body form_body_modal">
					<input type="text" class="form-control" placeholder="ФИО" id="username" name="username" required>
					<input type="tel" class="form-control" placeholder="Телефон" id="usertel" name="usertel" required>
					<input type="email" class="form-control" placeholder="E-mail" id="useremail" name="useremail" required>
					<input type="text" class="form-control" placeholder="Предыдущий партнер" id="oldpartner" name="oldpartner" required>
				</div>
				<button type="submit" class="modal_button_submit">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>

<div class="modal fade form_modal" id="avtoparkModalRus" tabindex="-1" role="dialog" aria-labelledby="avtoparkModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form class="contact_form_modal">
				<div class="modal-header">
					<h4 class="modal-title">Заяка для Автопарка</h4>
				</div>
				<div class="modal-body form_body_modal">
					<input type="text" class="form-control" placeholder="ФИО" id="username" name="username" required>
					<input type="tel" class="form-control" placeholder="Телефон" id="usertel" name="usertel" required>
					<input type="email" class="form-control" placeholder="E-mail" id="useremail" name="useremail" required>
					<input type="text" class="form-control" placeholder="Количество машин" id="amountcars" name="amountcars" required>
				</div>
				<button type="submit" class="modal_button_submit">Зарегистрироваться</button>
			</form>
		</div>
	</div>
</div>
<!-- End Modal Form RUS -->


<?php wp_footer(); ?>
</body>
</html>