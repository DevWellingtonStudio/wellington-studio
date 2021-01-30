<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {

		$openSans   = get_theme_mod('fontSelector') == 'openSans-font';
		$roboto     = get_theme_mod('fontSelector') == 'roboto-font';

		$css_1 = '';
		if($openSans) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Open Sans", sans-serif;
			}
			';
		}
		if($roboto) {
			$css_1 .='
			h1,h2,h3,h4,h5 {
			 font-family: "Roboto", sans-serif;
			}
			';
		}
		return $css_1;
	}
