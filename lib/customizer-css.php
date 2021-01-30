<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {
		$helvetica  = get_theme_mod('fontselector') == 'helvetica-font';
		$css_1 = '';
		if($helvetica) {
			$css_1 .='
			h2 {
				font-size: 10em;
				color: red;
			}

			';
		}
		return $css_1;
	}
