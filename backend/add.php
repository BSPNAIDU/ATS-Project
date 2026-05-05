<?php
include 'db.php';

$type = $_POST['type'];
$category = $_POST['category'];
$amount = $_POST['amount'];

$sql = "INSERT INTO transactions(type,category,amount)
        VALUES('$type','$category','$amount')";

if(mysqli_query($conn, $sql)){
    header("Location: ../frontend/dashboard.html");
} else {
    echo "Error";
}
?>