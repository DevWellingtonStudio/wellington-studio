<?php
	/**
	 * Template Name: Dark Solar
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
	?>

	<div id="dark-solar-wrapper" class="container-fluid">
		<div class="row">
			<h1>Heeelloooo!</h1>
		</div>
	</div>

	<?php
	}
	genesis();
