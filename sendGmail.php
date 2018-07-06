<?php include 'connections.php';



		//getting values of all attributes of particular prouct name
		$sql = "SELECT *  from iproduct where product_name like '".$_POST['r3']."'";		
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
			{
			while($row = $result->fetch_assoc())
			    {
					$name_of_organisation=$row['name_of_organisation'];
					$product_name=$row['product_name'];
					$product_description=$row['product_description'];
					$linkages_to_research=$row['linkages_to_research'];
					$stage_of_development=$row['stage_of_development'];
					$business_offer=$row['business_offer'];
					$attach_with_mail=$row['attach_with_mail'];
					$invitations_to=$row['invitations_to'];
					$description=$row['description'];
					$date_added=$row['date_added'];
					$country=$row['country'];
					$innovator_name=$row['innovator_name'];
					$category=$row['category'];
					$cost=$row['cost'];
					// echo $date_added;
				}//while
			}//if
			$sql = "SELECT *  from iloginusers where username like '".$_POST['r1']."'";		
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
			{
			while($row = $result->fetch_assoc())
			    {
					$customer_email=$row['email'];
					$customer_username=$row['username'];
					$customer_contactno=$row['contact_no'];
					$customer_city=$row['city'];
					$customer_state=$row['state'];
					$customer_country=$row['country'];
					
					// echo $date_added;
				}//while
			}//if

?>
<!DOCTYPE HTML>
<html>


<head>
<meta charset="utf-8">
<title>Innovation Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">
</head>

<body >



</body>


</html>