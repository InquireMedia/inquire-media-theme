<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
            <span class="date"><?php the_date(); ?></span>
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', 
                '</span>');
            ?>
            <span class="comments"><a href="#comments"><i class="fa fa-comment"></i>3 comments</a></span>
	</header>
<?php
    the_content();
?>

</div>