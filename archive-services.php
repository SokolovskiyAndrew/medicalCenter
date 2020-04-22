<?php get_header() ?>

<div>
  <?php get_template_part( 'template_parts/hero-common'); ?>
</div>

<section class="services">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						
            <?php
              echo '<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">';
              $args = array(
                  'taxonomy' => 'services_tabs',
                  'hide_empty'=> 1,
                  'orderby' => 'count',
                  'order' => 'DESC'
              );
              $categories = get_categories($args);
            
              foreach($categories as $category) { 
                  echo 
                  
                      '<li class="nav-item text-left">
                        <a href="#'.$category->slug.'" role="tab" data-toggle="tab" class="nav-link py-4">    
                        '.$category->name.'
                        </a>
                      </li>';
              }
              echo '</ul>';
                ?>
            <!-- Sidebar -->
            <div class="widgetschedule">
                <?php dynamic_sidebar('service_sidebar') ?>
            </div>
					</div>
					<div class="col-md-8">
          <?php  echo '<div class="tab-content ">';
              foreach($categories as $category) { 
                  echo '<div class="tab-pane  contic" id="' . $category->slug.'">';
                  $the_query = new WP_Query(array(
                      'post_type' => 'Services',
                      'posts_per_page' => 100,
                      'category_name' => $category->slug
                  ));
                  if ( $the_query->have_posts() ) : 
                  while ( $the_query->have_posts() ) : 
                  $the_query->the_post(); ?>
                <div class="cardBx">
		          <div class="imgBx">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('image'); ?>" alt="">
                </a>
	          	</div>
              <div class="contentBx">
                <h2><?php the_field('title'); ?></h2>
                <!-- <p><?php the_field('description') ?></p> -->
                <div><?php the_field('price') ?></div>
                <div><?php the_field('estimated_time') ?></div>
              <a href="<?php the_permalink() ?>"><span>Детальніше</span></a>
              <div><?php the_tags() ?></div>
              </div>
            </div>
                <?php endwhile; 
                endif; 
                wp_reset_postdata();
                echo '</div>';
              } 
              echo '</div>';
              
              ?>
					</div>
				</div>
    	</div>
    </section>
   
<?php get_footer() ?>

