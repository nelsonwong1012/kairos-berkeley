
    
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
    
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-97361-7']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>


</body>
</html>
