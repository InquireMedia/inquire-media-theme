<?php get_header(); ?>

<section class="about-mf main-container">
	<div id="main" class="container">
		<div class="col-12 news-container">
			<div class="col-12">
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