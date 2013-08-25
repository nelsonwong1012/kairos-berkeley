
    
    <?php global $pulsar_data; //fetch options stored in $pulsar_data
		$your_google_analytics_code = $pulsar_data['google_analytics_code'];
		if (isset($your_google_analytics_code[0]) && $your_google_analytics_code[1]) {
		echo $your_google_analytics_code;
		} else {
			echo '';
		}						
	?>	
    <!-- Slideshow Object-->    
	<?php
		wp_footer(); 
	
	?>
    
    <!-- css3-mediaqueries.js for IE less than 9 -->
 <!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
<script type="text/javascript">
    _uacct = "UA-97361-7";
    if (window.urchinTracker) urchinTracker();
</script>
    
</body>
</html>
