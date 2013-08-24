<?php
 /*
  *  Template Name: Blog
  */
?>


<?php 
    get_header();
    require('disqus.php');
    require('disqus_vals.php');
    $disqus = new Disqus($disqus_vars['user_api_key'], $disqus_vars['forum_api_key']);
?>

    <div class="content container_16 clearfix">
        
        <div id="main" class="grid_12">
   
   <!-- START OF DYNAMIC POST SUMMARY CODE for index.php-->
         <?php
         
            function isSuper($cat){
               
               $super = get_category(get_cat_ID('Super'));
               //$featured = get_category(get_cat_ID('Featured'));
               $recap = get_category(get_cat_ID('Recap'));

               //return has_category($featured, $post) && has_category($recap, $post);
               return has_category($super, $post);
               
            }
            
            function isSummary($cat){
               
               $featured = get_category(get_cat_ID('Featured'));
               $recap = get_category(get_cat_ID('Recap'));
               
               return has_category($featured,$post) || has_category($recap,$post);
               
            }
            
            $args = array(
                'numberposts' => 9,
                'category__in' => array(get_category_id('Recap'),get_category_id('Featured')),
                'order_by' => 'post_date',
                'order' => 'DESC' );

            $post_array = get_posts($args);
            
            $start_position = 0;
            $end_position = 0;
            
            foreach($post_array as $post):
               $ao = '';
               $grid = 'grid_4';
               $categories = get_the_category($post->ID);

               if(isSuper($categories)){
                  $grid = 'grid_8';
                    // }else if(isSummary($categories)){
                    } else {
                  $grid = 'grid_4';
               }   
               
               if(isSuper($categories) && $start_position % 3 == 2){
                  $start_position++;
                  $end_position++;
               }
               
               if(isSuper($categories)){
                  $end_position += 1;
               }
               
               if(($start_position % 3) == 0){
                  $ao = 'alpha';
               }
               
               if(($end_position % 3) == 2){
                  $ao = 'omega';
               }   
               
               $start_position = $end_position;

               $my_url = get_permalink();
               $thread = $disqus->get_thread_by_url($my_url);
               $num_comments = 0;
               if ($thread != "") {
                  $num_posts_obj = $disqus->get_num_posts(array($thread->id));
                  // bug with disqus: need to fix later...
                  foreach ($num_posts_obj as $num_posts) {
                     $num_comments = $num_posts[1];
                  }
               }
            ?>
      
         <div class="<?php echo $grid  ?> post boxshadow <?php echo $ao ?>">
                <div class="thumbnail">
                    <div class="tags">
               
               <?php foreach($categories as $category): 
                  if(($category->cat_name!='Featured') && ($category->cat_name!='Super')){ ?>
                  <span class="tag textshadow"><?php echo $category->name ?></span>   
               <?php } endforeach ?>
               </div>
                    <div class="bigdate">
                        <h3 class="textshadow"><?php echo get_the_date('M') ?><br /><?php echo get_the_date('d') ?></h3>
                    </div>
          <?php  $values = get_post_custom_values('thumbnail');
         $thumbnail_top = get_post_custom_values('thumbnail_top');
         $thumbnail_left = get_post_custom_values('thumbnail_left');
         if ($values[0] != '') {
          ?>
                    <img src="<?php echo $values[0] ?>" <?php if ($thumbnail_top[0] != '' || $thumbnail_left[0] != '') { echo " style='top:-".$thumbnail_top[0]."px; left:-".$thumbnail_left[0]."px'"; }?> />
          <?php } ?>
                </div>
                <div class="inner">
                    <h3><a href="<?php the_permalink(); ?>"><?php echo $post->post_title?></a></h3>
                    <h5><?php echo 'By ' . get_usermeta($post->post_author,'first_name') . ' '. get_usermeta($post->post_author,'last_name'); ?> <?php if ($num_comments > 0) { echo ' | ' . $num_comments  . ' comment'; if ($num_comments != 1) { echo 's'; }}  ?></h5>
                    <p><?php echo strip_shortcodes(strip_tags($post->post_content)); ?></p>
                    <div class="gonext">&raquo;</div>
                </div>
            </div>
      
      <?php  
            $start_position++;
            $end_position++;
      
      ?>
      <?php endforeach ?>
      
      <!-- END OF DYNAMIC POST SUMMARY CODE -->

        </div>
        

    </div> <!-- end .container -->

<?php get_footer(); ?>
