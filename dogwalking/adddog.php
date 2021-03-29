<html>
<head>
<title></title>
<body>

<?php
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	switch($_POST["Dog_size"]){
		case "small":
			$Dog_size=0;
			break;
			case "medium":
			$Dog_size=1;
			break;
		case "big":
			$Dog_size=2;
			break;
	}
	$stmt = $conn->prepare("INSERT INTO dogs1 (DogID,Dog_Name,Dog_Breed,Special_Needs,Lead,Dog_size)VALUES (NULL,:Dog_Name,:Dog_Breed,:Special_Needs,:Lead,:Dog_size)");
	$stmt->bindParam(':Dog_Name', $_POST["Dog_Name"]);
	$stmt->bindParam(':Dog_Breed', $_POST["Dog_Breed"]);
	$stmt->bindParam(':Lead', $_POST["Lead"]);
    $stmt->bindParam(':Special_Needs', $_POST["Special_Needs"]);
	$stmt->bindParam(':Dog_size', $Dog_size);
	$stmt->execute();
$conn=null;
?>
               
</body>
</html>