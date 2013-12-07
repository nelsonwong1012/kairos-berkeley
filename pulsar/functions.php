<?php

if ( ! isset( $content_width ) )
	$content_width = 960;

function pulsar_adjust_content_width() {
	global $content_width;
}
add_action( 'template_redirect', 'pulsar_adjust_content_width' );

/*-----------------------------------------------------------------------------------*/
/*	Slightly Modified Options Framework
/*-----------------------------------------------------------------------------------*/

require_once ('admin/index.php');

/*-----------------------------------------------------------------------------------*/
/*	Slightly Modified Options Framework
/*-----------------------------------------------------------------------------------*/

require_once ('functions/pulsar-post-subtitle.php');

/*-----------------------------------------------------------------------------------*/
/*	Add CSS Files To Header
/*-----------------------------------------------------------------------------------*/

function pulsar_register_css() {
	if (!is_admin()) {
		wp_register_style( 'pulsar_css', get_template_directory_uri() . '/style.css' );
		wp_register_style( 'pulsar_fonts_css', get_template_directory_uri() . '/fonts/fonts.css' );
		wp_register_style( 'pulsar_normalize_css', get_template_directory_uri() . '/stylesheets/normalize.css' );
		wp_register_style( 'pulsar_supersized_css', get_template_directory_uri() . '/stylesheets/supersized.css' );
		wp_register_style( 'pulsar_suppersized_shutter_css', get_template_directory_uri() . '/stylesheets/supersized.shutter.css' );
		wp_register_style( 'pulsar_style_common_css', get_template_directory_uri() . '/stylesheets/style_common.css' );
		wp_register_style( 'pulsar_style_five_css', get_template_directory_uri() . '/stylesheets/style5.css' );
		wp_register_style( 'pulsar_stylehov_css', get_template_directory_uri() . '/stylesheets/stylehov.css' );
		wp_register_style( 'pulsar_thirdeffect_css', get_template_directory_uri() . '/stylesheets/thirdeffect.css' );
		wp_register_style( 'pulsar_prettyphoto_css', get_template_directory_uri() . '/stylesheets/prettyPhoto.css' );
		wp_register_style( 'pulsar_ralewayfont_css', 'http://fonts.googleapis.com/css?family=Raleway:100' );
		wp_register_style( 'pulsar_opensansfont_css', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );
		wp_register_style( 'pulsar_titillium_css', 'http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' );
		wp_register_style( 'pulsar_arapey_css', 'http://fonts.googleapis.com/css?family=Arapey:400italic,400' );
		wp_register_style( 'kairos_magazine_css', get_template_directory_uri() . '/style-2012.css' );
		wp_register_style( 'google_calendar_css', get_template_directory_uri() . '/Google-Calendar-PHP/themes/magazine.css' );
		wp_register_style( 'kairos_magazine_reset_css', get_template_directory_uri() . '/stylesheets/reset.css' );
		wp_register_style( 'kairos_magazine_text_css', get_template_directory_uri() . '/stylesheets/text.css' );
		wp_register_style( 'kairos_magazine_grid_css', get_template_directory_uri() . '/stylesheets/grid.css' );
		
		wp_enqueue_style('kairos_magazine_css');
		wp_enqueue_style('kairos_magazine_reset_css');
		#wp_enqueue_style('kairos_magazine_text_css');
		wp_enqueue_style('kairos_magazine_grid_css');
		wp_enqueue_style('pulsar_css');
		wp_enqueue_style('pulsar_fonts_css');
		wp_enqueue_style('pulsar_normalize_css');
		wp_enqueue_style('pulsar_supersized_css');
		wp_enqueue_style('pulsar_suppersized_shutter_css');
		wp_enqueue_style('pulsar_style_common_css');
		wp_enqueue_style('pulsar_style_five_css');
		wp_enqueue_style('pulsar_stylehov_css');
		wp_enqueue_style('pulsar_thirdeffect_css');
		wp_enqueue_style('pulsar_prettyphoto_css');
		wp_enqueue_style('pulsar_ralewayfont_css');
		wp_enqueue_style('pulsar_opensansfont_css');
		wp_enqueue_style('pulsar_titillium_css');
		wp_enqueue_style('pulsar_arapey_css');
		wp_enqueue_style('google_calendar_css');
	}
}
add_action('init', 'pulsar_register_css');

