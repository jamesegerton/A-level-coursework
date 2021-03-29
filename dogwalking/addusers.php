
<?php
array_map("htmlspecialchars", $_POST);
include_once("connection.php"); 
header('Location: users.php');
echo $_POST["username"]."<br>";
echo $_POST["email"]."<br>";
echo $_POST["address"]."<br>";
echo $_POST["password"]."<br>";

$stmt = $conn->prepare("INSERT INTO public_users (UserID,username,email,password)VALUES (null,:username,:email,:password)");

$stmt->bindParam(':email', $_POST["email"]); 
$stmt->bindParam(':password', $_POST["password"]);
$stmt->bindParam(':username', $_POST["username"]);
$stmt->execute();
$conn=null;


echo("submitted")
?>
