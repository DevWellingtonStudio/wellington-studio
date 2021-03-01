<?php

	add_action( 'save_post', 'dark_solar_meta_save' );
	function dark_solar_meta_save( $post_id ) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['dark_solar_temp_nonce'] ) && wp_verify_nonce( $_POST['dark_solar_temp_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and saves if needed
		if ( isset( $_POST['top-feature-row'] ) ) {
			update_post_meta( $post_id, 'top-feature-row', $_POST['top-feature-row'] );
		}
	}
