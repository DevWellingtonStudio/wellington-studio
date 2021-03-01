<?php
	/**
	 * Template Name: Dark Solar Template
	 *
	 * @package      Bootstrap for Genesis
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/wellington-studio
	 * @author       Wellington Studiio <themes@wellington-studio.com>
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */



	add_action('genesis_after_header', 'add_darksolar_content', 10);
	function add_darksolar_content() {
	  $default = '';
	  $top_feature_row	= get_post_meta(get_the_ID(), 'top-feature-row', true);

	if($top_feature_row !== $default) {
	?>

	<div id="dark-solar-feature-row" class="container-fluid">
	  <div class="row justify-content-center align-items-center pt-5 pb-5">
	  	<?php echo $top_feature_row; ?>
	  </div>
	</div>

	<?php
	}
	}
	genesis();
