<?php 
	include "config.php";
	session_start();
	  
	include "cart.class.php";
	$cart=new Cart();
  
	$data=[];
	$sql="select * from products";
	$res=$con->query($sql);
	if($res->num_rows>0){
		while($row=$res->fetch_assoc()){
			$data[]=$row;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">  
    <title>Micson Florist and Balloon</title>
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
    <style>
        .image-container {
        position: relative;
        text-align: center;
        }

        .centered-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
        /* Additional styles as needed */
        }
    </style>
</head>

<body>
    <?php include "navbar.php"; ?>
    
    <div class="image-container">
        <img src="images/index.jpg" width="1580" height="600" alt="Description">
        <div class="centered-text">
            We provide same day delivery to ensure your last-minute gift arrives on time!<br>
            SAME DAY DELIVERY
        </div>
    </div>
    
    <?php include "footer.php"; ?>

</body>

</html>
