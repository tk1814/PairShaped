<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Interests is: <?php echo $_GET["interests"];?><br>
Skills is: <?php echo $_GET["skills"];?><br>

Here are some matches

<?php
$mikeArr = array("Mike", "Japanese", "English");
$jamesArr = array("James", "English", "Japanese");

echo $mikeArr[0];

?>



</body>
</html>