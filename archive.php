<?php get_header(); ?>

<section class="about-mf main-container">
	<div id="main" class="container">
		<div class="col-12 news-container">
			<div class="col-12">
				<hr class="news-section-hr <?php single_cat_title(); ?>-Bar">
				<a class="news-section-bar <?php single_cat_title(); ?>" href="<?php echo get_category_link(get_cat_ID(single_cat_title('', false))); ?>">
					<p class="news-section-text-option"><?php single_cat_title(); ?> </p>
				</a>
				<div id="main-placeholder" class="row mainOpinion">
					<?php
					if ( have_posts() ) {
						while(have_posts())
						{
							the_post();
							get_template_part('template-parts/content', 'block');
						}
					}
					?>
					
				</div>
			</div>
			<?php
				the_posts_pagination();
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>