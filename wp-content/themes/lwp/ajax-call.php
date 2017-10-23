<?php

/*
 * Template Name: Ajax call
 */

get_header();

	echo 'Click this button to make Ajax call - Retrieving posts...'; ?>

	<div id="datafetch"></div>
	<button onclick="fetch()">Load Posts...</button>

<?php

get_footer();