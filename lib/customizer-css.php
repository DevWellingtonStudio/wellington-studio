<?php
	/** CSS associated with customizer style settings  */


	function load_customizer_css() {

		$opensans_domine    = get_theme_mod('fontSelector') == 'openSans-domine-font';
		$roboto_raleway     = get_theme_mod('fontSelector') == 'roboto-raleway-font';
		$montserrat_oswald  = get_theme_mod('fontSelector') == 'montserrat-oswald-font';

		$css_1 = '';
		if($opensans_domine) {
			$css_1 .='
			@import url("https://fonts.googleapis.com/css2?family=Domine&family=Open+Sans&display=swap");
			h1,h2,h3,h4,h5 {
			 font-family: "Open Sans", sans-serif;
			}
			body, body p, p {
			 font-family: "Domine", serif;
			}
			';
		}
		if($roboto_raleway) {
			$css_1 .='
			@import url("https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap");
			h1,h2,h3,h4,h5 {
			 font-family: "Roboto", sans-serif;
			}
			body, body p, p {
			 font-family: "Raleway", sans-serif;
			}
			';
		}
		if($montserrat_oswald) {
			$css_1 .='
			@import url("https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald&display=swap");
			h1,h2,h3,h4,h5 {
			 font-family: "Oswald", sans-serif;
			}
			body, body p, p {
			 font-family: "Montserrat", sans-serif;
			}
			';
		}
		return $css_1;
	}
