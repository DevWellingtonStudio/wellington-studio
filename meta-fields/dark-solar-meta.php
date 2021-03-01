<?php
	/**
	 * Adds an image meta boxes to dark solar template..
	 * @package		Bootstrap For Genesis
	 * @since		1.0
	 * @author		Wellington Studiio <themes@wellington-studio.com>
	 * @link		https://github.com/DevWellingtonStudio/wellington-studio
	 * @copyright    Copyright (c) 2021, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 */

	// Prevents direct access to files
	if (!defined('ABSPATH')) {
		exit('Cheatin&#8217; uh?');
	}

	include 'sanitize/sanitize_dark_solar_template.php';

	add_action( 'add_meta_boxes', 'dark_solar_cust_meta' );
	function dark_solar_cust_meta() { global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/dark-solar.php') {
				$types = array( 'post', 'page' );
				foreach($types as $type) {
					add_meta_box( 'dark_solar_temp_meta', __( 'Dark Solar Template Settings', 'wellington-studio' ), 'dark_solar_temp_meta_callback', $type, 'normal', 'high' );
				}
			}
		}
	}

	function dark_solar_temp_meta_callback( $post ) {
		wp_nonce_field( basename( __FILE__ ), 'dark_solar_temp_nonce' );
		$dark_solar_temp_stored_meta = get_post_meta( $post->ID ); ?>
	  <p>
		<strong><label for="top-feature-row" class="signature-events-row-title"><?php _e( 'Top Feature Row', 'wellington-studio' )?></label></strong>
		<textarea style="width: 100%;" rows="4" name="top-feature-row" id="top-feature-row"><?php if ( isset ( $dark_solar_temp_stored_meta['top-feature-row'] ) ) echo $dark_solar_temp_stored_meta['top-feature-row'][0]; ?></textarea>
	  </p>




	<?php
	}
