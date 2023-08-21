<!DOCTYPE html>
<html>
<head>
<style>
div.relative{
    position: relative;
    left: 530px;
 
}

</style>
</head>
<body>
<div class="header">
<div class="logo">
		<img src="images/logo.jpg"/>
	</div>	
	
<div class="login">	
<div class="relative">		
		
			<?php if (isset($_SESSION['userId'])) { ?>

			
	 <a  href="logout.php">Logout</a>	
			<?php } else {?>
	
	
	<a href="login.php">Sign In</a>
    <a href="signup.php">Sign Up</a>
			<?php } ?>
	
	</div> 
	</div>
	</div>
</body>
</html>