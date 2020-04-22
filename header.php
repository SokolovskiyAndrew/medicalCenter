<?php

/**
 * Header template part
 * 
 * PHP version 7.2
 * 
 * @category  CategoryName
 * @package   PackageName
 * @author    Original Author <author@example.com>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <?php wp_head(); ?>
</head>
<body>
<header class="container-fluid header">
  <div class="container-fluid">
    <div class="container">
      <div class="row header-row-flex">
        <div class="header-info">
          <div class="header-info_block">
          <i class="fas fa-home header-icon"></i>
            <div>
              Івано-Франківськ<br>
              вул. Гетьмана Мазепи, 133
            </div>
          </div>
          <div class="header-info_block">
          <i class="fas fa-phone-alt header-icon"></i>
            <div>
              <a href="+38 095 00 44 55 6">+38 095 00 44 55 6</a> </br>
              <a href="+38 098 00 44 55 6">+38 098 00 44 55 6</a>
            </div>
          </div>
          <div class="header-info_block">
          <i class="fas fa-calendar-alt header-icon"></i>
            <div>
              Пн.- Сб.  10:00 - 19:00 </br>
              Нд.- За домовленістю.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar-top">
  <div class="container">
    <div class="row menu-row">
        <div>
          <a class="navbar-logo" href="<?php bloginfo('url')?>">
            <img src="<?= get_template_directory_uri() ?>  '/assets/images/logo_top.png'" alt="logo"> 
          </a>
        </div>
      <div class="main-menu" id="ftco-nav">
          <?php
            wp_nav_menu( [
              'theme_location'  => 'header_menu',
              'container' => 'ul',
              'menu_class' => 'navbar-menu',
              'menu_id'         => '',
            ] );
            ?>
      </div>
      <!-- <div class="header-search">
        <input type="text" placeholder="Пошук по сайту" class="js-search">
        <i class="fas fa-search"></i>
      </div> -->
      <div class="hamburger">
        <span class="line top"></span>
        <span class="line middle"></span>
        <span class="line bottom"></span>
      </div>
        </div>
    </div>
  </nav>
</header>
		
		
      
	