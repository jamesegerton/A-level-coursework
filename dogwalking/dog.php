<html>
<head>
<title></title>
<body>
<form action="adddog.php" method = "post">
  Dog name:<input type="text" name="Dog_Name"><br>
  Dog Breed:<input type="text" name="Dog_Breed"><br>
  Special Needs:<input type="text" name="Special_Needs"><br>
  <!--Creates a drop down list-->
  Can be walked off lead:<select name="Lead">
		<option value="Y">Yes</option>
		<option value="N">No</option>
	</select>
  <br>
  <!--Next 3 lines create a radio button which allows the user to select the dog size-->
  <input type="radio" name="Dog_size" value="big" checked> Big<br>
  <input type="radio" name="Dog_size" value="medium"> Medium<br>
  <input type="radio" name="Dog_size" value="small"> Small<br>
  <input type="submit" value="Add Dog">
</form>

</body>
</html>