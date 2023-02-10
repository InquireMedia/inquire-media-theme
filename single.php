<?php get_header(); ?>

<header class="page-title theme-bg-light text-center py-5">
<h1 class="page-title"><?php the_title(); ?> By <?php echo get_the_author_meta('user_login', $post->post_author); ?></h1>
<h2 class="Date"><?php echo get_the_date('F j, Y'); ?></h3>
</header>
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
	    
<?php get_footer(); ?>