
<?php 
session_start(); 
	if (!isset($_SESSION['userId']) && !isset($_SESSION['admin'])) { 
	    header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OnlineShooping</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    </head>
    
<body style="font-family: Arial;border: 0 none;">
    <!-- where the chart will be rendered -->
	<div class="signup">
		<?php require 'template/header1.php'; ?>
		<?php require 'template/menu1.php'; ?>
		<div class="maincontent">
			<div class="content">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
 
    <?php
 
    //include database connection
  //  include 'db_connect.php';
$mysqli= mysqli_connect("localhost", "root", "","sp1");
//$sq1 = "SELECT * FROM userdata1";
//$result = mysqli_query($conn, $sq1)or die(mysqli_error());

//if (mysqli_num_rows($result)> 0){
	 
//	while($row = mysqli_fetch_assoc($result)) { 
    //query all records from the database
    $query = "select * from products";
 
    //execute the query
    $result = $mysqli->query( $query );
 
    //get number of rows returned
    $num_results = $result->num_rows;
 
    if( $num_results > 0){
 
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
        <!-- load api -->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>
 
        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
			['name','quantity'],
                    <?php
                    while( $row = $result->fetch_assoc() ){
                        extract($row);
					echo "['{$name}',{$quantity}],";
                    }
                    ?>
                ]);
 
                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Product Quantuty:"});
            }
 
            google.setOnLoadCallback(drawVisualization);
        </script>
    <?php
 
    }else{
        echo "empty database.";
    }
    ?>
    
</body>
</html>