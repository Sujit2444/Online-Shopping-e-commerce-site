
<!DOCTYPE html>
<html>
<head>
	<title>OnlineShooping</title>
	<style>
table, th, td {
    border: 1px solid black;
}
</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
session_start();
if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
	}?>
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
<?php


	$conn = mysqli_connect("localhost", "root", "","sp1");
	
$sq2 = "SELECT * FROM users";
$result = mysqli_query($conn, $sq2)or die(mysqli_error());
//echo "order product:"."</br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
	?>
	<table>
  <tr>
    <th>First Name</th>
    <th>LastName</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Phone</th>
	<th>Salary</th>
	<th>SignUpDate</th>
	<th>Option</td>
	</tr>
	<?php
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["cgpa"]. "<br>";
	
		if($row["role"]==2){?>
	<tr>
	 <td><?php echo $row["firstName"]; ?> </td>
   <td><?php echo $row["lastName"];?> </td>
 <td><?php echo $row["email"];?> </td>  
  <td><?php if($row["gender"]==1){
				echo "Male";
				}
				else{
				echo "Female";	
				}?> </td>
		 <td><?php echo $row["phone"];?> </td>
 <td><?php echo $row["salary"];?> </td>		 
  <td><?php echo $row["signup_date"];?> </td>		
  
  <td><a href="sal2.php?emp_id=<?php echo $row["id"] ?>">edit salary</a></td>
  </tr>
 

<?php
				/*echo "name:".$row["firstName"]." ".$row["lastName"] ."</br>";
				echo "email:".$row["email"]."</br>";
				if($row["gender"]==1){
				echo "gender:"."Male"."</br>";
				}
				else{
				echo "gender:"."Female"."</br>";	
				}
				echo "phone:".	$row["phone"]."</br>";
				echo "signup date:".$row["signup_date"]."</br>"."</br>";
		*/
	   
	   }
}
}	
mysqli_close($conn);
?>
</table>
<a href="profile.php">GO BACK</a>
</div>
</div>	
		<div class="footer">
			<p>&copy; AIUB 2016</p>
		</div>
	</div>

</body>
</html>