
<?php

include 'connections.php';	

if(isset($_POST['go'])){
    $i1=$_POST['name'];
    $i2=$_POST['mail'];
    $image = $_FILES['image']['name'];	
    $i8=$_POST['pwd'];						
    $i10=$_POST['date'];
    echo $i10;
    $sql="insert into iproduct values ('$i1','$i2','$image','$i8',STR_TO_DATE('".$_POST['date']."', '%Y-%m-%d'))";
  
    $target = "images/".basename($_FILES['image']['name']);	
    if ($conn->query($sql) === TRUE and  move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
		{
    echo "New record created successfully";
		$msg = "Image uploaded successfully";
	unset($_POST['go']);
	//  header("location:insertion.php");
	
		}
	else 
		{
    echo "did't insert";
		$msg = "Failed to upload image";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        name : <input type="text" name="name"/><br/>
       mail:  <input type="text" name="mail"/><br/>
        image:<input type="file" name="image"/><br/>
        password: <input type="pwd" name="pwd"/><br/>
        date : <input type="date" name="date"/><br/>
        <input type="submit" value="go" name="go"/>
    </form>
</body>
</html>















