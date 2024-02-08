<?php
	$conn = mysqli_connect('sql210.infinityfree.com','if0_35813412','M9paDGdIboY','if0_35813412_ecommerce');
	$x=$_GET['itemid'];
    $y=$_GET['cid'];
	$query="DELETE FROM orders
		    WHERE itemid='$x'";
	$result=mysqli_query($conn,$query);
    header('location: cart.php?cid='.$y.'');
?>