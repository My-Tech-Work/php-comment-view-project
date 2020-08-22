<?php
$name = $_POST["text1"];
$mail = $_POST["text2"];
$com = $_POST["text3"];
$con = mysqli_connect("localhost","root","","user");
if($con)
{
	$insert = "INSERT INTO comment(name,email,data) VALUES('$name','$mail','$com')";
	mysqli_query($con,$insert);
}
else
{
cout<<"error";
}
?>
