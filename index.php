<?php
ob_start();
  //include header.php file
  include('header.php');
?>

<?php

  /* include banner area */
  include('Template/_banner-area.php');
  /* include banner area */

 /* include top-sale section */
  include('Template/_top-sale.php');
  /* include top-sale section */

   /* include special price section */
   include('Template/_special-price.php');
   /* include special price section */

   /* include banner-ads section */
   include('Template/_banner-ads.php');
   /* include banner-ads section */

   /* include new-phones section */
   include('Template/_new-phones.php');
   /* include new-phones section */

   /* include blogs area */
   include('Template/_blogs.php');
   /* include blogs area */

?>

<?php
  //include footer.php file
  include('footer.php');
?>      