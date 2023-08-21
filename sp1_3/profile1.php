<?php 
session_start(); 
	if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
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
				<?php 
				$mysqli = new mysqli("localhost", "root","","sp1");
		
		$sq2 = "SELECT * FROM products";
$catId="";

	
$result2 = mysqli_query($mysqli, $sq2)or die(mysqli_error());
if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["cgpa"]. "<br>";
		if($row["quantity"]<=10){
		$catId=$row["category_id"];
		$sq5="SELECT * FROM category";
		$result5 = mysqli_query($mysqli, $sq5)or die(mysqli_error());
if (mysqli_num_rows($result5) > 0) {
    // output data of each row
    while($row5 = mysqli_fetch_assoc($result5)) {
if($row5["id"]==$catId){		
//echo $row5["category_name"];
//echo '<h1 style="color:red;">'." YOUR ".$row["name"]." IS ".$row["quantity"].'</h1>'."</br>"; 
	  //AT ".$row5["category_name"] ."

echo '<script language="javascript">';
echo 'alert("YOUR '.$row["name"].'  AT  '.$row5["category_name"].'  IS  '.$row["quantity"].'")';
echo '</script>';	
break;
	 }
	       }
         }
	   }
	   
	}
}
							
				if ($mysqli->connect_errno) {
				   header("Location: signup.php");
				}

				$sql = "SELECT * FROM users WHERE id ='".$_SESSION['userId']."'";

					$user = $mysqli->query($sql);

					$check_user = $user->num_rows;

				 if ($check_user > 0) {

				    /* fetch object array */
				    while ($profile = $user->fetch_object()) { 
						 echo "<h3>Hello ! ".$profile->firstName .' '.$profile->lastName."</h3>
						 <div class='profile'>
						 	<p><b>Email : </b>".$profile->email."</p>
						 	<p><b>BirthDate : </b>".$profile->birthday."</p>
						 	<p><b>Gender : </b>";

					 			if($profile->gender == 1) {
					 				echo "Male";
					 			} else {
					 				echo "Female";
					 			}

						 	echo "</p>
						 	<p><b>Phone : </b>".$profile->phone."</p>
							<p><b>Salary : </b>".$profile->salary."</p>
						 </div>";
				  		}
					} 
				?> 
			
				
			</div>
			<div class="sidebar">
			<?php// require 'template/sidemenu.php'; ?>
			    
			</div>
		</div>	
		<div class="footer">
			<p>&copy; AIUB 2016</p>
		</div>
	</div>


</body>
</html>