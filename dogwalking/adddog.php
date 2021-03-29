<html>
<head>
<title></title>
<body>

<?php
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	switch($_POST["role"]){
		case "small":
			$role=0;
			break;
			case "medium":
			$role=1;
			break;
		case "big":
			$role=2;
			break;
	}
	$stmt = $conn->prepare("INSERT INTO dogs1 (UserID,Dog_Name,Dog_Breed,Special_Needs,Lead,Role)VALUES (NULL,:Dog_Name,:Dog_Breed,:Dog_Size,:Special_Needs,:Lead,:role)");
	$stmt->bindParam(':Dog_Name', $_POST["Dog_Name"]);
	$stmt->bindParam(':Dog_Breed', $_POST["Dog_Breed"]);
	$stmt->bindParam(':Dog_Size', $_POST["Dog_Size"]);
	$stmt->bindParam(':Lead', $_POST["Lead"]);
    $stmt->bindParam(':Special_Needs', $_POST["Special_Needs"]);
	$stmt->bindParam(':role', $role);
	$stmt->execute();
$conn=null;
?>

</body>
</html>