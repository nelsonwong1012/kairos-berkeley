<?php 
get_header(); 
?>
<div id="upcoming" class="slickpanel widget" style="display:block;">
	<?php

	require('Google-Calendar-PHP/gcal.class.php');
	require('Google-Calendar-PHP/themes/magazine.class.php');

	$mag = new Magazine(array(
		'debug' => 0,
		'shows' => 'normal',
		'numdays' => 14
	));

	echo $mag->display();

	?>
	<div class="pull-upcoming">
		<div class="wrapper">
			<a href="#" id="calendar-link">Upcoming</a>
		</div>
	</div>
</div>
<?php
get_footer();
 ?>
