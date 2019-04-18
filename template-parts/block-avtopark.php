<section>
	<div class="avtopark_section" id="avtopark">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img class="img img-fluid avtopark_img" src="<?php assets_url('img/avtopark_kia.jpg') ?>"  alt="avtopark">
				</div>
				<div class="col-sm-6">
					<h2 class="section_heading"><?php the_field('section_heading');?></h2>
					<p><?php the_field('section_text');?></p>
					<div class="btn_block text-center">
						<button class="btn_base" type="button" data-toggle="modal" data-target="#avtoparkModal"><?php the_field('button_text');?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Modal Form RUS -->
<div class="modal fade" id="avtoparkModal" tabindex="-1" role="dialog" aria-labelledby="avtoparkModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php the_field('form_title');?></h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="195" title="form_avtopark_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="85" title="form_avtopark_rus"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- End Modal Form RUS -->