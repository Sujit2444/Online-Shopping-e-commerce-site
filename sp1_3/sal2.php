<?php 
session_start(); 
	
if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
	}

		
		//echo $a;
	$sal="";
	if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
	} else {
		if($_SESSION['admin'] == 0) {
			session_destroy();
			header("Location: login.php");
		}
$mysqli = new mysqli("localhost", "root", "","sp1");	

$a=$_GET['emp_id'];
$_SESSION["editsal"]=$a;
//echo $a;
$sq2 = "SELECT * FROM users";
$result = mysqli_query($mysqli, $sq2)or die(mysqli_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["cgpa"]. "<br>";
		if($row["id"]==$a){
	$sal=$row["salary"];
			
       }
	   
	}
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>OnlineShooping</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
//session_start();
//if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    //header("Location: login.php");
	//}?>
		<body>
	<div class="signup">
		<?php require 'template/header1.php'; ?>
		<?php require 'template/menu1.php'; ?>
<div class="maincontent">
			<div class="content">
				<div>
					<?php 
						if(isset($_SESSION['a_p_message'])) {
							echo $_SESSION['a_p_message'];
							unset($_SESSION['a_p_message']);
						}
					 ?>

					 </div>
					 
					 	<b>edit salary </b>
				<form action="sal3.php" method="POST" enctype = "multipart/form-data">
					<div>
						<label>Salary</label><br>
						<input type="text" name="name" placeholder="Salary" value=<?php echo $sal ?> /><br>
					</div>
					
				<div>
						<input type="submit" name="Submit" value="Update Salary" />
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