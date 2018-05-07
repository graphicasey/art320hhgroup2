<?php get_header(); ?>

<div id = body>
   <?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>
          <div class="post"> 
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <div class="entry">	
                    <?php the_content(); ?>
                    <?php
                    $current_date ="";
                    $count_posts = wp_count_posts();
                    $nextpost = 0;
                    $published_posts = $count_posts->publish;
                    $myposts = get_posts(array('posts_per_page'=>$published_posts)); 
	               foreach($myposts as $post) :
                         $nextpost++;
                         setup_postdata($post);
                         $date = get_the_date("F Y");   
                         if($current_date!=$date): 
                              if($nextpost>1): ?> 
                                   </ol>
                              <?php endif; ?> 
                              
                              <?php $current_date=$date;
                         endif; ?>
                    <?php endforeach; wp_reset_postdata(); ?>
                    </ol>
              </div>
          </div>
     <?php endwhile; ?>
<?php endif; ?>
</div><!---End Body-->

<?php get_footer(); ?>