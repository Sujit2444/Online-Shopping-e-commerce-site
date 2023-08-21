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
		<?php require 'template/menu1.php'; ?>
		<div class="maincontent">
			<div class="content">
			
<?php
$val1="";
$val2="";
$val3="";
$val4="";
$val5="";
$income=0;
$a=$_POST["a"];
$b=$_POST["b"];
//echo $a."</br>";
//echo $b;

if($a=="" || $b==""){
	echo "you must provide all info!"."</br>";
	
	
	
}
else{
	$track="";
		$date1=explode(" ",$a);
$date2=explode("-",$date1[0]);
$time1=explode(":",$date1[1]);		
//echo $date2[0].$date2[1].$date2[2]."</br>";	
//echo $time1[1]."</br>";
$date3=explode(" ",$b);
$date4=explode("-",$date3[0]);
$time2=explode(":",$date3[1]);

	
	$conn = mysqli_connect("localhost", "root", "","sp1");
	
$sq2 = "SELECT * FROM payment";
$result = mysqli_query($conn, $sq2)or die(mysqli_error());
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        
		if($row["accountrec"]!=0){
		$track=$row["signup_date"];

$datearr=explode(" ",$track);	
//echo $datearr2[0]."</br>";
$date5=explode("-",$datearr[0]);
$time3=explode(":",$datearr[1]);

$val11=$date5[0]-$date2[0];
$val12=$date5[1]-$date2[1];
$val13=$date5[2]-$date2[2];
$val14=$time3[0]-$time1[0];
$val15=$time3[1]-$time1[1];


if($val12<0){
$val12=12+$val12;
$val11=$val11-1;
	
	
}
if($val13<0){
	$val13=30+$val13;

	$val12=$val12-1;
if($val12<0){
$val12=$val12+12;
$val11=$val11-1;
}

}
if($val14<0){
	$val14=24+$val14;
$val13=$val13-1;
if($val13<0){
$val13=$val13+30;
$val12=$val12-1;

if($val12<0){
$val12=$val12+12;
$val11=$val11-1;
}
}	
}
if($val15<0){
		
		$val15=60+$val15;
$val14=$val14-1;
if($val14<0){
$val14=$val14+24;
$val13=$val13-1;
if($val13<0){
$val13=$val13+30;
$val12=$val12-1;

if($val12<0){
$val12=$val12+12;
$val11=$val11-1;
}
}
}
}	
/*echo $val11."</br>";
echo $val12."</br>";
echo $val13."</br>";
echo $val14."</br>";
echo $val15."</br>";
	
	*/
	
$val16=$date4[0]-$date5[0];
$val17=$date4[1]-$date5[1];
$val18=$date4[2]-$date5[2];
$val19=$time2[0]-$time3[0];
$val20=$time2[1]-$time3[1];


if($val17<0){
$val17=12+$val17;
$val16=$val16-1;
	
	
}
if($val18<0){
	$val18=30+$val18;

	$val17=$val17-1;
if($val17<0){
$val17=$val17+12;
$val16=$val16-1;
}

}
if($val19<0){
	$val19=24+$val19;
$val18=$val18-1;
if($val18<0){
$val18=$val18+30;
$val17=$val17-1;

if($val17<0){
$val17=$val17+12;
$val16=$val16-1;
}
}	
}
if($val20<0){
		
		$val20=60+$val20;
$val19=$val19-1;
if($val19<0){
$val19=$val19+24;
$val18=$val18-1;
if($val18<0){
$val18=$val18+30;
$val17=$val17-1;

if($val17<0){
$val17=$val17+12;
$val16=$val16-1;
}
}
}
}
	
		if(($val11>=0)&&($val12>=0)&&($val13>=0)&&($val14>=0)&&($val15>=0)){
	
	//echo $date2[2]."</br>";
	//echo $date5[2]."</br>";
	
	
	//echo "okk";
		
		if(($val16>=0)&&($val17>=0)&&($val18>=0)&&($val19>=0)&&($val20>=0)){
		//if(($date5[0]<=$val6)&&($date5[1]<=$val7)&&($date5[2]<=$val8)&&($time3[0]<=$val9)&&($time3[1]<=$val10)){
		
		echo "user email:".$row["email"]."</br>";
				echo "Pproduct name:".$row["productname"]."</br>";
				echo "balance receieved:".$row["accountrec"]."</br>";
				echo "transection date:".$row["signup_date"]."</br>"."</br>";
		
		echo "transected By:".$row["emp"]."</br>"."</br>";
		$income=$income+$row["accountrec"];
		
		
		}
		
	}
		
	

	   
	   }
}
if($income !=0){
echo " total income of this month is:".$income."</br>";
}
else{
	echo "nothing found!"."</br>";
}
}	

mysqli_close($conn);
	
	
	
	
	
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