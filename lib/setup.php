<?php 
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

//Reduce the_excerpt length
add_filter( 'excerpt_length', function(){
	return 40;
} );

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

function setup_theme () {
    register_nav_menus([
        'header_menu' => ( 'Header Menu' ),
        'footer_menu' => ('Footer Menu')
        ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array ('post'));
    add_image_size('post-thumb', 750, 400, true);
}

//Add widget
function register_my_widgets(){
  register_sidebar( array(
    'name'          => 'Top service taxonomy',
    'id'            => "top_service_taxonomy",
    'description'   => '',
    'class'         => '',
    'before_widget' => null,
    'after_widget'  => null,
  ) );
  register_sidebar( array(
    'name'          => 'Service_sidebar',
    'id'            => "service_sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => null,
    'after_widget'  => null,
  ) );
  register_sidebar( array(
    'name'          => 'Blog_sidebar',
    'id'            => "blog_sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widgetschedule">',
    'after_widget'  => "</div>\n",
  ) );
  register_sidebar( array(
    'name'          => 'Footer_sidebar',
    'id'            => "footer_sidebar",
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="footersidebar">',
    'after_widget'  => "</div>\n",
  ) );
};