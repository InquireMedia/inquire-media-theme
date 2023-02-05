<?php get_header(); ?>

<header class="page-title theme-bg-light text-center py-5">
<h1 class="heading"><?php the_title(); ?></h1>
</header>
<article class="content px-3 py-5 p-md-5">

		<?php
		if ( have_posts() ) {
			while(have_posts())
			{
				the_post();
                
                get_template_part('template-parts/content', 'page');

			}
		}
		?>
	    </article>
	    
<?php get_footer(); ?>