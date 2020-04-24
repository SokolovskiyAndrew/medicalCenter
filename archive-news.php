<?php get_header() ?>

<div class="container-fluid servic-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>../assets/images/streto.jpg)">
<div class="service-overlay"></div>    
<div class="container">
        <div class="row">
            <h3 class="title"><?php wp_title(); ?></h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="the-news">
                <div class="row">
                       
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <div class="">
                            <div class="the-news-wrap">
                                <div class="post-thumbnail col-12">
                                <img src="<?php the_field('image'); ?>" alt="">
                                   <!-- <div class="ribbon-2"></div> -->
                                   <!-- <div id="ribbon-container">
                                      <a href="#" id="ribbon">here's your link</a>
                                   </div> -->
                                   <div class="ribbon"><?php the_category('/'); ?></div>
                                </div>

                                <header class="entry-header">
                                    <h3><?php the_title() ?></h3>
                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Date: </label><a href="#"> <?php the_time('m/d/Y' ) ?></a></div>

                                        <div class="posted-by"><label>By: </label><a href="#"> <?php the_author(); ?></a></div>
                                        <div><?php the_tags('Теги: ', ' | '); ?></div>
                                        <div class="post-comments"><a href="#">2 Comments</a></div>
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
    <?php get_template_part( 'template_parts/pagination'); ?>

<?php get_footer() ?>