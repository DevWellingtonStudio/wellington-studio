<?php
	/** Hero images, carousel, video */

add_action('genesis_before_header', 'add_hero_video', 10);
function add_hero_video() {

	if ( !is_active_sidebar( 'home-featured' ) && is_front_page() ) {

			echo '
		<section>
		<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
			</video>
			<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
			<div class="w-100 text-white">
			<h1 class="display-3">Video Header</h1>
			<p class="lead mb-0">Text Goes Here</p>
			</div>
			</div>
			</div>
		</section>
		';
	}
}
