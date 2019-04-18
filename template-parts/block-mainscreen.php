<section>
	<div class="heroscreen_section" style="background-image: url(<?php assets_url('img/heroscreen_bg.jpg') ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="h1_box">
						<h1><?php the_field('section_heading');?></h1>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form_content">
						<div class="form_header">
							<h4 class="form_title"><?php the_field('form_title');?></h4>
						</div>
						<div class="form_body">
							<?php if (get_locale() == 'uk'){ ?>
								<?php echo do_shortcode( '[contact-form-7 id="198" title="form_driver_ukr"]' ); ?>
							<?php }elseif (get_locale() == 'ru_RU'){ ?>
								<?php echo do_shortcode( '[contact-form-7 id="88" title="form_driver_rus"]' ); ?>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>