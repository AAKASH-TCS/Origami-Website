<?php
$Username = filter_input(INPUT_POST, 'Username');
$Phone_number = filter_input(INPUT_POST, 'Phone_number');
$Address = filter_input(INPUT_POST, 'Address');
$Email = filter_input(INPUT_POST, 'Email');
$id_no = filter_input(INPUT_POST, 'id_no');
if (!empty($Username)){
if (!empty($Phone_number)){
if (!empty($Address)){
if (!empty($Email)){
if (!empty($id_no)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "products";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO shoppings (Username, Phone_number, Address, Email,id_no)
values ('$Username','$Phone_number','$Address','$Email','$id_no')";
if ($conn->query($sql)){
echo "Your Order placed Successfully! please wait for next 48 hrs we will contact you shortly.";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
}
else{
echo "fill the fields";
die();
}
}
else{
echo "fill the fields";
die();
}
?>