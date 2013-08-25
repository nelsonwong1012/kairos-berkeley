<?php 
/**
 * Template Name: about-us
*/ ?>

<?php

get_header(); 

	global $pulsar_data; //fetch options stored in $pulsar_data
	
	//fetch first parallax data
	$pulsar_first_parallax = $pulsar_data['first_parallax'];
	$pulsar_first_parallax_template = $pulsar_data['first_parallax_template'];
	
	//fetch first page data
	$pulsar_first_content_page = $pulsar_data['first_content_page'];
	$pulsar_first_content_page_category = $pulsar_data['first_content_page_category'];
	$pulsar_first_page_template = $pulsar_data['first_page_template'];
	$pulsar_first_page_subtitle_one = $pulsar_data['first_page_subtitle_one'];
	$pulsar_first_page_subtitle_two = $pulsar_data['first_page_subtitle_two'];
	$pulsar_first_page_description = $pulsar_data['first_page_description'];
	
	//fetch second parallax data
	$pulsar_second_parallax = $pulsar_data['second_parallax'];
	$pulsar_second_parallax_template = $pulsar_data['second_parallax_template'];
	
	//fetch second page data
	$pulsar_second_content_page = $pulsar_data['second_content_page'];
	$pulsar_second_content_page_category = $pulsar_data['second_content_page_category'];
	$pulsar_second_page_template = $pulsar_data['second_page_template'];
	$pulsar_second_page_subtitle_one = $pulsar_data['second_page_subtitle_one'];
	$pulsar_second_page_subtitle_two = $pulsar_data['second_page_subtitle_two'];
	$pulsar_second_page_description = $pulsar_data['second_page_description'];
	
	//fetch third parallax data
	$pulsar_third_parallax = $pulsar_data['third_parallax'];
	$pulsar_third_parallax_template = $pulsar_data['third_parallax_template'];
	
	//fetch third page data
	$pulsar_third_content_page = $pulsar_data['third_content_page'];
	$pulsar_third_content_page_category = $pulsar_data['third_content_page_category'];
	$pulsar_third_page_template = $pulsar_data['third_page_template'];
	$pulsar_third_page_subtitle_one = $pulsar_data['third_page_subtitle_one'];
	$pulsar_third_page_subtitle_two = $pulsar_data['third_page_subtitle_two'];
	$pulsar_third_page_description = $pulsar_data['third_page_description'];
	
	//fetch fourth parallax data
	$pulsar_fourth_parallax = $pulsar_data['fourth_parallax'];
	$pulsar_fourth_parallax_template = $pulsar_data['fourth_parallax_template'];
	
	//fetch fourth page data
	$pulsar_fourth_content_page = $pulsar_data['fourth_content_page'];
	$pulsar_fourth_content_page_category = $pulsar_data['fourth_content_page_category'];
	$pulsar_fourth_page_template = $pulsar_data['fourth_page_template'];
	$pulsar_fourth_page_subtitle_one = $pulsar_data['fourth_page_subtitle_one'];
	$pulsar_fourth_page_subtitle_two = $pulsar_data['fourth_page_subtitle_two'];
	$pulsar_fourth_page_description = $pulsar_data['fourth_page_description'];
	
	//fetch fifth parallax data
	$pulsar_fifth_parallax = $pulsar_data['fifth_parallax'];
	$pulsar_fifth_parallax_template = $pulsar_data['fifth_parallax_template'];
	
	//fetch fifth page data
	$pulsar_fifth_content_page = $pulsar_data['fifth_content_page'];
	$pulsar_fifth_content_page_category = $pulsar_data['fifth_content_page_category'];
	$pulsar_fifth_page_template = $pulsar_data['fifth_page_template'];
	$pulsar_fifth_page_subtitle_one = $pulsar_data['fifth_page_subtitle_one'];
	$pulsar_fifth_page_subtitle_two = $pulsar_data['fifth_page_subtitle_two'];
	$pulsar_fifth_page_description = $pulsar_data['fifth_page_description'];
	
	//fetch sixth parallax data
	$pulsar_sixth_parallax = $pulsar_data['sixth_parallax'];
	$pulsar_sixth_parallax_template = $pulsar_data['sixth_parallax_template'];
	
	//fetch sixth page data
	$pulsar_sixth_content_page = $pulsar_data['sixth_content_page'];
	$pulsar_sixth_content_page_category = $pulsar_data['sixth_content_page_category'];
	$pulsar_sixth_page_template = $pulsar_data['sixth_page_template'];
	$pulsar_sixth_page_subtitle_one = $pulsar_data['sixth_page_subtitle_one'];
	$pulsar_sixth_page_subtitle_two = $pulsar_data['sixth_page_subtitle_two'];
	$pulsar_sixth_page_description = $pulsar_data['sixth_page_description'];
	
	//fetch seventh parallax data
	$pulsar_seventh_parallax = $pulsar_data['seventh_parallax'];
	$pulsar_seventh_parallax_template = $pulsar_data['seventh_parallax_template'];
	
	//fetch seventh page data
	$pulsar_seventh_content_page = $pulsar_data['seventh_content_page'];
	$pulsar_seventh_content_page_category = $pulsar_data['seventh_content_page_category'];
	$pulsar_seventh_page_template = $pulsar_data['seventh_page_template'];
	$pulsar_seventh_page_subtitle_one = $pulsar_data['seventh_page_subtitle_one'];
	$pulsar_seventh_page_subtitle_two = $pulsar_data['seventh_page_subtitle_two'];
	$pulsar_seventh_page_description = $pulsar_data['seventh_page_description'];
	
	//fetch eighth parallax data
	$pulsar_eighth_parallax = $pulsar_data['eighth_parallax'];
	$pulsar_eighth_parallax_template = $pulsar_data['eighth_parallax_template'];
	
	//fetch eighth page data
	$pulsar_eighth_content_page = $pulsar_data['eighth_content_page'];
	$pulsar_eighth_content_page_category = $pulsar_data['eighth_content_page_category'];
	$pulsar_eighth_page_template = $pulsar_data['eighth_page_template'];
	$pulsar_eighth_page_subtitle_one = $pulsar_data['eighth_page_subtitle_one'];
	$pulsar_eighth_page_subtitle_two = $pulsar_data['eighth_page_subtitle_two'];
	$pulsar_eighth_page_description = $pulsar_data['eighth_page_description'];
	
	//fetch ninth parallax data
	$pulsar_ninth_parallax = $pulsar_data['ninth_parallax'];
	$pulsar_ninth_parallax_template = $pulsar_data['ninth_parallax_template'];
	
	//fetch ninth page data
	$pulsar_ninth_content_page = $pulsar_data['ninth_content_page'];
	$pulsar_ninth_content_page_category = $pulsar_data['ninth_content_page_category'];
	$pulsar_ninth_page_template = $pulsar_data['ninth_page_template'];
	$pulsar_ninth_page_subtitle_one = $pulsar_data['ninth_page_subtitle_one'];
	$pulsar_ninth_page_subtitle_two = $pulsar_data['ninth_page_subtitle_two'];
	$pulsar_ninth_page_description = $pulsar_data['ninth_page_description'];
	
	//fetch tenth parallax data
	$pulsar_tenth_parallax = $pulsar_data['tenth_parallax'];
	$pulsar_tenth_parallax_template = $pulsar_data['tenth_parallax_template'];
	
	//fetch tenth page data
	$pulsar_tenth_content_page = $pulsar_data['tenth_content_page'];
	$pulsar_tenth_content_page_category = $pulsar_data['tenth_content_page_category'];
	$pulsar_tenth_page_template = $pulsar_data['tenth_page_template'];
	$pulsar_tenth_page_subtitle_one = $pulsar_data['tenth_page_subtitle_one'];
	$pulsar_tenth_page_subtitle_two = $pulsar_data['tenth_page_subtitle_two'];
	$pulsar_tenth_page_description = $pulsar_data['tenth_page_description'];
	
	// First Parallax Section
	if (isset($pulsar_first_parallax[0]) && $pulsar_first_parallax[1]) {
		$page_id_parallax_one = pulsar_get_ID_by_page_name($pulsar_first_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_one ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_first_parallax_template ) {
			echo '
			<style>
			.section3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_one )).') 50% 0 no-repeat fixed;
			}
			</style>
			<div class="section3 black" id="'.$pulsar_first_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_first_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_first_parallax_template ) {
			echo '
			<style>
			.section5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_one )).') 50% 0 no-repeat fixed;
			}
			</style>
			
			<div class="section5 black" id="'.$pulsar_first_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_first_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_first_parallax_template ) {
			echo '
			<style>
				.section7 {
					background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_one )).') 50% 0 no-repeat fixed;
				}
			</style>
			
			<div class="section7 black" id="'.$pulsar_first_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_first_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_first_parallax_template ) {
			echo '
			<style>
			.section9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_one )).') 50% 0 no-repeat fixed;
			}
			</style>
			
			<div class="section9 black" id="'.$pulsar_first_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_first_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<div class="quote4-desc">
					'. $page_data->post_content .'
					</div>
				</div>
				<div class="quote4-pattern"></div>
			</div>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_first_parallax_template ) {
			echo '
			<style>
			.section10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_one )).') 50% 0 no-repeat fixed;
			}
			</style>
			
			<div class="section10 black" id="'.$pulsar_first_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_first_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>';// echo the title
		}
	} else {
		echo '';
	}
	
	// First Page Section
	if (isset($pulsar_first_content_page[0]) && $pulsar_first_content_page[1]) {
		if ("about_team_news_template" == $pulsar_first_page_template ) {
			$first_page_id = pulsar_get_ID_by_page_name($pulsar_first_content_page);
			$page_data = get_page( $first_page_id ); 
			echo '
				<div class="section2 black" id="'.$first_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$first_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($first_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
								$firstCategory = get_cat_slug($firstCategoryID);
                                $myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
								
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>1-1").click(function(event) {
                                              $(".contentbox-wrapper-about-1").animate({"left":-($("#<?php echo $slug; ?>-1-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>1-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_first_page_subtitle_one.'</h2>
						<h3>'.$pulsar_first_page_subtitle_two.'</h3>
						<p>'.$pulsar_first_page_description.'</p>
						
    
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-1">
									' ?> <?php
										global $post;
										$counter = 1;
										$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
										$firstCategory = get_cat_slug($firstCategoryID);
										$myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-1-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect" <?php echo post_class(); ?>>
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_first_page_template ) {
			$first_page_id = pulsar_get_ID_by_page_name($pulsar_first_content_page);
			$first_page_data = get_page( $first_page_id ); 
			echo '
				<div class="section2 black" id="'.$first_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$first_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($first_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
								$firstCategory = get_cat_slug($firstCategoryID);
                                $myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>1-2").click(function(event) {
                                              $(".contentbox-wrapper-team-1").animate({"left":-($("#<?php echo $slug; ?>-1-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>1-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_first_page_subtitle_one.'</h2>
						<h3>'.$pulsar_first_page_subtitle_two.'</h3>
						<p>'.$pulsar_first_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-1">
									' ?> <?php
										global $post;
										$counter = 1;
										$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
										$firstCategory = get_cat_slug($firstCategoryID);
										$myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-1-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 first-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_first_page_template ) {
			$first_page_id = pulsar_get_ID_by_page_name($pulsar_first_content_page);
			$first_page_data = get_page( $first_page_id ); 
			echo '
			<div class="section2 black" id="'.$first_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$first_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($first_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
								$firstCategory = get_cat_slug($firstCategoryID);
                                $myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>1-3").click(function(event) {
                                              $(".contentbox-wrapper-news-1").animate({"left":-($("#<?php echo $slug; ?>-1-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>1-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_first_page_subtitle_one.'</h2>
					<h3>'.$pulsar_first_page_subtitle_two.'</h3>
					<p>'.$pulsar_first_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-1">
							' ?> <?php
								global $post;
								$counter = 1;
								$firstCategoryID = get_cat_ID( $pulsar_first_content_page_category );
								$firstCategory = get_cat_slug($firstCategoryID);
								$myposts = get_posts(array('category' => $firstCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-1-3" class="contentbox">
									<div class="article1">
										<div class="view33 first-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_first_page_template ) {
			$first_page_id = pulsar_get_ID_by_page_name($pulsar_first_content_page);
			$first_page_data = get_page( $first_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($first_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$first_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$first_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($first_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_first_page_subtitle_one.'</h1>
									'.$pulsar_first_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_first_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_first_page_template ) {
			$first_page_id = pulsar_get_ID_by_page_name($pulsar_first_content_page);
			$page_data = get_page( $first_page_id ); 
			echo '
				<div class="section2 black" id="'.$first_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$first_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($first_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_first_page_subtitle_one.'</h2>
						<h3>'.$pulsar_first_page_subtitle_two.'</h3>
						<p>'.$pulsar_first_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Second Parallax Section
	if (isset($pulsar_second_parallax[0]) && $pulsar_second_parallax[1]) {
		$page_id_parallax_two = pulsar_get_ID_by_page_name($pulsar_second_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_two ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_second_parallax_template ) {
			echo '<div class="section3-2 black" id="'.$pulsar_second_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_second_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-2 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_two )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_second_parallax_template ) {
			echo '<div class="section5-2 black" id="'.$pulsar_second_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_second_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-2 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_two )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_second_parallax_template ) {
			echo '<div class="section7-2 black" id="'.$pulsar_second_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_second_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-2 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_two )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_second_parallax_template ) {
			echo '<div class="section9-2 black" id="'.$pulsar_second_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_second_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4-1 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<div class="quote4-1-desc">
					'. $page_data->post_content .'
					</div>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-2 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_two )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_second_parallax_template ) {
			echo '<div class="section10-2 black" id="'.$pulsar_second_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_second_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-2 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_two )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Second Page Section
	if (isset($pulsar_second_content_page[0]) && $pulsar_second_content_page[1]) {
		if ("about_team_news_template" == $pulsar_second_page_template ) {
			$second_page_id = pulsar_get_ID_by_page_name($pulsar_second_content_page);
			$second_page_data = get_page( $second_page_id ); 
			echo '
				<div class="section2 black" id="'.$second_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$second_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($second_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
								$secondCategory = get_cat_slug($secondCategoryID);
                                $myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>2-1").click(function(event) {
                                              $(".contentbox-wrapper-about-2").animate({"left":-($("#<?php echo $slug; ?>-2-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>2-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_second_page_subtitle_one.'</h2>
						<h3>'.$pulsar_second_page_subtitle_two.'</h3>
						<p>'.$pulsar_second_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-2">
									' ?> <?php
										global $post;
										$counter = 1;
										$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
										$secondCategory = get_cat_slug($secondCategoryID);
										$myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-2-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_second_page_template ) {
			$second_page_id = pulsar_get_ID_by_page_name($pulsar_second_content_page);
			$second_page_data = get_page( $second_page_id ); 
			echo '
				<div class="section2 black" id="'.$second_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$second_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($second_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
								$secondCategory = get_cat_slug($secondCategoryID);
                                $myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>2-2").click(function(event) {
                                              $(".contentbox-wrapper-team-2").animate({"left":-($("#<?php echo $slug; ?>-2-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>2-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_second_page_subtitle_one.'</h2>
						<h3>'.$pulsar_second_page_subtitle_two.'</h3>
						<p>'.$pulsar_second_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-2">
									' ?> <?php
										global $post;
										$counter = 1;
										$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
										$secondCategory = get_cat_slug($secondCategoryID);
										$myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-2-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_second_page_template ) {
			$second_page_id = pulsar_get_ID_by_page_name($pulsar_second_content_page);
			$second_page_data = get_page( $first_page_id ); 
			echo '
			<div class="section2 black" id="'.$second_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$second_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($second_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
								$secondCategory = get_cat_slug($secondCategoryID);
                                $myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>2-3").click(function(event) {
                                              $(".contentbox-wrapper-news-2").animate({"left":-($("#<?php echo $slug; ?>-2-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>2-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_second_page_subtitle_one.'</h2>
					<h3>'.$pulsar_second_page_subtitle_two.'</h3>
					<p>'.$pulsar_second_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-2">
							' ?> <?php
								global $post;
								$counter = 1;
								$secondCategoryID = get_cat_ID( $pulsar_second_content_page_category );
								$secondCategory = get_cat_slug($secondCategoryID);
								$myposts = get_posts(array('category' => $secondCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-2-3" class="contentbox">
									<div class="article1">
										<div class="view33 second-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_second_page_template ) {
			$second_page_id = pulsar_get_ID_by_page_name($pulsar_second_content_page);
			$second_page_data = get_page( $second_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($second_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$second_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$second_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($second_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_second_page_subtitle_one.'</h1>
									'.$pulsar_second_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_second_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_second_page_template ) {
			$second_page_id = pulsar_get_ID_by_page_name($pulsar_second_content_page);
			$page_data = get_page( $second_page_id ); 
			echo '
				<div class="section2 black" id="'.$second_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$second_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($second_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_second_page_subtitle_one.'</h2>
						<h3>'.$pulsar_second_page_subtitle_two.'</h3>
						<p>'.$pulsar_second_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Third Parallax Section
	if (isset($pulsar_third_parallax[0]) && $pulsar_third_parallax[1]) {
		$page_id_parallax_three = pulsar_get_ID_by_page_name($pulsar_third_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_three ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_third_parallax_template ) {
			echo '<div class="section3-3 black" id="'.$pulsar_third_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_third_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_three )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_third_parallax_template ) {
			echo '<div class="section5-3 black" id="'.$pulsar_third_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_third_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_three )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_third_parallax_template ) {
			echo '<div class="section7-3 black" id="'.$pulsar_third_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_third_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="white"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_three )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_third_parallax_template ) {
			echo '<div class="section9-3 black" id="'.$pulsar_third_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_third_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_three )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_third_parallax_template ) {
			echo '<div class="section10-3 black" id="'.$pulsar_third_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_third_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-3 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_three )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Third Page Section
	if (isset($pulsar_third_content_page[0]) && $pulsar_third_content_page[1]) {
		if ("about_team_news_template" == $pulsar_third_page_template ) {
			$third_page_id = pulsar_get_ID_by_page_name($pulsar_third_content_page);
			$third_page_data = get_page( $third_page_id ); 
			echo '
				<div class="section2 black" id="'.$third_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$third_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($third_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
								$thirdCategory = get_cat_slug($thirdCategoryID);
                                $myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>3-1").click(function(event) {
                                              $(".contentbox-wrapper-about-3").animate({"left":-($("#<?php echo $slug; ?>-3-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>3-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_third_page_subtitle_one.'</h2>
						<h3>'.$pulsar_third_page_subtitle_two.'</h3>
						<p>'.$pulsar_third_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-3">
									' ?> <?php
										global $post;
										$counter = 1;
										$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
										$thirdCategory = get_cat_slug($thirdCategoryID);
										$myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-3-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_third_page_template ) {
			$third_page_id = pulsar_get_ID_by_page_name($pulsar_third_content_page);
			$third_page_data = get_page( $third_page_id ); 
			echo '
				<div class="section2 black" id="'.$third_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$third_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($third_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
								$thirdCategory = get_cat_slug($thirdCategoryID);
                                $myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>3-2").click(function(event) {
                                              $(".contentbox-wrapper-team-3").animate({"left":-($("#<?php echo $slug; ?>-3-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>3-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_third_page_subtitle_one.'</h2>
						<h3>'.$pulsar_third_page_subtitle_two.'</h3>
						<p>'.$pulsar_third_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-3">
									' ?> <?php
										global $post;
										$counter = 1;
										$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
										$thirdCategory = get_cat_slug($thirdCategoryID);
										$myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-3-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_third_page_template ) {
			$third_page_id = pulsar_get_ID_by_page_name($pulsar_third_content_page);
			$third_page_data = get_page( $first_page_id ); 
			echo '
			<div class="section2 black" id="'.$third_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$third_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($third_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
								$thirdCategory = get_cat_slug($thirdCategoryID);
                                $myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>3-3").click(function(event) {
                                              $(".contentbox-wrapper-news-3").animate({"left":-($("#<?php echo $slug; ?>-3-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>3-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_third_page_subtitle_one.'</h2>
					<h3>'.$pulsar_third_page_subtitle_two.'</h3>
					<p>'.$pulsar_third_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-3">
							' ?> <?php
								global $post;
								$counter = 1;
								$thirdCategoryID = get_cat_ID( $pulsar_third_content_page_category );
								$thirdCategory = get_cat_slug($thirdCategoryID);
								$myposts = get_posts(array('category' => $thirdCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-3-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_third_page_template ) {
			$third_page_id = pulsar_get_ID_by_page_name($pulsar_third_content_page);
			$third_page_data = get_page( $third_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($third_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$third_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$third_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($third_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_third_page_subtitle_one.'</h1>
									'.$pulsar_third_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_third_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_third_page_template ) {
			$third_page_id = pulsar_get_ID_by_page_name($pulsar_third_content_page);
			$page_data = get_page( $third_page_id ); 
			echo '
				<div class="section2 black" id="'.$third_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$third_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($third_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_third_page_subtitle_one.'</h2>
						<h3>'.$pulsar_third_page_subtitle_two.'</h3>
						<p>'.$pulsar_third_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Fourth Parallax Section
	if (isset($pulsar_fourth_parallax[0]) && $pulsar_fourth_parallax[1]) {
		$page_id_parallax_four = pulsar_get_ID_by_page_name($pulsar_fourth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_four ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_fourth_parallax_template ) {
			echo '<div class="section3-4 black" id="'.$pulsar_fourth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fourth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-4 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_four )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_fourth_parallax_template ) {
			echo '<div class="section5-4 black" id="'.$pulsar_fourth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fourth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-4 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_four )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_fourth_parallax_template ) {
			echo '<div class="section7-4 black" id="'.$pulsar_fourth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_fourth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-4 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_four )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_fourth_parallax_template ) {
			echo '<div class="section9-4 black" id="'.$pulsar_fourth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fourth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-4 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_four )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_fourth_parallax_template ) {
			echo '<div class="section10-4 black" id="'.$pulsar_fourth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fourth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-4 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_four )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Fourth Page Section
	if (isset($pulsar_fourth_content_page[0]) && $pulsar_fourth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_fourth_page_template ) {
			$fourth_page_id = pulsar_get_ID_by_page_name($pulsar_fourth_content_page);
			$page_data = get_page( $fourth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fourth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fourth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fourth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
								$fourthCategory = get_cat_slug($fourthCategoryID);
                                $myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>4-1").click(function(event) {
                                              $(".contentbox-wrapper-about-4").animate({"left":-($("#<?php echo $slug; ?>-4-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>4-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_fourth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fourth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fourth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-4">
									' ?> <?php
										global $post;
										$counter = 1;
										$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
										$fourthCategory = get_cat_slug($fourthCategoryID);
										$myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-4-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_fourth_page_template ) {
			$fourth_page_id = pulsar_get_ID_by_page_name($pulsar_fourth_content_page);
			$fourth_page_data = get_page( $fourth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fourth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fourth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fourth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
								$fourthCategory = get_cat_slug($fourthCategoryID);
                                $myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>4-2").click(function(event) {
                                              $(".contentbox-wrapper-team-4").animate({"left":-($("#<?php echo $slug; ?>-4-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>4-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_fourth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fourth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fourth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-4">
									' ?> <?php
										global $post;
										$counter = 1;
										$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
										$fourthCategory = get_cat_slug($fourthCategoryID);
										$myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-4-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 fourth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_fourth_page_template ) {
			$fourth_page_id = pulsar_get_ID_by_page_name($pulsar_fourth_content_page);
			$fourth_page_data = get_page( $fourth_page_id ); 
			echo '
			<div class="section2 black" id="'.$fourth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$fourth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($fourth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
								$fourthCategory = get_cat_slug($fourthCategoryID);
                                $myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>4-3").click(function(event) {
                                              $(".contentbox-wrapper-news-4").animate({"left":-($("#<?php echo $slug; ?>-4-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>4-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_fourth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_fourth_page_subtitle_two.'</h3>
					<p>'.$pulsar_fourth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-4">
							' ?> <?php
								global $post;
								$counter = 1;
								$fourthCategoryID = get_cat_ID( $pulsar_fourth_content_page_category );
								$fourthCategory = get_cat_slug($fourthCategoryID);
								$myposts = get_posts(array('category' => $fourthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-4-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_fourth_page_template ) {
			$fourth_page_id = pulsar_get_ID_by_page_name($pulsar_fourth_content_page);
			$fourth_page_data = get_page( $fourth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($fourth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$fourth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$fourth_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($fourth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_fourth_page_subtitle_one.'</h1>
									'.$pulsar_fourth_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_fourth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_fourth_page_template ) {
			$fourth_page_id = pulsar_get_ID_by_page_name($pulsar_fourth_content_page);
			$page_data = get_page( $fourth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fourth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fourth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fourth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_fourth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fourth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fourth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Fifth Parallax Section
	if (isset($pulsar_fifth_parallax[0]) && $pulsar_fifth_parallax[1]) {
		$page_id_parallax_five = pulsar_get_ID_by_page_name($pulsar_fifth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_five ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_fifth_parallax_template ) {
			echo '<div class="section3-5 black" id="'.$pulsar_fifth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fifth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_five )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_fifth_parallax_template ) {
			echo '<div class="section5-5 black" id="'.$pulsar_fifth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fifth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_five )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_fifth_parallax_template ) {
			echo '<div class="section7-5 black" id="'.$pulsar_fifth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_fifth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 black hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_five )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_fifth_parallax_template ) {
			echo '<div class="section9-5 black" id="'.$pulsar_fifth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fifth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_five )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_fifth_parallax_template ) {
			echo '<div class="section10-5 black" id="'.$pulsar_fifth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_fifth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-5 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_five )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Fifth Page Section
	if (isset($pulsar_fifth_content_page[0]) && $pulsar_fifth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_fifth_page_template ) {
			$fifth_page_id = pulsar_get_ID_by_page_name($pulsar_fifth_content_page);
			$page_data = get_page( $fifth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fifth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fifth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fifth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
								$fifthCategory = get_cat_slug($fifthCategoryID);
                                $myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>5-1").click(function(event) {
                                              $(".contentbox-wrapper-about-5").animate({"left":-($("#<?php echo $slug; ?>-5-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>5-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_fifth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fifth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fifth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-5">
									' ?> <?php
										global $post;
										$counter = 1;
										$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
										$fifthCategory = get_cat_slug($fifthCategoryID);
										$myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-5-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_fifth_page_template ) {
			$fifth_page_id = pulsar_get_ID_by_page_name($pulsar_fifth_content_page);
			$fifth_page_data = get_page( $fifth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fifth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fifth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fifth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
								$fifthCategory = get_cat_slug($fifthCategoryID);
                                $myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>5-2").click(function(event) {
                                              $(".contentbox-wrapper-team-5").animate({"left":-($("#<?php echo $slug; ?>-5-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>5-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_fifth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fifth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fifth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-5">
									' ?> <?php
										global $post;
										$counter = 1;
										$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
										$fifthCategory = get_cat_slug($fifthCategoryID);
										$myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-5-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 fifth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_fifth_page_template ) {
			$fifth_page_id = pulsar_get_ID_by_page_name($pulsar_fifth_content_page);
			$fifth_page_data = get_page( $fifth_page_id ); 
			echo '
			<div class="section2 black" id="'.$fifth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$fifth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($fifth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
								$fifthCategory = get_cat_slug($fifthCategoryID);
                                $myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>5-3").click(function(event) {
                                              $(".contentbox-wrapper-news-4").animate({"left":-($("#<?php echo $slug; ?>-5-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>5-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_fifth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_fifth_page_subtitle_two.'</h3>
					<p>'.$pulsar_fifth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-4">
							' ?> <?php
								global $post;
								$counter = 1;
								$fifthCategoryID = get_cat_ID( $pulsar_fifth_content_page_category );
								$fifthCategory = get_cat_slug($fifthCategoryID);
								$myposts = get_posts(array('category' => $fifthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-5-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_fifth_page_template ) {
			$fifth_page_id = pulsar_get_ID_by_page_name($pulsar_fifth_content_page);
			$fifth_page_data = get_page( $fifth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($fifth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$fifth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="contact11 '.$fifth_page_id.'">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($fifth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_fifth_page_subtitle_one.'</h1>
									<p>'.$pulsar_fifth_page_description.'</p>
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_fifth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small">
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Down"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_fifth_page_template ) {
			$fifth_page_id = pulsar_get_ID_by_page_name($pulsar_fifth_content_page);
			$page_data = get_page( $fifth_page_id ); 
			echo '
				<div class="section2 black" id="'.$fifth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$fifth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($fifth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_fifth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_fifth_page_subtitle_two.'</h3>
						<p>'.$pulsar_fifth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}

	
	// Sixth Parallax Section
	if (isset($pulsar_sixth_parallax[0]) && $pulsar_sixth_parallax[1]) {
		$page_id_parallax_six = pulsar_get_ID_by_page_name($pulsar_sixth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_six ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_sixth_parallax_template ) {
			echo '<div class="section3-6 black" id="'.$pulsar_sixth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_sixth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-6 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_six )).') 50% 50% no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_sixth_parallax_template ) {
			echo '<div class="section5-6 black" id="'.$pulsar_sixth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_sixth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-6 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_six )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_sixth_parallax_template ) {
			echo '<div class="section7-6 black" id="'.$pulsar_sixth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_sixth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 black hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-6 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_six )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_sixth_parallax_template ) {
			echo '<div class="section9-6 black" id="'.$pulsar_sixth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_sixth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-6 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_six )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_sixth_parallax_template ) {
			echo '<div class="section10-6 black" id="'.$pulsar_sixth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_sixth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-6 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_six )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// Sixth Page Section
	if (isset($pulsar_sixth_content_page[0]) && $pulsar_sixth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_sixth_page_template ) {
			$sixth_page_id = pulsar_get_ID_by_page_name($pulsar_sixth_content_page);
			$page_data = get_page( $sixth_page_id ); 
			echo '
				<div class="section2 black" id="'.$sixth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$sixth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($sixth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
								$sixthCategory = get_cat_slug($sixthCategoryID);
                                $myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-1").click(function(event) {
                                              $(".contentbox-wrapper-about-6").animate({"left":-($("#<?php echo $slug; ?>-6-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_sixth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_sixth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
										$sixthCategory = get_cat_slug($sixthCategoryID);
										$myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_sixth_page_template ) {
			$sixth_page_id = pulsar_get_ID_by_page_name($pulsar_sixth_content_page);
			$sixth_page_data = get_page( $sixth_page_id ); 
			echo '
				<div class="section2 black" id="'.$sixth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$sixth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($sixth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
								$sixthCategory = get_cat_slug($sixthCategoryID);
                                $myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-2").click(function(event) {
                                              $(".contentbox-wrapper-team-6").animate({"left":-($("#<?php echo $slug; ?>-6-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_sixth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_sixth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
										$sixthCategory = get_cat_slug($sixthCategoryID);
										$myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 sixth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_sixth_page_template ) {
			$sixth_page_id = pulsar_get_ID_by_page_name($pulsar_sixth_content_page);
			$sixth_page_data = get_page( $sixth_page_id ); 
			echo '
			<div class="section2 black" id="'.$sixth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$sixth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($sixth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
								$sixthCategory = get_cat_slug($sixthCategoryID);
                                $myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-3").click(function(event) {
                                              $(".contentbox-wrapper-news-6").animate({"left":-($("#<?php echo $slug; ?>-6-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_sixth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_sixth_page_subtitle_two.'</h3>
					<p>'.$pulsar_sixth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-6">
							' ?> <?php
								global $post;
								$counter = 1;
								$sixthCategoryID = get_cat_ID( $pulsar_sixth_content_page_category );
								$sixthCategory = get_cat_slug($sixthCategoryID);
								$myposts = get_posts(array('category' => $sixthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_sixth_page_template ) {
			$sixth_page_id = pulsar_get_ID_by_page_name($pulsar_sixth_content_page);
			$sixth_page_data = get_page( $sixth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($sixth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$sixth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$sixth_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($sixth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_sixth_page_subtitle_one.'</h1>
									'.$pulsar_sixth_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_sixth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_sixth_page_template ) {
			$sixth_page_id = pulsar_get_ID_by_page_name($pulsar_sixth_content_page);
			$page_data = get_page( $sixth_page_id ); 
			echo '
				<div class="section2 black" id="'.$sixth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$sixth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($sixth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_sixth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_sixth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}

	
	// Seventh Parallax Section
	if (isset($pulsar_seventh_parallax[0]) && $pulsar_seventh_parallax[1]) {
		$page_id_parallax_seven = pulsar_get_ID_by_page_name($pulsar_seventh_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_seven ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_seventh_parallax_template ) {
			echo '<div class="section3-7 black" id="'.$pulsar_seventh_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_seventh_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-7 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_seven )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_seventh_parallax_template ) {
			echo '<div class="section5-7 black" id="'.$pulsar_seventh_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_seventh_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-7 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_seven )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_seventh_parallax_template ) {
			echo '<div class="section7-7 black" id="'.$pulsar_seventh_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_seventh_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-7 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_seven )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_seventh_parallax_template ) {
			echo '<div class="section9-7 black" id="'.$pulsar_seventh_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_seventh_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-7 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_seven )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_seventh_parallax_template ) {
			echo '<div class="section10-7 black" id="'.$pulsar_seventh_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_seventh_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-7 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_seven )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// seventh Page Section
	if (isset($pulsar_seventh_content_page[0]) && $pulsar_seventh_content_page[1]) {
		if ("about_team_news_template" == $pulsar_seventh_page_template ) {
			$seventh_page_id = pulsar_get_ID_by_page_name($pulsar_seventh_content_page);
			$page_data = get_page( $seventh_page_id ); 
			echo '
				<div class="section2 black" id="'.$seventh_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$seventh_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($seventh_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
								$seventhCategory = get_cat_slug($seventhCategoryID);
                                $myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-1").click(function(event) {
                                              $(".contentbox-wrapper-about-6").animate({"left":-($("#<?php echo $slug; ?>-6-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_seventh_page_subtitle_one.'</h2>
						<h3>'.$pulsar_seventh_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
										$seventhCategory = get_cat_slug($seventhCategoryID);
										$myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_seventh_page_template ) {
			$seventh_page_id = pulsar_get_ID_by_page_name($pulsar_seventh_content_page);
			$seventh_page_data = get_page( $seventh_page_id ); 
			echo '
				<div class="section2 black" id="'.$seventh_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$seventh_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($seventh_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
								$seventhCategory = get_cat_slug($seventhCategoryID);
                                $myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-2").click(function(event) {
                                              $(".contentbox-wrapper-team-6").animate({"left":-($("#<?php echo $slug; ?>-6-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_seventh_page_subtitle_one.'</h2>
						<h3>'.$pulsar_seventh_page_subtitle_two.'</h3>
						<p>'.$pulsar_seventh_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
										$seventhCategory = get_cat_slug($seventhCategoryID);
										$myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 seventh-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_seventh_page_template ) {
			$seventh_page_id = pulsar_get_ID_by_page_name($pulsar_seventh_content_page);
			$seventh_page_data = get_page( $seventh_page_id ); 

			echo '
			<div class="section2 black" id="'.$seventh_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$seventh_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($seventh_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
								$seventhCategory = get_cat_slug($seventhCategoryID);
                                $myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-3").click(function(event) {
                                              $(".contentbox-wrapper-news-6").animate({"left":-($("#<?php echo $slug; ?>-6-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_seventh_page_subtitle_one.'</h2>
					<h3>'.$pulsar_seventh_page_subtitle_two.'</h3>
					<p>'.$pulsar_seventh_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-6">
							' ?> <?php
								global $post;
								$counter = 1;
								$seventhCategoryID = get_cat_ID( $pulsar_seventh_content_page_category );
								$seventhCategory = get_cat_slug($seventhCategoryID);
								$myposts = get_posts(array('category' => $seventhCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_seventh_page_template ) {
			$seventh_page_id = pulsar_get_ID_by_page_name($pulsar_seventh_content_page);
			$seventh_page_data = get_page( $seventh_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($seventh_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$seventh_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$seventh_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($seventh_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_seventh_page_subtitle_one.'</h1>
									'.$pulsar_seventh_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_seventh_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_seventh_page_template ) {
			$seventh_page_id = pulsar_get_ID_by_page_name($pulsar_seventh_content_page);
			$page_data = get_page( $seventh_page_id ); 
			echo '
				<div class="section2 black" id="'.$seventh_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$seventh_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($seventh_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_seventh_page_subtitle_one.'</h2>
						<h3>'.$pulsar_seventh_page_subtitle_two.'</h3>
						<p>'.$pulsar_seventh_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}

	
	// eighth Parallax Section
	if (isset($pulsar_eighth_parallax[0]) && $pulsar_eighth_parallax[1]) {
		$page_id_parallax_eight = pulsar_get_ID_by_page_name($pulsar_eighth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_eight ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_eighth_parallax_template ) {
			echo '<div class="section3-8 black" id="'.$pulsar_eighth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_eighth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-8 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_eight )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_eighth_parallax_template ) {
			echo '<div class="section5-8 black" id="'.$pulsar_eighth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_eighth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-8 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_eight )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_eighth_parallax_template ) {
			echo '<div class="section7-8 black" id="'.$pulsar_eighth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_eighth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-8 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_eight )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_eighth_parallax_template ) {
			echo '<div class="section9-8 black" id="'.$pulsar_eighth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_eighth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-8 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_eight )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_eighth_parallax_template ) {
			echo '<div class="section10-8 black" id="'.$pulsar_eighth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_eighth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-8 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_eight )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// eighth Page Section
	if (isset($pulsar_eighth_content_page[0]) && $pulsar_eighth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_eighth_page_template ) {
			$eighth_page_id = pulsar_get_ID_by_page_name($pulsar_eighth_content_page);
			$page_data = get_page( $eighth_page_id ); 
			echo '
				<div class="section2 black" id="'.$eighth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$eighth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($eighth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
								$eighthCategory = get_cat_slug($eighthCategoryID);
                                $myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-1").click(function(event) {
                                              $(".contentbox-wrapper-about-6").animate({"left":-($("#<?php echo $slug; ?>-6-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_eighth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_eighth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
										$eighthCategory = get_cat_slug($eighthCategoryID);
										$myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_eighth_page_template ) {
			$eighth_page_id = pulsar_get_ID_by_page_name($pulsar_eighth_content_page);
			$eighth_page_data = get_page( $eighth_page_id ); 
			echo '
				<div class="section2 black" id="'.$eighth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$eighth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($eighth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
								$eighthCategory = get_cat_slug($eighthCategoryID);
                                $myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-2").click(function(event) {
                                              $(".contentbox-wrapper-team-6").animate({"left":-($("#<?php echo $slug; ?>-6-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_eighth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_eighth_page_subtitle_two.'</h3>
						<p>'.$pulsar_eighth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
										$eighthCategory = get_cat_slug($eighthCategoryID);
										$myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 eighth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_eighth_page_template ) {
			$eighth_page_id = pulsar_get_ID_by_page_name($pulsar_eighth_content_page);
			$eighth_page_data = get_page( $eighth_page_id ); 

			echo '
			<div class="section2 black" id="'.$eighth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$eighth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($eighth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
								$eighthCategory = get_cat_slug($eighthCategoryID);
                                $myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-3").click(function(event) {
                                              $(".contentbox-wrapper-news-6").animate({"left":-($("#<?php echo $slug; ?>-6-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_eighth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_eighth_page_subtitle_two.'</h3>
					<p>'.$pulsar_eighth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-6">
							' ?> <?php
								global $post;
								$counter = 1;
								$eighthCategoryID = get_cat_ID( $pulsar_eighth_content_page_category );
								$eighthCategory = get_cat_slug($eighthCategoryID);
								$myposts = get_posts(array('category' => $eighthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_eighth_page_template ) {
			$eighth_page_id = pulsar_get_ID_by_page_name($pulsar_eighth_content_page);
			$eighth_page_data = get_page( $eighth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($eighth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php 
			echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$eighth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$eighth_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($eighth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_eighth_page_subtitle_one.'</h1>
									'.$pulsar_eighth_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_eighth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_eighth_page_template ) {
			$eighth_page_id = pulsar_get_ID_by_page_name($pulsar_eighth_content_page);
			$page_data = get_page( $eighth_page_id ); 
			echo '
				<div class="section2 black" id="'.$eighth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$eighth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($eighth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_eighth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_eighth_page_subtitle_two.'</h3>
						<p>'.$pulsar_eighth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}

	
	// ninth Parallax Section
	if (isset($pulsar_ninth_parallax[0]) && $pulsar_ninth_parallax[1]) {
		$page_id_parallax_nine = pulsar_get_ID_by_page_name($pulsar_ninth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_nine ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_ninth_parallax_template ) {
			echo '<div class="section3-9 black" id="'.$pulsar_ninth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_ninth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_nine )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_ninth_parallax_template ) {
			echo '<div class="section5-9 black" id="'.$pulsar_ninth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_ninth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_nine )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_ninth_parallax_template ) {
			echo '<div class="section7-9 black" id="'.$pulsar_ninth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_ninth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_nine )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_ninth_parallax_template ) {
			echo '<div class="section9-9 black" id="'.$pulsar_ninth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_ninth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_nine )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_ninth_parallax_template ) {
			echo '<div class="section10-9 black" id="'.$pulsar_ninth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_ninth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-9 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_nine )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// ninth Page Section
	if (isset($pulsar_ninth_content_page[0]) && $pulsar_ninth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_ninth_page_template ) {
			$ninth_page_id = pulsar_get_ID_by_page_name($pulsar_ninth_content_page);
			$page_data = get_page( $ninth_page_id ); 
			echo '
				<div class="section2 black" id="'.$ninth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$ninth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($ninth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
								$ninthCategory = get_cat_slug($ninthCategoryID);
                                $myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-1").click(function(event) {
                                              $(".contentbox-wrapper-about-6").animate({"left":-($("#<?php echo $slug; ?>-6-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_ninth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_ninth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
										$ninthCategory = get_cat_slug($ninthCategoryID);
										$myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_ninth_page_template ) {
			$ninth_page_id = pulsar_get_ID_by_page_name($pulsar_ninth_content_page);
			$ninth_page_data = get_page( $ninth_page_id ); 
			echo '
				<div class="section2 black" id="'.$ninth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$ninth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($ninth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
								$ninthCategory = get_cat_slug($ninthCategoryID);
                                $myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-2").click(function(event) {
                                              $(".contentbox-wrapper-team-6").animate({"left":-($("#<?php echo $slug; ?>-6-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_ninth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_ninth_page_subtitle_two.'</h3>
						<p>'.$pulsar_ninth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
										$ninthCategory = get_cat_slug($ninthCategoryID);
										$myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 ninth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_ninth_page_template ) {
			$ninth_page_id = pulsar_get_ID_by_page_name($pulsar_ninth_content_page);
			$ninth_page_data = get_page( $ninth_page_id ); 

			echo '
			<div class="section2 black" id="'.$ninth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$ninth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($ninth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
								$ninthCategory = get_cat_slug($ninthCategoryID);
                                $myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-3").click(function(event) {
                                              $(".contentbox-wrapper-news-6").animate({"left":-($("#<?php echo $slug; ?>-6-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_ninth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_ninth_page_subtitle_two.'</h3>
					<p>'.$pulsar_ninth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-6">
							' ?> <?php
								global $post;
								$counter = 1;
								$ninthCategoryID = get_cat_ID( $pulsar_ninth_content_page_category );
								$ninthCategory = get_cat_slug($ninthCategoryID);
								$myposts = get_posts(array('category' => $ninthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_ninth_page_template ) {
			$ninth_page_id = pulsar_get_ID_by_page_name($pulsar_ninth_content_page);
			$ninth_page_data = get_page( $ninth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($ninth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php  echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$ninth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$ninth_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($ninth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_ninth_page_subtitle_one.'</h1>
									'.$pulsar_ninth_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_ninth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_ninth_page_template ) {
			$ninth_page_id = pulsar_get_ID_by_page_name($pulsar_ninth_content_page);
			$page_data = get_page( $ninth_page_id ); 
			echo '
				<div class="section2 black" id="'.$ninth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$ninth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($ninth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_ninth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_ninth_page_subtitle_two.'</h3>
						<p>'.$pulsar_ninth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}

	
	// tenth Parallax Section
	if (isset($pulsar_tenth_parallax[0]) && $pulsar_tenth_parallax[1]) {
		$page_id_parallax_ten = pulsar_get_ID_by_page_name($pulsar_tenth_parallax); // 123 should be replaced with a specific Page's id from your site, which you can find by mousing over the link to edit that Page on the Manage Pages admin page. The id will be embedded in the query string of the URL, e.g. page.php?action=edit&post=123.
		$page_data = get_page( $page_id_parallax_ten ); // You must pass in a variable to the get_page function. If you pass in a value (e.g. get_page ( 123 ); ), WordPress will generate an error. By default, this will return an object.
			
		if ("parallax_one_template" == $pulsar_tenth_parallax_template ) {
			echo '<div class="section3-10 black" id="'.$pulsar_tenth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_tenth_parallax.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote hide-for-520">'. $page_data->post_title .'</div>
				<div class="quote1-pattern">
					<div class="quote1-shape"></div>
				</div>
			</div>
			
			<style>
			.section3-10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_ten )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_two_template" == $pulsar_tenth_parallax_template ) {
			echo '<div class="section5-10 black" id="'.$pulsar_tenth_parallax.'">
				
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_tenth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				
				<div class="quote2 hide-for-520">
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/bordertop.png" width="942" height="12" alt="Border">
					</div>
					<h1>"'. $page_data->post_title .'"</h1>
					<div class="quoteborder hide-for-small">
						<img src="'.get_template_directory_uri().'/images/quote2/borderbottom.png" width="367" height="12" alt="Bottom">
					</div>
				</div>
				<div class="quote2-pattern">
					<div class="quote2-shape"></div>
				</div>
			</div>
			
			<style>
			.section5-10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_ten )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_three_template" == $pulsar_tenth_parallax_template ) {
			echo '<div class="section7-10 black" id="'.$pulsar_tenth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
						<li><a href="#'.$pulsar_tenth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote3 hide-for-520">'. $page_data->post_title .' //<span class="gray"> '. $page_data->post_content .'</span></div>
			</div>
			
			<style>
			.section7-10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_ten )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_four_template" == $pulsar_tenth_parallax_template ) {
			echo '<div class="section9-10 black" id="'.$pulsar_tenth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_tenth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote4 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote4-pattern"></div>
			</div>
			
			<style>
			.section9-10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_ten )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
		if ("parallax_five_template" == $pulsar_tenth_parallax_template ) {
			echo '<div class="section10-10 black" id="'.$pulsar_tenth_parallax.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$pulsar_tenth_parallax.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="quote5 hide-for-520">
					<p>'. $page_data->post_title .'</p>
					<img class="hide-for-small" src="'.get_template_directory_uri().'/images/quote5/seperator.png" alt="Seperator">
					<p>'. $page_data->post_content .'</p>
				</div>
				<div class="quote10-pattern"></div>
			</div>
			
			<style>
			.section10-10 {
				background:#000 url('.wp_get_attachment_url(get_post_thumbnail_id( $page_id_parallax_ten )).') 50% 0 no-repeat fixed;
			}
			</style>';// echo the title
		}
	} else {
		echo '';
	}
	
	// tenth Page Section
	if (isset($pulsar_tenth_content_page[0]) && $pulsar_tenth_content_page[1]) {
		if ("about_team_news_template" == $pulsar_tenth_page_template ) {
			$tenth_page_id = pulsar_get_ID_by_page_name($pulsar_tenth_content_page);
			$page_data = get_page( $tenth_page_id ); 
			echo '
				<div class="section2 black" id="'.$tenth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$tenth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($tenth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
								$tenthCategory = get_cat_slug($tenthCategoryID);
                                $myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-1").click(function(event) {
                                              $(".contentbox-wrapper-about-6").animate({"left":-($("#<?php echo $slug; ?>-6-1").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-1" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_tenth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_tenth_page_subtitle_two.'</h3>
						<p>'.$pulsar_sixth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-about-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
										$tenthCategory = get_cat_slug($tenthCategoryID);
										$myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-1" class="contentbox">	
                                                <div class="article1">
                                                    <div class="view2 third-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo wp_trim_words( get_the_content(), 18 ); ?></p>
                                                    <div class="button2"><a href="<?php the_permalink(); ?>" >More</a>
                                                    </div>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("services_template" == $pulsar_tenth_page_template ) {
			$tenth_page_id = pulsar_get_ID_by_page_name($pulsar_tenth_content_page);
			$tenth_page_data = get_page( $tenth_page_id ); 
			echo '
				<div class="section2 black" id="'.$tenth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$tenth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($tenth_page_id); ?><?php echo'</h1>
						<div id="nav2" class="hide-for-small">
							<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
								$tenthCategory = get_cat_slug($tenthCategoryID);
                                $myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-2").click(function(event) {
                                              $(".contentbox-wrapper-team-6").animate({"left":-($("#<?php echo $slug; ?>-6-2").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-2" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
							</ul>
						</div>
						<h2>'.$pulsar_tenth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_tenth_page_subtitle_two.'</h3>
						<p>'.$pulsar_tenth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-6">
									' ?> <?php
										global $post;
										$counter = 1;
										$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
										$tenthCategory = get_cat_slug($tenthCategoryID);
										$myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
										foreach( $myposts as $post ) :	setup_postdata($post); ?>
											<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-2" class="contentbox">	
                                                <div class="article2">
                                                    <div class="view2 tenth-effect">
                                                    
                                                    	<?php if ( has_post_thumbnail()) {
															$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
															echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '">';
															echo get_the_post_thumbnail($post->ID, 'about-news-team-thumbnail'); 
															echo '</a>
															<div class="mask2 hide-for-small">
																<ul class="gallery clearfix hide-for-small">
																	<li>
																		<a href="' . $large_image_url[0] . '" class="info2" rel="prettyPhoto" title="' . the_title_attribute('echo=0') . '" >Read More</a>
																	</li>
																</ul>
                                                    		</div>';
														} ?>
                                                    </div>
                                                    <h2><a href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); echo $large_image_url[0] ?>" rel="prettyPhoto"><?php the_title(); ?></a></h2>
                                                    <h3><?php echo get_post_meta($post->ID, 'pulsar_subtitle', true); ?></h3>
                                                    <p><?php echo get_the_content(); ?></p>
                                                </div>
                                            </div>
										<?php endforeach; ?>
									<?php echo'
								</div>			
							</div>		
						</div>
					</div>
				</div>';// echo the title
		}
		if ("portfolio_template" == $pulsar_tenth_page_template ) {
			$tenth_page_id = pulsar_get_ID_by_page_name($pulsar_tenth_content_page);
			$tenth_page_data = get_page( $tenth_page_id ); 

			echo '
			<div class="section2 black" id="'.$tenth_page_id.'">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$tenth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div class="about-us-main">
					<h1>' ?><?php echo get_the_title($tenth_page_id); ?><?php echo'</h1>
					<div id="nav4" class="hide-for-small">
						<ul>' ?>
                            
								<?php
                                global $post;
								$counter = 1;
								$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
								$tenthCategory = get_cat_slug($tenthCategoryID);
                                $myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
                                foreach( $myposts as $post ) :	setup_postdata($post); ?>
									<script type="text/javascript">
                                        jQuery(function($) {
                                            $("#<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>6-3").click(function(event) {
                                              $(".contentbox-wrapper-news-6").animate({"left":-($("#<?php echo $slug; ?>-6-3").position().left)}, "slow");
											  return false;
                                            });
                                        });
                                    </script>
                                    <li><a id="<?php echo $slug; ?>6-3" href="#">0<?php echo $counter ?></a></li>
                                    <?php $counter++; ?>
                                <?php endforeach; ?>
                                <?php echo'
						</ul>
					</div>
					<h2>'.$pulsar_tenth_page_subtitle_one.'</h2>
					<h3>'.$pulsar_tenth_page_subtitle_two.'</h3>
					<p>'.$pulsar_tenth_page_description.'</p>
				</div>
				
				<div class="divider hide-for-small"></div>
				<div class="divider2 hide-for-small"></div>
				
				<div class="content_6 content">
					<div id="wrap25">
						<div id="content4">
							<div class="contentbox-wrapper-news-6">
							' ?> <?php
								global $post;
								$counter = 1;
								$tenthCategoryID = get_cat_ID( $pulsar_tenth_content_page_category );
								$tenthCategory = get_cat_slug($tenthCategoryID);
								$myposts = get_posts(array('category' => $tenthCategoryID, 'posts_per_page'  => 500));
								foreach( $myposts as $post ) :	setup_postdata($post); ?>
								<div id="<?php $post_data = get_post($post->ID, ARRAY_A);
    $slug = $post_data['post_name']; echo $slug; ?>-6-3" class="contentbox">
									<div class="article1">
										<div class="view33 third-effect">
                                        	<?php if ( has_post_thumbnail()) {
												$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												echo '<a href="' . $large_image_url[0] . '" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '">';
												echo get_the_post_thumbnail($post->ID, 'portfolio-thumbnail'); 
												echo '</a>
												<div class="mask33 hide-for-small">
													<ul class="gallery clearfix">
														<li>
															<a href="' . $large_image_url[0] . '" class="info33" rel="prettyPhoto[ourgallery]" title="' . the_title_attribute('echo=0') . '" >Read More</a>
														</li>
													</ul>
												</div>';
											} ?>
										</div>
										<h3 class="hide-for-small"><a href="<?php echo $large_image_url[0] ?>" class="info33" rel="prettyPhoto[ourgallery]" title="<?php echo  the_title_attribute('echo=0') ?>" ><?php the_title(); ?></a></h3>
									</div>
								</div>
								<?php endforeach; ?>
							<?php echo'
								
							</div>			
						</div>		
					</div>
				</div>
			</div>';// echo the title
		}
		if ("contact_template" == $pulsar_tenth_page_template ) {
			$tenth_page_id = pulsar_get_ID_by_page_name($pulsar_tenth_content_page);
			$tenth_page_data = get_page( $tenth_page_id ); 
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($tenth_page_id), 'full');
			echo'
            	<style>
					.section11 {
						background:#000 url('?> <?php echo $large_image_url[0] ?><?php echo') no-repeat;
					}
				</style> ' ?>
			<?php  echo '<div class="section11 black">
				<div class="arrowdown">
					<nav>
						<ul>
							<li><a href="#'.$tenth_page_id.'"><img src="'.get_template_directory_uri().'/images/down-arrow.png" alt="Down"></a></li>
						</ul>
					</nav>
				</div>
				<div id="'.$tenth_page_id.'" class="contact11">
					<div class="contactW">
						<div class="contactWrap">
							<div class="contactTitle hide-for-small">' ?><?php echo get_the_title($tenth_page_id); ?><?php echo'</div>
							<div class="contactContent">
								
								<div class="contactInfo">
									<h1>'.$pulsar_tenth_page_subtitle_one.'</h1>
									'.$pulsar_tenth_page_description.'
								</div>
								
								<div class="contactForm">
									<h1>'.$pulsar_tenth_page_subtitle_two.'</h1>
									<form method="post" action="'.get_template_directory_uri().'/contact.php">
										<span>Name:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/user.png" width="40" height="31" alt="Enter your Name">
										<input type="text" id="name" class="name" name="contactname" value=""/></label>
										<span>Email:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/mail.png" width="40" height="31" alt="Enter your Email">
										<input type="text" id="email" class="email" name="email" value=""/></label>
										<span>Subject:</span>
										<label class="input"><img src="'.get_template_directory_uri().'/images/subject.png" width="40" height="31" alt="Enter your Subject">
										<input type="text" id="subject" class="subject" name="subject" value=""/></label>
										<span>Message:</span>
										<textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
										<input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
									</form>
								</div>
							</div>
						</div>
						<div class="arrowback hide-for-small" >
							<nav>
								<ul>
									<li><a href="#homepage"><img src="'.get_template_directory_uri().'/images/arrow-back.png" width="99" height="68" alt="Go Back Up"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="quote11-pattern"></div>
				</div>
			</div>';// echo the title
		}
		if ("single_page_template" == $pulsar_tenth_page_template ) {
			$tenth_page_id = pulsar_get_ID_by_page_name($pulsar_tenth_content_page);
			$page_data = get_page( $tenth_page_id ); 
			echo '
				<div class="section2 black" id="'.$tenth_page_id.'">
				
					<div class="arrowdown">
						<nav>
							<ul>
								<li><a href="#'.$tenth_page_id.'"><img src="'.get_template_directory_uri().'/images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
							</ul>
						</nav>
					</div>
					
					<div class="about-us-main">
						<h1>' ?><?php echo get_the_title($tenth_page_id); ?><?php echo'</h1>
						<h2>'.$pulsar_tenth_page_subtitle_one.'</h2>
						<h3>'.$pulsar_tenth_page_subtitle_two.'</h3>
						<p>'.$pulsar_tenth_page_description.'</p>
					</div>
					
					<div class="divider hide-for-small"></div>
					<div class="divider2 hide-for-small"></div>
					
					<div class="content_6 content">
						<div id="wrap22">
							<div id="content">
								<div class="contentbox-wrapper-team-20 hide-for-small">
									<div id="content_scroll_6" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
								<div class="contentbox-wrapper-team-20 show-for-small">
									<div id="content_scroll" class="content-scroll">
											' ?>
											<div class="single-page-content">
												<?php echo apply_filters('the_content', $page_data->post_content); ?>
											</div>
											<?php echo'
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';// echo the title
		}
	} else {
		echo '';
	}
	
get_footer(); ?>
