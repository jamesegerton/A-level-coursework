<?php
session_start();
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM public_users WHERE username= :username" );
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    if($row['password']== $_POST['password']){
        $_SESSION['name']=$row["username"];

        header('Location: page1.php');
        die();
    }else{
        header('Location: login.php');
        die();
    }
}

header('Location: login.php');

$conn=null;
?>