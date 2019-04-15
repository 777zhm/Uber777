</main>

<footer class="footer">
	<div class="container">
		<div class="row contacts_row">
			<div class="col-lg-4 col-md-6 contacts_address">
				<?php 

				$link = get_field('admin_address_link', 'theme_settings');

				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
				<span><a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></span>
				<?php endif; ?>
	
			</div>
			<div class="col-lg-4 col-md-6 contacts_email">
				<span><?php the_field('admin_email', 'theme_settings'); ?></span>
			</div>
			<div class="col-lg-2 col-md-12  contacts_telephone">
				<span><a href="tel:<?php the_field('admin_tel_1', 'theme_settings'); ?>"><?php the_field('admin_tel_1', 'theme_settings'); ?></a></span>
			</div>
			<div class="col-lg-2 col-md-12  contacts_telephone">
				<span><a href="tel:<?php the_field('admin_tel_2', 'theme_settings'); ?>"><?php the_field('admin_tel_2', 'theme_settings'); ?></a></span>
			</div>
		</div>
		<div class="row copyright_row">
			<div class="col-12 text-center">
				<p class="copyright_p">Developed by <a href="https://zhmurko.com.ua" target="_blank">Zhmurko.com.ua</a></p>
			</div>
		</div>
	</div>
</footer>

<!-- Start Modal Form RUS -->
<div class="modal fade" id="driverModalRus" tabindex="-1" role="dialog" aria-labelledby="driverModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">		
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Заявка Uber Driver</h4>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="88" title="form_driver"]' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="companyAvtoModalRus" tabindex="-1" role="dialog" aria-labelledby="companyAvtoModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Заявка на авто компании</h4>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="87" title="form_company_avto"]' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="eatsModalRus" tabindex="-1" role="dialog" aria-labelledby="eatsModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Заяка UberEats</h4>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="86" title="form_eats"]' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="changePartnerModalRus" tabindex="-1" role="dialog" aria-labelledby="changePartnerModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Заяка смена партнера</h4>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="83" title="form_change_partner"]' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="avtoparkModalRus" tabindex="-1" role="dialog" aria-labelledby="avtoparkModalRus" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Заяка для Автопарка</h4>
			</div>
			<div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="85" title="form_avtopark"]' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Form RUS -->


<?php wp_footer(); ?>
</body>
</html>