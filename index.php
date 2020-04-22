<?php

/**
 * Main template file
 * 
 * PHP version 7.2
 * 
 * @category  Template
 * @package   PackageName
 * @author    Original Author <author@example.com>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */
?>

<?php get_header(); ?>

  <div>
    <?php get_template_part( 'template_parts/hero-main'); ?>
  </div>
  <div>
  <?php get_template_part( 'template_parts/about-section'); ?>
  </div>

<?php get_footer(); ?>