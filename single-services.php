<?php get_header() ?>

<div>
  <?php get_template_part( 'template_parts/hero-common'); ?>
</div>

<section class="service">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="container">
					<div class="row">
         <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <div class="col-md-8">
                <div class="service-block">
                <img src="<?php the_field('image'); ?>" alt="">
                <p><?php the_field('description') ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <h2><?php the_field('title'); ?></h2>
                <div><?php the_field('price') ?></div>
                <div><?php the_field('estimated_time') ?></div>
              <a href="<?php the_field('button') ?>"><span>Запис</span></a>
              <div><?php the_tags() ?></div>
              </div>
                <?php endwhile; 
                      endif; 
                wp_reset_postdata(); ?>
                </div>
                </div>
					</div>
				</div>
    	</div>
    </section>
   
<?php get_footer() ?>

