<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Hostel";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$email=$_POST['email'];
$addo=$_POST[''];
$addt=$_POST[''];

$sql="insert into Enrollment(firstname,lastname,age,addressline1,addressline2,phone,email,) values('$fname','$lname','$age','$addo','$addt','$phome','$email')";

if($conn->query($sql)==TRUE)
{
header('Location: index.php'); 
}
else
{
echo"Error ".$conn->error;
}
$conn->close();
?>