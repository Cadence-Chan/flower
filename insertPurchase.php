<?php


$conn = new mysqli("localhost", "root", "", "flowershop");


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

$product= $_POST['product'];

$quantity = $_POST['quantity'];

$totalPrice = $_POST['totalPrice']; 

$customerName = $_POST['name'];

$customerAddress = $_POST['address'];

$customerEmail = $_POST['email'];


$sql = "INSERT INTO purchase (product, quantity, totalPrice, customerName, customerAddress, customerEmail)

VALUES ('$product', '$quantity', '$totalPrice', '$customerName', '$customerAddress', '$customerEmail')";

if ($conn->query($sql) === TRUE) {

echo "Purchase recorded successfully💕!";

} else {

echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();
?>

