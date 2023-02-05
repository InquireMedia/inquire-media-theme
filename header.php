<!DOCTYPE html>
<html lang="en"> 
<head>

	<?php wp_head(); ?>

</head> 

<body>
    <header class="header d-flex align-items-center">    
		<?php
			if(function_exists('the_custom_logo')){ 
				$custom_log_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_log_id);
			}
		?>
		<img class="mb-3 mx-4 logo" src="<?php echo $logo[0]?>" alt="logo" >
	    <a class="site-title" href="index.html">		
			<?php echo get_bloginfo('name'); ?>
		</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark d-flex align-items-center" >
			<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		

			<div id="navigation" class="collapse navbar-collapse flex-column">
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>' //  d-flex align-items-center
						)
					);
				?>
				<?php
					dynamic_sidebar('sidebar-1');
				?>
			</div>
		</nav>
	</header>

	<div class="main-wrapper">
		
</header>
