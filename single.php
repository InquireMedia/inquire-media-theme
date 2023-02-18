<?php get_header(); ?>
<section>
	<div class="container">
		<div id="display" class="col-md-12">
			<div class="row article-outer">
				<div class="col-md-12 article">
					<div class="buffer"></div>
					<div class="">
						<h1 class="article-title"><?php the_title(); ?></h1>
					</div>
					<div class="">
						<p class="article-author">By <?php echo get_the_author_meta('user_login', $post->post_author); ?></p>	<!-- Author needs to be seperate feild to the uploader as they wont match! -->
						<p class="article-date"><?php echo get_the_date('F j, Y'); ?></h2>
					</div>
					<figure class="figure-article">
						<img class="article-main-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=<?php echo get_post_thumbnail_id(get_the_ID()); ?>>
						<figcaption class="photo-credit"><?php echo get_post_thumbnail_id(get_the_ID()); ?></figcaption>
					</figure>
					<article class="content px-3 py-5 p-md-5">
						<?php
							if ( have_posts() ) {
								while(have_posts())
								{
									the_post();
					    	        get_template_part('template-parts/content', 'article');
								}
							}
						?>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>