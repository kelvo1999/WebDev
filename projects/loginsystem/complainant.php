<!DOCTYPE html>
<html>
<head>
	<title>complainant</title>
</head>
<body>
<?php
//including the database connection file
include_once("connect.php");
if(isset($_POST['Submit'])) {
$name = $_POST['name'];
//$caseDate = $_POST['caseDate'];
//$caseTime = $_POST['caseTime'];
//$victimGender = $_POST['victimGender'];
$caseDescription = $_POST['caseDescription'];
//checking empty fields
if(empty($name) || /*empty($caseDate) || empty($caseTime) || empty($victimGender) || */ empty($caseDescription)) {
if(empty($name)) {
echo "<font color='red'>Name field is empty.</font><br/>";
}
/*
if(empty($caseDate)) {
echo "<font color='red'>Date field is empty.</font><br/>";
}
if(empty($caseTime)) {
echo "<font color='red'>Time field is empty.</font><br/>";
}
if(empty($victimGender)) {
echo "<font color='red'>Gender field is empty.</font><br/>";
}
*/
if(empty($caseDescription)) {
	echo "<font color='red'>Case description field is empty.</font><br/>";
	}
//link to the previous page
echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else {
// if all the fields are filled (not empty)
//insert data to database
$CreateSql = "INSERT INTO cases(name,/*caseDate,caseTime,victimGender,*/caseDescription) VALUES('$name',/*'$caseDate','$caseTime','$victimGender',*/'$caseDescription')";
$res = mysqli_query($connection, $CreateSql);  
//display success/failure message
if($res){
echo "<font color='green'>Case report successfull we will communicate.";
}else{
echo "Sorry but it seems your case is not uploaded try again";
}
//echo "<br/><a href='report.php'>Report</a>";
echo "Success";
}
}


?>
</body>
</html>