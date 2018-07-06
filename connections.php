<?php 
	
	
	$servername = "vikranth";
	$uname = "root";
	$pwd = "Vo0xFlDeauPqbeY5";
	$dbname = "cfg_prac";
	$conn=new mysqli($servername ,$uname,$pwd,$dbname);

	echo "xyz";
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
    } 
    else{
        echo "conneced successfully";
    }
?>