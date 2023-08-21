<?php 
session_start(); 

if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
	}
$mysqli = new mysqli("localhost", "root", "","sp1");
							if ($mysqli->connect_errno) {
							   die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
							}
?>
<!DOCTYPE html>
<html>
<head>
	<title>OnlineShooping</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="signup">
		<?php require 'template/header1.php'; ?>
		<?php require 'template/menu.php'; ?>
		<div class="maincontent">
			<div class="content">
				<b>Add product </b>
				<form action="postAddproduct.php" method="POST" enctype = "multipart/form-data" name="mfm">
					<div>
						<label>Product name</label><br>
						<input type="text" name="name" placeholder="Product name" /><br>
					</div>
					<div>
						<label>Product quantity</label><br>
						<input type="number" name="quantity" placeholder="Product quantity" /><br>	
					</div>
					<div>
						<label>Product Buying price</label><br>
						<input type="number" name="price1" placeholder="Product Buying price" /><br>	
					</div>
					<div>
						<label>Product Selling price</label><br>
						<input type="number" name="price" placeholder="Product Selling price" /><br>	
					</div>
					<div>
						<label>Product discount</label><br>
						<input type="number" name="discount" placeholder="Product discount" /><br>	
					</div>
					<div>
						<label>Product category</label><br>
						<?php
							
							// for all category select
							$sql = "SELECT * FROM category";
                   
							$category = $mysqli->query($sql);
        
							$check_category = $category->num_rows;
						 ?>
						<select name="category_id" >
						<?php if ($check_category > 0) { 	
						    /* fetch object array */
						    while ($categories = $category->fetch_object()) { ?>
					    		<option value="<?php echo $categories->id; ?>"><?php echo $categories->category_name; ?></option>
				  			<?php }
						}?>
						</select>
					
					
					
					</div>
					<div>
						<label>Supplier Name</label><br>
						<?php
                            $sq2="SELECT * FROM supplier";
							
                            $supplier = $mysqli->query($sq2);
							$check_supplier = $supplier->num_rows;
						 ?>
						<select name="supplier_id" >
						<?php if ($check_supplier > 0) { 	
						    /* fetch object array */
						    while ($suppliers = $supplier->fetch_object()) { ?>
					    		<option value="<?php echo $suppliers->id; ?>"><?php echo $suppliers->name; ?></option>
				  			<?php }
						}?>
						</select>
					
					</div>
					
					
					<div>
						<label>Product Image</label><br>
						<input type="file" name="image" placeholder="Product Image" /><br>	
					</div>
					<div>
						<input type="checkbox" name="unique" value="1"> Unique
					</div>
					<div>
						<input type="submit" name="Submit" value="Add Product" />
					</div>
				</form>
				
			</div>
			
		</div>	
		<div class="footer">
			<p>&copy; AIUB 2016</p>
		</div>
	</div>
	

</body>
</html>