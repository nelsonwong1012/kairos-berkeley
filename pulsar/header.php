<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]--><head>

    <!-- MetaTags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    
    <title><?php
        /* Print the <title> tag based on what is being viewed. */
        global $page, $paged;
		global $pulsar_data; //fetch options stored in $pulsar_data
		$your_homepage_title = $pulsar_data['homepage_title'];
		$your_homepage_description = $pulsar_data['homepage_description'];
		$your_homepage_keywords = $pulsar_data['homepage_keywords'];
		if (is_home () ) { echo $your_homepage_title; }elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
elseif (is_single() ) { single_post_title();}
elseif (is_page() ) { bloginfo('name'); echo ': '; single_post_title();}
else { wp_title('',true); }
        ?>
    </title>
    <?php
		global $pulsar_data; //fetch options stored in $pulsar_data
		$your_homepage_description = $pulsar_data['homepage_description'];
		$your_homepage_keywords = $pulsar_data['homepage_keywords'];
        
        if ( is_home() || is_front_page() ) 
            echo '<meta name="description" content="' .$your_homepage_description .'">
	<meta name="keywords" content="' .$your_homepage_keywords. '">';
    ?>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes"/>
    
    <?php global $pulsar_data; //fetch options stored in $pulsar_data
		$your_apple_touch_icon_144x144_precomposed = $pulsar_data['uploaded_apple_touch_icon_144x144_precomposed'];
		$your_apple_touch_icon_114x114_precomposed = $pulsar_data['uploaded_apple_touch_icon_114x114_precomposed'];
		$your_apple_touch_icon_72x72_precomposed = $pulsar_data['uploaded_apple_touch_icon_72x72_precomposed'];
		$your_apple_touch_icon_57x57_precomposed = $pulsar_data['uploaded_apple_touch_icon_57x57_precomposed'];
		$your_apple_touch_icon = $pulsar_data['uploaded_apple_touch_icon'];
		$your_uploaded_favicon = $pulsar_data['uploaded_favicon'];
		$template_url = get_template_directory_uri();
		if (isset($your_apple_touch_icon_144x144_precomposed[0]) && $your_apple_touch_icon_144x144_precomposed[1]) {
		echo '<link rel="apple-touch-icon-precomposed" href="'.$your_apple_touch_icon_144x144_precomposed.'" />' ;
		} else {
			echo '<link rel="apple-touch-icon-precomposed" href="'.$template_url.'/apple-touch-icon-144x144-precomposed.png" />';
		}
		if (isset($your_apple_touch_icon_114x114_precomposed[0]) && $your_apple_touch_icon_114x114_precomposed[1]) {
		echo '<link rel="apple-touch-icon-precomposed" href="'.$your_apple_touch_icon_114x114_precomposed.'" />' ;
		} else {
			echo '<link rel="apple-touch-icon-precomposed" href="'.$template_url.'/apple-touch-icon-114x114-precomposed.png" />';
		}
		if (isset($your_apple_touch_icon_72x72_precomposed[0]) && $your_apple_touch_icon_72x72_precomposed[1]) {
		echo '<link rel="apple-touch-icon-precomposed" href="'.$your_apple_touch_icon_72x72_precomposed.'" />' ;
		} else {
			echo '<link rel="apple-touch-icon-precomposed" href="'.$template_url.'/apple-touch-icon-72x72-precomposed.png" />';
		}
		if (isset($your_apple_touch_icon_57x57_precomposed[0]) && $your_apple_touch_icon_57x57_precomposed[1]) {
		echo '<link rel="apple-touch-icon-precomposed" href="'.$your_apple_touch_icon_57x57_precomposed.'" />' ;
		} else {
			echo '<link rel="apple-touch-icon-precomposed" href="'.$template_url.'/apple-touch-icon-57x57-precomposed.png" />';
		}
		if (isset($your_apple_touch_icon[0]) && $your_apple_touch_icon[1]) {
		echo '<link rel="apple-touch-icon" href="'.$your_apple_touch_icon.'" />' ;
		} else {
			echo '<link rel="apple-touch-icon" href="'.$template_url.'/apple-touch-icon.png" />';
		}
		if (isset($your_uploaded_favicon[0]) && $your_uploaded_favicon[1]) {
		echo '<link rel="shortcut icon" href="'.$your_uploaded_favicon.'" />' ;
		} else {
			echo '<link rel="shortcut icon" href="'.$template_url.'/favicon.ico" />';
		}
	?>
    
    <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
    <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
    
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <!-- RSS + PingBack -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <!-- WPHEAD -->
    <?php wp_head(); ?>

