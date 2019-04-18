<section>
	<div class="calltoaction_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h3 class="block_heading"><?php the_field('section_heading');?></h3>
					<div class="btn_block text-center">
						<button class="btn_base" type="button" data-toggle="modal" data-target="#changePartnerModal"><?php the_field('button_text');?></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Modal Form RUS -->

<div class="modal fade" id="changePartnerModal" tabindex="-1" role="dialog" aria-labelledby="changePartnerModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?php the_field('form_title');?></h4>
			</div>
			<div class="modal-body">
				<?php if (get_locale() == 'uk'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="196" title="form_change_partner_ukr"]' ); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php echo do_shortcode( '[contact-form-7 id="83" title="form_change_partner_rus"]' ); ?>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- End Modal Form RUS -->