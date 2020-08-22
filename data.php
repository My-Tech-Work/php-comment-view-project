<?php
$con = mysqli_connect("localhost","root","","user");
$result = mysqli_query($con,"SELECT name,data FROM comment");
$num = mysqli_num_rows($result);
$name = array();
$comment = array();
$i=0;
while($row = mysqli_fetch_array($result)) 
{
$name[$i]=$row["name"];
$comment[$i]=$row["data"];
$i++;
}
echo json_encode($i);
echo json_encode($name);
echo json_encode($comment);
?>
