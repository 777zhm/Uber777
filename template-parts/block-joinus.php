<section>
	<div class="joinus_section" id="joinus">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12">
					<h2 class="section_heading"><?php the_field('section_heading');?></h2>
				</div>
				<div class="col-md-4 col-sm-6 joinus_item">
					<img src="<?php assets_url('img/join_1.jpg') ?>" class="img img-fluid" alt="join_1">
					<h3 class="block_heading"><?php the_field('block_heading_1');?></h3>
					<p><?php the_field('block_text_1');?></p>
					<div class="btn_block text-center">
						<button class="btn_base" type="button" data-toggle="modal" data-target="#driverModal"><?php the_field('button_text_1');?></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 joinus_item">
					<img src="<?php assets_url('img/join_2.jpg') ?>" class="img img-fluid" alt="join_2">
					<h3 class="block_heading"><?php the_field('block_heading_2');?></h3>
					<p><?php the_field('block_text_2');?></p>
					<div class="btn_block text-center">
						<button class="btn_base" type="button" data-toggle="modal" data-target="#companyAvtoModal"><?php the_field('button_text_2');?></button>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 joinus_item" id="ubereats">
					<img src="<?php assets_url('img/join_3.jpg') ?>" class="img img-fluid" alt="join_3">
					<h3 class="block_heading"><?php the_field('block_heading_3');?></h3>
					<p><?php the_field('block_text_3');?></p>
					<div class="btn_block text-center">
						<button class="btn_base" type="button" data-toggle="modal" data-target="#eatsModal"><?php the_field('button_text_3');?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Modal Forms -->
<div class="modal fade" id="driverModal" tabindex="-1" role="dialog" aria-labelledby="driverModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">		
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php the_field('form_title_1');?></h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="198" title="form_driver_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="88" title="form_driver_rus"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="companyAvtoModal" tabindex="-1" role="dialog" aria-labelledby="companyAvtoModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php the_field('form_title_2');?></h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="197" title="form_company_avto_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="87" title="form_company_avto_rus"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="eatsModal" tabindex="-1" role="dialog" aria-labelledby="eatsModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php the_field('form_title_3');?></h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="199" title="form_eats_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="86" title="form_eats_rus"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- End Modal Forms -->