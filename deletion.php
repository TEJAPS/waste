
<?php
include "connections.php";

$findd=$_GET['del'];


$sql="delete from iproduct where name = '".$findd." '";	

if ($conn->query($sql) === TRUE) {
echo " record deleted successfully";
unset($_POST['delete_btn']);
// header("location:dashboard.com");
                             }
else {
echo "did't delete";
  }
?>













