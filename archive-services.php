<?php get_header() ?>

<div class="container-fluid servic-header" 
style="background-image: url(<?php echo get_template_directory_uri(); ?>../assets/images/streto-1.jpg)"
>
<div class="service-overlay"></div>    
  <div class="container">
      <h3 class="title">Послуги</h3>
  </div>
</div>

<section class="services">
  <div class="container">
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
                echo '</ul>'; ?>
                <div class="widgetschedule">
                    <?php dynamic_sidebar('service_sidebar') ?>
                </div>
				</div>
					<div class="col-md-8">
          <?php  echo '<div class="tab-content ">';
              foreach($categories as $category) { 
                  echo '<div class="tab-pane" id="' . $category->slug.'">';
                  echo '<div class="contic">';
                  $the_query = new WP_Query(array(
                      'post_type' => 'Services',
                      'posts_per_page' => 100,
                      'category_name' => $category->slug
                  ));
                  if ( $the_query->have_posts() ) : 
                  while ( $the_query->have_posts() ) : 
                  $the_query->the_post(); ?>
              

            <div class="service-box">
              <div class="service-box-overlay">
                <div class="description">
                  <!-- <i class="fas fa-plus box-title-plus"></i> -->
                  <i class="fas fa-info-circle box-title-plus"></i>
                  <p><?php the_field('description') ?></p>
                </div>
              </div>
              <div class="box-title">
              
              <h4><?php the_field('title'); ?></h4>
              </div>
              <div class="box-info">
                <div><i class="fas fa-dollar-sign card-icon"></i><?php the_field('price') ?></div>
                <div><i class="fas fa-stopwatch card-icon"></i><?php the_field('estimated_time') ?></div>
                <div>
                  <a href="<?php the_permalink() ?>">Запис <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
                <?php endwhile; 
                endif; 
                wp_reset_postdata();
                echo '</div>';
                echo '</div>';
              } 
              echo '</div>';
              
              ?>
					</div>
				</div>
    	</div>
    </section>
   
<?php get_footer() ?>

