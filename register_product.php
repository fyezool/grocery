<?php require('includes/config.php');


//if form has been submitted process it
if(isset($_POST['submit']))
{

//very basic validation
	if(strlen($_POST['name']) < 3)

	{
		$error[] = 'Product name is too short.';
	} else

	{
		$stmt = $db->prepare('SELECT pro_name FROM products WHERE pro_name = :name');
		$stmt->execute(array(':name' => $_POST['name']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

	}

	//if no errors have been created carry on
	if(!isset($error))
	{

		try
		{

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO products (pro_type,pro_name,pro_price,pro_description,quantity) VALUES (:type, :name, :price, :description, :quantity)');
			$stmt->execute(array(
				':type' => $_POST['type'],
				':name' => $_POST['name'],
				':price' => $_POST['price'],
				':description' => $_POST['description'],
				':quantity' => $_POST['quantity'],

			));



			//redirect to index page
			header('Location: view_product.php?action=joined');
			exit;

		//else catch the exception and show the error.
		}
		catch(PDOException $e)
		{
		    $error[] = $e->getMessage();
		}

	}

}



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

      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="memberpage.php">Admin Page</a></li>
      <li class="active"><a href="view_product.php">View product</a></li>

    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->

		<div class="container">

			<div class="row">

			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form" method="post" action="" autocomplete="off">
						<h2>Product registration</h2>
						<hr>

						<?php
						//check for any errors
						if(isset($error)){
							foreach($error as $error){
								echo '<p class="bg-danger">'.$error.'</p>';
							}
						}

										//if action is joined show sucess
						if(isset($_GET['action']) && $_GET['action'] == 'joined'){
							echo "<h2 class='bg-success'>Registration successful.</h2>";
						}

						?>

						<div class="form-group">
							<input type="text" name="type" id="type" class="form-control input-lg" placeholder="Product Type" value="<?php if(isset($error)){ echo $_POST['type']; } ?>" tabindex="1">
						</div>
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Product Name" value="<?php if(isset($error)){ echo $_POST['name']; } ?>" tabindex="1">
						</div>
						<div class="form-group">
							<input type="text" name="price" id="price" class="form-control input-lg" placeholder="Product Price" value="<?php if(isset($error)){ echo $_POST['price']; } ?>" tabindex="1">
						</div>
						<div class="form-group">
							<textarea name="description" rows="5" id="description" class="form-control input-lg" placeholder="Product Description" value="<?php if(isset($error)){ echo $_POST['description']; } ?>" tabindex="1"></textarea>
						</div>
						<div class="form-group">
							<input type="text" name="quantity" id="quantity" class="form-control input-lg" placeholder="Product Quantity" value="<?php if(isset($error)){ echo $_POST['quantity']; } ?>" tabindex="1">
						</div>
						<div class="row">
							<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
						</div>
					</form>
				</div>
			</div>

		</div>


    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


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
