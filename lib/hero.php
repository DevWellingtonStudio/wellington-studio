<?php
	/** Hero images, carousel, video
	 *
	 * https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4
	 */

add_action('genesis_before_header', 'add_hero_video', 10);
function add_hero_video() {

	$default  = '';
	$hero_url         = get_theme_mod('hero_url', $default);
	$hero_video_title = get_theme_mod('hero_video_title', $default);
	$hero_video_text  = get_theme_mod('hero_video_text', $default);
	$wst_slider1	    = get_theme_mod('wst_slider1', $default );
	$slider1_id       = attachment_url_to_postid($wst_slider1);
	$slider1_alt      = get_post_meta( $slider1_id, '_wp_attachment_image_alt', true );
	$slider1title	    = get_theme_mod('slider1title', $default );
	$slider1text		  = get_theme_mod('slider1text', $default );
	$wst_slider2	    = get_theme_mod('wst_slider2', $default );
	$slider2_id       = attachment_url_to_postid($wst_slider2);
	$slider2_alt      = get_post_meta( $slider2_id, '_wp_attachment_image_alt', true );
	$slider2title	    = get_theme_mod('slider2title', $default );
	$slider2text		  = get_theme_mod('slider2text', $default );
	$wst_slider3	    = get_theme_mod('wst_slider3', $default );
	$slider3_id       = attachment_url_to_postid($wst_slider3);
	$slider3_alt      = get_post_meta( $slider3_id, '_wp_attachment_image_alt', true );
	$slider3title	    = get_theme_mod('slider3title', $default );
	$slider3text		  = get_theme_mod('slider3text', $default );


	$slider1_id = attachment_url_to_postid($wst_slider1);
	$slider1_alt  = get_post_meta( $slider1_id, '_wp_attachment_image_alt', true );

	if($hero_url !== $default) {
		if ( ! is_active_sidebar( 'home-featured' ) && is_front_page() ) {

			echo '
		<section id="hero-video-section">
		<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">';
			if ( $hero_url !== $default ) {
				echo '<source src = "' . $hero_url . '" type = "video/mp4" >';
			}

			echo '
			</video>
			<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
			<div id="hero-video-text" class="w-100 text-white">
			<h1 class="display-3">'. $hero_video_title .'</h1>
			<p class="lead mb-0">'. $hero_video_text .'</p>
			</div>
			</div>
			</div>
		</section>
		';
		}
	} elseif($wst_slider1 !== $default && $hero_url == $default && ! is_active_sidebar( 'home-featured' ) && is_front_page()) {

echo '
		    <div id="hero-section">
				  <div id="wstTopSlider" class="carousel slide carousel-fade" data-ride="carousel">
				    <ol class="carousel-indicators">
				      <li data-target="#wstTopSlider" data-slide-to="0" class="active"></li>';
				        if($wst_slider2 !== $default) {
				        echo '<li data-target="#wstTopSlider" data-slide-to="1"></li>';
				       }
				      if($wst_slider3 !== $default) {
				        echo '<li data-target="#wstTopSlider" data-slide-to="2"></li>';
				       }
		echo ' </ol>
				    <div class="carousel-inner">
				      <div id="slider-one" class="carousel-item active">
				        <img src="' . $wst_slider1 . '" class="d-block w-100" alt="'. $slider1_alt .'">
				        <div class="carousel-caption d-md-block">
				          <h2 class="slider-one-title">' . $slider1title  . '</h2>
				          <p class="slider-one-text lead">' . $slider1text	 . '</p>
				        </div>
				      </div>';
						  if($wst_slider2 !== $default) {
				       echo ' <div id="slider-two" class="carousel-item">
				         <img src="' . $wst_slider2 . '" class="d-block w-100" alt="'. $slider2_alt .'">
				         <div class="carousel-caption d-md-block">
				           <h2 class="slider-two-title">' . $slider2title  . '</h2>
				           <p class="slider-two-text lead">' .  $slider2text  . '</p>
				         </div>
				       </div>';
						  }
						 if($wst_slider3 !== $default) {
				       echo ' <div id="slider-three" class="carousel-item">
				         <img src="' . $wst_slider3 . '" class="d-block w-100" alt="'. $slider3_alt .'">
				         <div class="carousel-caption d-md-block">
				           <h2 class="slider-three-title">' . $slider3title . '</h2>
				           <p class="slider-three-text lead">' . $slider3text  . '</p>
				         </div>
				       </div>';
						  }
				    echo ' </div>
				    <a class="carousel-control-prev" href="#wstTopSlider" role="button" data-slide="prev">
				      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="carousel-control-next" href="#wstTopSlider" role="button" data-slide="next">
				      <span class="carousel-control-next-icon" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>';



	}

 }