/*-----------------------------------------------------------------------------------*/
/*	Add JS Files
/*-----------------------------------------------------------------------------------*/

function pulsar_register_js() {
	if (!is_admin()) {
		wp_register_script('pulsar_easing', get_template_directory_uri() . '/javascripts/jquery.easing.min.js', 'jquery', '1.0', TRUE);
		wp_register_script('pulsar_modernizr', get_template_directory_uri() . '/javascripts/modernizr.js', 'jquery');
		wp_register_script('pulsar_supersized', get_template_directory_uri() . '/javascripts/supersized.3.2.7.js', 'jquery');
		wp_register_script('pulsar_supersized_shutter', get_template_directory_uri() . '/javascripts/supersized.shutter.min.js', 'jquery');
		wp_register_script('pulsar_jquery_validate', 'http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js', 'jquery', '1.0', TRUE);
		wp_register_script('pulsar_parallax', get_template_directory_uri() . '/javascripts/jquery.parallax-1.1.3.js', 'jquery', '1.0', TRUE);
		wp_register_script('pulsar_prettyphoto', get_template_directory_uri() . '/javascripts/jquery.prettyPhoto.js', 'jquery', '1.0', TRUE);
		wp_register_script('pulsar_customscrollbar', get_template_directory_uri() . '/javascripts/jquery.mCustomScrollbar.concat.min.js', 'jquery', '1.0', TRUE);
		wp_register_script('pulsar_custom', get_template_directory_uri() . '/javascripts/jquery.PulsarCustom.js', 'jquery', '1.0', TRUE);
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('pulsar_modernizr');
		wp_enqueue_script('pulsar_easing');
		wp_enqueue_script('pulsar_supersized');
		wp_enqueue_script('pulsar_supersized_shutter');
		wp_enqueue_script('pulsar_jquery_validate');
		wp_enqueue_script('pulsar_parallax');
		wp_enqueue_script('pulsar_prettyphoto');
		wp_enqueue_script('pulsar_customscrollbar');
		wp_enqueue_script('pulsar_custom');
	}
}
add_action('init', 'pulsar_register_js');

/*-----------------------------------------------------------------------------------*/
/* Load scripts for single pages
/*-----------------------------------------------------------------------------------*/

function pulsar_single_scripts() {
		
	if(is_singular())
		wp_enqueue_script( "comment-reply" );
	if(is_home())
		wp_enqueue_script('pulsar_supersized');
		wp_enqueue_script('pulsar_supersized_shutter');

}
add_action('wp_print_scripts', 'pulsar_single_scripts');


/*-----------------------------------------------------------------------------------*/
/*	Register Navigation Menu
/*-----------------------------------------------------------------------------------*/

