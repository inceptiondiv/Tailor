<!DOCTYPE HTML> 
<html>
<head>
	<title>OrderForm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://connect.facebook.net/en_US/all.js"></script>

</head>
<body> 


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$SMagreed = $shoulderFullLen = $chest = $waist = $BlouseLen = $SleeveLen = "";

if(isset($_POST["submit2"])){

$dbhost = 'localhost';
$dbuser = 'AdTailors';
$dbpass = 'FHTB5Z232LKWPPAu';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"adtailors");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$shoulderFullLen = $_POST['shoulderFullLen'];
$chest = $_POST['chest'];
$waist = $_POST['waist'];
$BlouseLen = $_POST['BlouseLen'];
$SleeveLen = $_POST['SleeveLen'];
$BlouseImg = $_POST['filep'];
echo $shoulderFullLen , $chest , $waist , $BlouseLen , $SleeveLen;


// mysql_select_db('adtailors',$conn);
$sql = "UPDATE bmeasurements ".
       "SET blouseImg='$BlouseImg', SleeveLen = '$SleeveLen' , ShoulderLen = '$shoulderFullLen' , Chest = '$chest' , Waist = '$waist' , BlouseLen = '$BlouseLen'".
       "WHERE Mid  = 1" ;

mysqli_query($conn,$sql);
echo "Updated data successfully\n";

}

else{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<hr style="margin-top:4%;margin-left:3%;margin-right:3%"/><div id="BHtabs" style="margin-left:3%;margin-right:3%">
<ul  class="nav nav-tabs" role="tablist" id="mytab">
<li style="background:#BCBCBC;" class="active"><a href="#SampleMeasurement" role="tab"data-toggle="tab" >Give sample Blouse</a></li>
<li style="background:#BCBCBC;margin-left:1px;" ><a href="#EnterMeasurements" role="tab" data-toggle="tab">Enter Measurments for Blouse</a></li></ul>	
	<div  class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="SampleMeasurement">
		<input type="checkbox" name="SMagreed"> I will send the sample blouse during the pickup.
		</input>
		<br />
<input name="submit1" type="submit" id="submit1" value="sumbit1">
	</div>
	<div role="tabpanel" class="tab-pane" id="EnterMeasurements">
			<h2>Fill in the following details :</h2>
 			<table>
 			<tr><td>Shoulder Full length: </td><td><input type="text" name="shoulderFullLen" /></td></tr>
   			<tr><td>Chest: </td><td><input type="text" name="chest" /></td></tr>
   			<tr><td>Waist: </td><td><input type="text" name="waist" /></td></tr>
   			<tr><td>Blouse Length: </td><td><input type="text" name="BlouseLen" /></td></tr>
 	  	 	<tr><td>Sleeve Length: </td><td><input type="text" name="SleeveLen" /></td></tr>
 	   		<tr><td>Upload Design : </td><td><input type="file" name="filep" size=250></td></tr>
   			</table>
   			<input type="submit" name="submit2" value="Save"> 
	</div>
	</div>
</hr>
</form>


<?php
}
?>
</body>
</html>