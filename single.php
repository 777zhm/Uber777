<?php get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<section class="post_page">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="post_heading"><?php the_title(); ?></h2>
				</div>

				<div class="col-md-6">
					<?php the_content(); ?>
				</div>
				<div class="col-md-6 post_img_box">
					<?php
						if ( has_post_thumbnail() ) {
							/* grab the url for the full size featured image */
					        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					        echo '<img src="'.$featured_img_url.'" class="img img-fluid">'; 
					} ?>
				</div>
			</div>
		</section>

	<?php endwhile; else : ?>
	<h2><?php _e( '404', 'uber-partners' ); ?></h2>
	<?php endif; ?>

</div>

<?php get_footer(); ?>