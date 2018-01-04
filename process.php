<?php
$connect=mysqli_connect('localhost','root','','findstay');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="output.css" media="all" />
	<link rel="stylesheet" type="text/css" href="pcss.css" media="all" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
</head>
<body>
	 <div id="particles-js"></div>
            <div class="count-particles">
       <span class="js-count-particles">--
         </span> particles </div> <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
         <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
        
         <script src="index.js"></script>
		<?php
		// create a variable
		$name=$_POST['name'];
		$Email=$_POST['email'];
		$Address=$_POST['address'];
		$contact=$_POST['contact'];
		$area=$_POST['area'];
		$type=$_POST['type'];
		
		//Execute the query
		
		/*mysqli_query($connect,"INSERT INTO user_details(Name,Email,Address,Contact)
						VALUES('$name','$Email','$Address','$contact')");*/
		$sql = "SELECT A_ID FROM area where A_Name='$area'";
		$result = mysqli_query($connect, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				$area_id=$row["A_ID"];
			}
		} 
		else 
		{
			echo "0 results";
		}

		$sql = "SELECT T_ID FROM property_type where T_Name='$type'";
		$result = mysqli_query($connect, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				$type_id=$row["T_ID"];
			}
		} 
		else 
		{
			echo "0 results";
		}

		$sql = "SELECT property_details.P_Name,property_details.P_Address,property_details.Image,
				property_details.Room_Image,owner_details.O_Name,owner_details.O_Contact ,
				owner_details.O_Address from property_details inner join owner_details on 
				property_details.OW_ID=owner_details.O_ID where property_details.Area_ID=$area_id 
				and property_details.Type_ID=$type_id ";
		$result = mysqli_query($connect, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				/*echo " Property name : ".$row["P_Name"]."<br>"."Property address :".$row["P_Address"]."<br>";
				echo " Owner name : ".$row["O_Name"]."<br>"."Owner address :".$row["O_Address"]."<br>";
				echo " Contact : ".$row["O_Contact"]."<br>";*/
				
				?>
				
				<div class="container polaroid">
					<img src="<?php echo $row["Image"]; ?>" alt="Avatar" class="image">
					<div class="overlay">
						<div class="text"><img src="<?php echo $row["Room_Image"]; ?>" alt="Norway" style="heigth:100%"></div>
					</div>
					<div class="info">
						<p><?php echo " <b>"."Property name : "."</b>".$row["P_Name"]."<br>"."Property address :".$row["P_Address"]."<br>";?></p>
						<p><?php echo "<b>"."Owner name : "."</b>".$row["O_Name"]."<br>"."Owner address :".$row["O_Address"]."<br>";?></p>
						<p><?php echo "<b>"." Contact : "."</b>".$row["O_Contact"]."<br>";?></p>
					</div>
				</div>
			<?php	
			}
		} 
		else 
		{
			echo "0 results";
		}
		mysqli_close($connect);
		?>
		</body>
</html>

