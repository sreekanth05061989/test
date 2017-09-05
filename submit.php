<?php

$x=$_POST('firstname');
$y=$_POST('lastname');
$Servername = "localhost";
$username ="root";
$password ="";
$dbname="db1";
//create connection_aborted
$conn =new mysql1($Servername,$username,$password,$dbname);

//check connection_aborted

if($conn->connect_error){
	die("Connection failed:" .$conn->connect_error);
}
echo "connected successfully";
$sql="INSERT INTO 'user' ('fname' ,'lname') VALUES ('$x', '$y')";

if($conn->query($sql)==TRUE){
	echo "How record create successfully";
}
else{
	echo "Erro:" .sql . "<br>" .$conn->error;
	}
	$conn->close();
	?>
	