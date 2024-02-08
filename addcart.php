<?php
include("navbar.php");
	$conn = mysqli_connect('sql210.infinityfree.com','if0_35813412','M9paDGdIboY','if0_35813412_ecommerce');
    $x=$_GET['itemid'];
    $name=$_SESSION["username"];
    $query1="SELECT cid
             FROM customer
             WHERE cname LIKE '$name'";
    $result=mysqli_query($conn,$query1);
    $row=mysqli_fetch_assoc($result);
    $custid=$row["cid"];

    $insertOrder="INSERT INTO orders (cid,itemid,shipaddress,total)
                  SELECT cid, itemid, caddress,price
                  FROM customer, item
                  WHERE cid='$custid' AND itemid='$x'";
    $result=mysqli_query($conn,$insertOrder);
    header('Location: cart.php?cid='.$custid.'');
?>