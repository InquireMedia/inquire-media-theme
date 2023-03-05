<?php get_header(); ?>

<section class="about-mf main-container">
	<div id="main" class="container">
		<div class="col-12 news-container">
			<div class="col-12">
				<div id="main-placeholder" class="row mainOpinion">
					<?php
						inquire_build_section('news', 4);
						inquire_build_section('opinion', 4);
						inquire_build_section('feature', 4);
						inquire_build_section('lifestyle', 4);
						inquire_build_section('culture', 4);
						inquire_build_section('entertainment', 4);
						inquire_build_section('sports', 2);
						inquire_build_section('satire', 2);
					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>