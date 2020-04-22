<?php get_header() ?>

<div>
  <?php get_template_part( 'template_parts/hero-common'); ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="the-news">
                <div class="row">
                <?php
    $arg = array( 
    'post_type' => 'post',
    'posts_per_page' => 5,
    'orderby' => 'date',
    );
    $myPost = new WP_Query($arg);
    ?>
    <?php if($myPost->have_posts()): while($myPost->have_posts()): $myPost->the_post(); ?>
                        <div class="">
                            <div class="the-news-wrap">
                                <div class="post-thumbnail col-12">
                                   <?php the_post_thumbnail('post-thumb') ?>
                                   <div class="ribbon"><?php the_category('/'); ?></div>
                                </div>

                                <header class="entry-header">
                                    <h3><?php the_title() ?></h3>
                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date">Дата:<a href="<?php the_permalink() ?>"> <?php the_time('d F Y' ) ?></a></div>
                                        <div class="posted-by">Автор:<a href="<?php the_permalink() ?>"> <?php the_author(); ?></a></div>
                                        <div><a href="#"><?php the_tags('Теги: ', ' | '); ?></a></div>
                                        <div class="post-comments">2 Comments</div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p><?php the_excerpt() ?></p>
                                </div>

                                <footer class="entry-footer mt-5">
                                    <a class="" href="<?php the_permalink(); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </footer>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif;  ?>    
                                      
                          <!-- PAGINATION -->

                          <div class="col-12">
                            <?php wp_pagenavi(); ?>
                            </div>
                                <!-- PAGINATION -->         
                        </div>
                </div>
            </div>
       

            <!-- SIDEBAR -->

            <div class="col-12 col-lg-4">
                <div class="sidebar">
                <?php dynamic_sidebar('blog_sidebar') ?>
                </div>
            </div>

            <!-- SIDEBAR -->

        </div>
    </div>

<?php get_footer() ?>