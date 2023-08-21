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
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
div.footer1{
   position: fixed;
    bottom:99;
     left: 250px;
    width: 300px;
}
div.con{
	overflow: hidden;
	margin-top: 100px;
}
div.footer2{
	position: relative;
    left: 180px;
}
</style>


</head>
<body>
	<div class="signup">
		<?php require 'template/header1.php'; ?>
		<?php require 'template/menu1.php'; ?>
		

		<div class="maincontent">
			


			<div class="content">
			
		<div class="container">
      
    <form action="sell2.php" class="form-horizontal" method="POST">
        <fieldset>
		<div class="footer1">
                     <div class="controls input-append date form_datetime">
				    
					<input size="16" type="text" name="a" value="" readonly> 
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i></span>
               </div> 
	        
				<?php echo "TO:";?>
	               <div class="controls input-append date form_datetime">
			
				<input size="16" type="text" name="b" value="" readonly> 
                <span class="add-on"><i class="icon-remove"></i></span>
				<span class="add-on"><i class="icon-th"></i></span></br>
		</div>            	
		<div class="footer2">
    <input type="submit" name="Submit" value="select" />					
</div>		 
</fieldset>		 
		 
	</form>
	</div>
	
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });

</script>	    			
			
			
		</div>
			<div class="sidebar">
			<?php// require 'template/sidemenu.php'; ?>
			    
			</div>
		</div>
        <div class="con">		
		<div class="footer">
			
			<p style="color:blue;">&copy; AIUB 2016</p>
		
		</div>
	</div>

</div>
</body>
</html>