function register_my_menus() {
  register_nav_menus(
  	array(
      'main-menu' => __( 'Main Menu', 'pulsar' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*-----------------------------------------------------------------------------------*/
/*	GET ID by Page Name
/*-----------------------------------------------------------------------------------*/

function pulsar_get_ID_by_page_name($page_name)
{
	global $wpdb;
	$page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name_id;
}

function get_category_id($cat_name) {
	$term = get_term_by('name', $cat_name, 'category');
        return $term->term_id;
}

/*-----------------------------------------------------------------------------------*/
/*	Add Post Thumbnail Support
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'post-thumbnails' );
add_image_size( 'about-news-team-thumbnail', 1000, 175, true );
add_image_size( 'portfolio-thumbnail', 1000, 359, true );
add_image_size( 'single-page-thumbnail', 1000, 450, true );
add_image_size( 'category-thumbnail', 1000, 250, true );
add_image_size( 'about-news-team-thumbnail-large', 320, 175, true );
add_image_size( 'portfolio-thumbnail-large', 320, 359, true );


/*-----------------------------------------------------------------------------------*/
/*	Slug Function
/*-----------------------------------------------------------------------------------*/


function get_cat_slug($cat_id) {
	$cat_id = (int) $cat_id;
	$category = &get_category($cat_id);
	return $category->slug;
}

if(!function_exists('getPageContent'))
    {
        function getPageContent($pageId,$max_char)
        {
            if(!is_numeric($pageId))
            {
                return;
            }
            global $wpdb;
            $nsquery = 'SELECT DISTINCT * FROM ' . $wpdb->posts .
            ' WHERE ' . $wpdb->posts . '.ID=' . $pageId;
            $post_data = $wpdb->get_results($nsquery);
            if(!empty($post_data))
            {
                foreach($post_data as $post)
                {
                    $text_out=nl2br($post->post_content);
                    $text_out=str_replace(']]>', ']]&gt;', $text_out);
                    $text_out = strip_tags($text_out);
                    return substr($text_out,0,$max_char);
 
                }
            }
        }
}

/*-----------------------------------------------------------------------------------*/
/*	main Menu Modification
/*-----------------------------------------------------------------------------------*/
//	Reduce nav classes, leaving only 'current-menu-item'
function nav_class_filter( $var ) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'nav_class_filter', 100, 1);
//	Add page slug as nav IDs
function nav_id_filter( $id, $item ) {
	return '#' .get_post_meta( $item->ID, '_menu_item_object_id', true );
}
add_filter( 'nav_menu_item_id', 'nav_id_filter', 10, 2 );

/*-----------------------------------------------------------------------------------*/
/*	Responsive Menu
/*-----------------------------------------------------------------------------------*/
class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{
    function start_lvl(&$output, $depth){
      $indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
    }

    function end_lvl(&$output, $depth){
      $indent = str_repeat("\t", $depth); // don't output children closing tag
    }

    function start_el(&$output, $item, $depth, $args){
      // add spacing to the title based on the depth
      $item->title = str_repeat("&nbsp;", $depth * 4).$item->title;

		$itemIDD = '#' .get_post_meta( $item->ID, '_menu_item_object_id', true );

		$value = false;
		$item_output = false;
        $output .= $value;  
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';  
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';  
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';  
        $attributes .= ! empty( $itemIDD )        ? ' value="'   . esc_attr( $itemIDD      ) .'"' : '';  
        
        $item_output .= '<option'. $attributes .'>';  
        $item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );  
        $item_output .= '';  
        
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );  



      // no point redefining this method too, we just replace the li tag...
      $output = str_replace('<li', '<option', $output);
    }

    function end_el(&$output, $item, $depth){
      $output .= "</option>\n"; // replace closing </li> with the option tag
    }
}

/*-----------------------------------------------------------------------------------*/
/*	Add Theme Support
/*-----------------------------------------------------------------------------------*/

add_theme_support( 'automatic-feed-links' );

add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain ('pulsar');
}

/*-----------------------------------------------------------------------------------*/
/*	Register Sidebars
/*-----------------------------------------------------------------------------------*/

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Post Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'Page Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
}/*-----------------------------------------------------------------------------------*/
/*	Homepage Slideshow
/*-----------------------------------------------------------------------------------*/

