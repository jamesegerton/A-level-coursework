<?php
session_start();
if(isset($_SESSION['name']))
{
    unset($_SESSION['name']);
}
header("Location: page1.php");
?>
