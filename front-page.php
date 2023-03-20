<?php get_header(); ?>

<section class="about-mf main-container">
	<div id="main" class="container">
		<div class="col-12 news-container">
			<?php
				inquire_build_section('News', 4);
				inquire_build_section('Opinion', 4);
				inquire_build_section('Feature', 4);
				inquire_build_section('Lifestyle', 4);
				inquire_build_section('Culture', 4);
				inquire_build_section('Entertainment', 4);
				inquire_build_section_sbs('Sport', 'Satire', 2);
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>