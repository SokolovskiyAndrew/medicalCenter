<?php get_header() ?>

<div>
  <?php get_template_part( 'template_parts/hero-common'); ?>
</div>

<div class="container-fluid services">
  <div class="container">
    <div class="row">
            <div class="cardBx">
		          <div class="imgBx">
		            <img src="<?php the_field('image'); ?>" alt="">
	          	</div>
              <div class="contentBx">
                <h2><?php the_field('title'); ?></h2>
                <p><?php the_field('description') ?></p>
                <div><?php the_field('price') ?></div>
                <div><?php the_field('estimated_time') ?></div>
              <a href="<?php the_field('button') ?>"><span>ЗАПИС</span></a>
              </div>
            </div>
        </div>
    </div>
  </div>
</div>

<?php get_footer() ?>

