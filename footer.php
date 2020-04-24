<?php 

/**
 * Footer 
 * 
 * PHP version 7.2
 * 
 * @category  Template_Part
 * @package   Theme
 * @author    Original Author <author@example.com>
 * @copyright 1997-2005 The PHP Group
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link      http://pear.php.net/package/PackageName
 */?>

<footer class="container-fluid footer">
  <div class="container">
    <div class="row footer-block">
      <div class="footer-about col-lg-3">
        <div>
          <a class="footer-logo" href="<?php bloginfo('url')?>">
            <img src="<?= get_template_directory_uri() ?>  '/assets/images/logo_top.png'" alt="logo"> 
          </a>
        </div>
        <div class="info">
        Навчально-практичний Центр Слуху при Івано-Франківському Національному Медичному Університеті створений з метою удосконалення системи освіти та підготовки молодих лікарів в галузі отології, а також покращення якості життя людей з вадами слуху. 
        </div>
      </div> <!-- footer-about -->
      <div class="footer-block-sidebar col-lg-9">
      <?php dynamic_sidebar('footer_sidebar') ?>
      </div>
<!-- footer-sidebar -->
    </div> <!-- row -->
  </div> <!-- container -->
</footer> <!-- fluid -->

<!-- Loader circle -->

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

 <?php wp_footer();?>
</body>
</html>