</head>
<body id="homepage" <?php body_class(); ?>>
    
	<?php if(is_home() ) { ?>
	<!-- Loader -->
	<div id="loading">
    	<?php global $pulsar_data; //fetch options stored in $pulsar_data
			$your_uploaded_loader = $pulsar_data['uploaded_loader'];
			$template_url = get_template_directory_uri();
			if (isset($your_uploaded_loader[0]) && $your_uploaded_loader[1]) {
				echo '<img src="' .$your_uploaded_loader. '"  alt="'.$your_homepage_title.'">'  ;
			} else {
				echo '<img src="' .$template_url. '/images/loader.gif"  alt="'.$your_homepage_title.'">';
			} ?>
    </div>

	<div id="home-overlay">
    </div>
    <?php } ?>

	<!-- Header and Navigation -->
    <header>
    	
        <?php if(is_home() ) { ?>
        <!-- Your Logo Goes Here -->
    	<div class="logo">
        	<a href="#homepage"><?php global $pulsar_data; //fetch options stored in $pulsar_data
			$your_uploaded_logo = $pulsar_data['uploaded_logo'];
			$template_url = get_template_directory_uri();
			if (isset($your_uploaded_logo[0]) && $your_uploaded_logo[1]) {
				echo '<img src="' .$your_uploaded_logo. '"  alt="'.$your_homepage_title.'">'  ;
			} else {
				echo '<img src="' .$template_url. '/images/logo.png"  alt="'.$your_homepage_title.'">';
			} ?></a>
        </div>
    	<?php } ?>
        
    	<?php if(is_home() ) { ?>
        <!-- Your menu items are placed here -->
        <div class="main-menu hide-for-small">
        	<nav>
                <?php wp_nav_menu( array(
                    'theme_location'  => 'main-menu',
                    'menu'            => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                    'depth'           => 0
                )); ?>
            </nav>
        </div>
    <?php } ?>
        
        <!-- Enter the links for your social media profiles -->
        <div class="social-media-header hide-for-small hide-for-1220"><?php global $pulsar_data; //fetch options stored in $pulsar_data
			$your_sm_profile_url_one = $pulsar_data['sm_profile_url_one'];
			$your_sm_profile_url_two = $pulsar_data['sm_profile_url_two'];
			$your_sm_profile_url_three = $pulsar_data['sm_profile_url_three'];
			$your_sm_profile_url_four = $pulsar_data['sm_profile_url_four'];
			
			if (isset($your_sm_profile_url_one[0]) && $your_sm_profile_url_one[1]) {
				echo '<a href="'.$your_sm_profile_url_one.'" class="facebook" target="_blank"></a>';
			} else {
				echo '';
			}
			
			if (isset($your_sm_profile_url_two[0]) && $your_sm_profile_url_two[1]) {
				echo '<a href="'.$your_sm_profile_url_two.'" class="twitter" target="_blank"></a>';
			} else {
				echo '';
			}
			
			if (isset($your_sm_profile_url_three[0]) && $your_sm_profile_url_three[1]) {
				echo '<a href="'.$your_sm_profile_url_three.'" class="vimeo" target="_blank"></a>';
			} else {
				echo '';
			}
			
			if (isset($your_sm_profile_url_four[0]) && $your_sm_profile_url_four[1]) {
				echo '<a href="'.$your_sm_profile_url_four.'" class="youtube" target="_blank"></a>';
			} else {
				echo '';
			} ?>
        </div>
        
    <?php if(is_home() ) { ?>
        <?php wp_nav_menu( array(
			'theme_location'  => 'main-menu',
			'menu'            => '',
			'menu_class'      => 'menu',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'link_after'      => '',
			'items_wrap'     => '<select class="responsive-nav show-for-small" onchange="moveTo(this.value)" onFocus="moveTo(this.value)"><option value="">Select a page...</option>%3$s</select>',
			'depth'           => 0,
			'walker'  => new Walker_Nav_Menu_Dropdown()
		)); ?>
    <?php } ?>
    
    <?php if(!is_home() ) { ?>
    <!-- Your Logo Goes Here -->
    	<div class="logo">
        	<a href="<?php echo home_url(); ?>"><?php global $pulsar_data; //fetch options stored in $pulsar_data
			$your_uploaded_logo = $pulsar_data['uploaded_logo'];
			$template_url = get_template_directory_uri();
			if (isset($your_uploaded_logo[0]) && $your_uploaded_logo[1]) {
				echo '<img src="' .$your_uploaded_logo. '"  alt="'.$your_homepage_title.'">'  ;
			} else {
				echo '<img src="' .$template_url. '/images/logo.png"  alt="'.$your_homepage_title.'">';
			} ?></a>
        </div>
    <!-- Your menu items are placed here -->
    <div class="main-menu hide-for-small">
    	<nav>
        	<div class="menu-main-menu-container">
            	<ul>
                	<li>
                    	<a href="<?php echo home_url(); ?>">Go Back to home</a>
                    </li>
				</ul>
			</div>
		</nav>
   	</div>
    <?php } ?>
        
    </header>
    
    <?php if(is_home() ) { ?>
    <div class="navigation">
        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
    </div>
    
    <div class="section1 black">
    	<!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>
        
        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">
                <!--Slide captions displayed here-->
                <div id="slidecaption" class="hide-for-520"></div>
                <div id="slidedivider" class="hide-for-520"></div>
            </div>
           
        </div> 
        
    	<div class="pattern1"></div>
	</div>
    <?php } ?>