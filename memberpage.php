<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php');
?>



<!DOCTYPE html>
<html>
<head>
<title>Baseu Grocery Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-phone"></i>+60 84-367 300</li>
        <li><i class="fa fa-envelope-o"></i>baseugrocer@gg.com</li>

      </ul>
    </div>
    <div class="fl_right">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Baseu Grocery Store</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Phone :</strong><br> +60 84-367 300</li>
        <li><strong>Tax :</strong><br> +60 84-367 301</li>
        <li><a class="btn" href="login.php">Admin Login</a></li>
        <li><a class="btn" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </header>
</div>

<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <ul class="clear">

      <li class="active"><a href='view_customer.php'>Customer</a></li>
      <li class="active"><a href='view_employee.php'>Employee</a></li>
      <li class="active"><a href='view_product.php'>Product</a></li>
      <li class="active"><a href='view_supplier.php'>Supplier</a></li>
      <li class="active"><a href='view_supplying.php'>Stock</a></li>
      <li class="active"><a href='view_feedback.php'>View Feedback</a></li>
      <li class="active"><a href='view_payment.php'>View Payments</a></li>
    </ul>
  </nav>
</div>

<div class="wrapper row3">
  <main class="hoc container clear">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    				<h2>Admin page - Welcome <?php echo $_SESSION['username']; ?></h2>
    		</div>
    	</div>
    </div>
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">Contacts with Baseu</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          University Street &amp; 101, Sibu, Sarawak, 96000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +60 84-367 300<br></li>
        <li><i class="fa fa-fax"></i> +60 84-367 301</li>
        <li><i class="fa fa-envelope-o"></i> baseugrocer@gg.com</li>
      </ul>
    </div>

    <div class="one_third">
      <h6 class="title">Newsletter</h6>
      <p class="btmspace-30">Keep in touch with the Baseu Grocery News and receive the latest updates of new products</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Baseu Grocery Store</a></p>

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
