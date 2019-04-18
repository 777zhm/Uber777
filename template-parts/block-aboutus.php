<section>
	<div class="aboutus_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12">
					<h2 class="section_heading"><?php the_field('section_heading');?></h2>
				</div>
				<?php if( have_rows('aboutus_blocks') ): ?>
				<?php while( have_rows('aboutus_blocks') ): the_row();
					$block_icon = get_sub_field('block_icon');
				?>
				<div class="col-sm-6 col-md-4 col-lg-3">
					<div class="aboutus_item">
						<div class="ribbon"><span><?php the_sub_field('block_label');?></span></div>
						<?php if($block_icon): ?>
						<img class="aboutus_item_icon" src="<?php echo $block_icon['url']; ?>" alt="<?php echo $block_icon['alt']; ?>">
						<?php endif; ?>
						<h3 class="block_heading"><?php the_sub_field('block_heading');?></h3>
						<p><?php the_sub_field('block_text');?></p>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row justify-content-center advantages_row">
				<?php if( have_rows('advantages') ): ?>
				<?php while( have_rows('advantages') ): the_row(); ?>
				<div class="advantages_item">
					<p><?php the_sub_field('advantage');?></p>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>		
			</div>
		</div>
	</div>
</section>