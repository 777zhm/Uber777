</main>

<footer class="footer">
	<div class="container">
		<div class="row contacts_row">
			<div class="col-lg-4 col-md-6 contacts_address">
				
				<?php if (get_locale() == 'uk'){ ?>
					<?php $link = get_field('admin_address_link_ukr', 'theme_settings'); ?>
				<?php }elseif (get_locale() == 'ru_RU'){ ?>
					<?php $link = get_field('admin_address_link_rus', 'theme_settings'); ?>
				<?php } ?>

				<?php if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
				?>
				<span><a class="button" href="<?php echo esc_url($link_url); ?>" target="_blank"><?php echo esc_html($link_title); ?></a></span>
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

<?php wp_footer(); ?>
</body>
</html>