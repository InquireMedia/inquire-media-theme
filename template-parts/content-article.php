<div class="container">
	<header class="content-header">
		<div class="meta mb-3">
            <?php
                the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
            ?>
	</header>
<?php
    the_content();
?>

</div>