function add_homepage_slideshow() {
    if( is_home() ) { ?>
<script>
	jQuery(function($){
		$.supersized({
			// Functionality
			slideshow : <?php global $pulsar_data; $pulsar_slideshow_on_off = $pulsar_data['slideshow_on_off']; echo $pulsar_slideshow_on_off ?>,
			autoplay : <?php global $pulsar_data; $pulsar_slideshow_autoplay = $pulsar_data['slideshow_autoplay']; echo $pulsar_slideshow_autoplay ?>,
			start_slide : <?php global $pulsar_data; $pulsar_slideshow_start_slide = $pulsar_data['slideshow_start_slide']; echo $pulsar_slideshow_start_slide ?>,
			stop_loop : <?php global $pulsar_data; $pulsar_slideshow_stop_loop = $pulsar_data['slideshow_stop_loop']; echo $pulsar_slideshow_stop_loop ?>,
			random : <?php global $pulsar_data; $pulsar_slideshow_random = $pulsar_data['slideshow_random']; echo $pulsar_slideshow_random ?>,
			slide_interval : <?php global $pulsar_data; $pulsar_slideshow_interval = $pulsar_data['slideshow_interval']; echo $pulsar_slideshow_interval ?>,
			transition : <?php global $pulsar_data; $pulsar_slideshow_transition_effect = $pulsar_data['slideshow_transition_effect']; echo $pulsar_slideshow_transition_effect ?>, 
			transition_speed : <?php global $pulsar_data; $pulsar_slideshow_transition_speed = $pulsar_data['slideshow_transition_speed']; echo $pulsar_slideshow_transition_speed ?>,
			new_window : <?php global $pulsar_data; $pulsar_slideshow_links_open = $pulsar_data['slideshow_links_open']; echo $pulsar_slideshow_links_open ?>,
			pause_hover : <?php global $pulsar_data; $pulsar_slideshow_pause_on_hover = $pulsar_data['slideshow_pause_on_hover']; echo $pulsar_slideshow_pause_on_hover ?>,
			keyboard_nav : <?php global $pulsar_data; $pulsar_slideshow_keyboard_navigation = $pulsar_data['slideshow_keyboard_navigation']; echo $pulsar_slideshow_keyboard_navigation ?>,
			performance : <?php global $pulsar_data; $pulsar_slideshow_performance = $pulsar_data['slideshow_performance']; echo $pulsar_slideshow_performance ?>,
			image_protect :	<?php global $pulsar_data; $pulsar_slideshow_image_protect = $pulsar_data['slideshow_image_protect']; echo $pulsar_slideshow_image_protect ?>,								   
			
			// Size & Position						   
			min_width		        :   0,			// Min width allowed (in pixels)
			min_height		        :   0,			// Min height allowed (in pixels)
			vertical_center         :   1,			// Vertically center background
			horizontal_center       :   1,			// Horizontally center background
			fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
			fit_portrait         	:   1,			// Portrait images will not exceed browser height
			fit_landscape			:   0,			// Landscape images will not exceed browser width
			
			// Components							
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			thumb_links				:	1,			// Individual thumb links for each slide
			thumbnail_navigation    :   1,			// Thumbnail navigation
			slides 					:  	[			// Slideshow Images
											<?php $slides = $pulsar_data['pulsar_slider']; //get the slides array

												foreach ($slides as $slide) {
													if ($slide < end($slides))
														echo '{image : "'.$slide['url'].'", title : "<h1>'.$slide['title'].'</h1><h2>'.$slide['description'].'</h2>", url : "'.$slide['link'].'"},';
												
													if ($slide == end($slides))
														echo '{image : "'.$slide['url'].'", title : "<h1>'.$slide['title'].'</h1><h2>'.$slide['description'].'</h2>", url : "'.$slide['link'].'"}';
												}?>
										],
			// Theme Options			   
			progress_bar			:	0,			// Timer for each slide							
			mouse_scrub				:	0
		});
	});
</script>
<?php
    }
}


add_action('wp_footer','add_homepage_slideshow',100);

function add_pulsar_custom_css() { ?>
<!--
 <style>
 <?php global $pulsar_data; $pulsar_custom_css = $pulsar_data['custom_css']; echo $pulsar_custom_css ?>
 #morebut, #nav2 a:hover, #nav3 a:hover, #nav4 a:hover, #nav5 a:hover, .button, a, nav ul ul li a:hover, nav ul li a.first:hover, nav ul li:hover a {
	 color:<?php global $pulsar_data; $pulsar_main_website_color = $pulsar_data['main_website_color']; echo $pulsar_main_website_color ?>;
 }
 </style>
-->
<!-- our welcome blurb ends here -->
<?php 
} // end of our new function for custom css
 
// Now we add our new function to our 
add_action('wp_head','add_pulsar_custom_css');
