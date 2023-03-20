<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head(); ?>

</head>

<body>
    <nav class="navbar navbar-b navbar-expand-md fixed-top navbar-reduce">
        <div class="container">
			<!-- Site Title -->
            <a class="navbar-brand" href=<?php echo home_url(); ?>>
                <?php echo get_bloginfo('name'); ?>
            </a>
			
			<!-- Phone Options -->
			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

			<!-- Navigation -->
            <div class="navbar-collapse collapse justify-content-end">
				<!-- wp_nav_menu() with item wrap '<ul class="navbar-nav">%3$s</ul>' and a wraped class="nav-link js-scroll active" -->
				
                <ul class="navbar-nav">
				    <?php
				        wp_nav_menu(
				            array(
				                'menu' => 'primary',
				                'container' => '',
				                'theme_location' => 'primary',
				                'items_wrap' => '%3$s',
				                'walker' => new Custom_Nav_Walker(),
				            )
				        );
				    ?>
					<!-- bodge to add dropdown of categories -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Sections
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php
								$categories = get_categories();
								foreach($categories as $category){
									echo '<a class="dropdown-item" href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
								}
							?>
						</div>
				</ul>
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </div>
    </nav>