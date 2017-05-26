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

<?php
//include header template
require('layout/footer.php');
?>
