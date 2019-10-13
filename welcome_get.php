<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Interests is: <?php echo $_GET["interests"];?><br>
Skills is: <?php echo $_GET["skills"];?><br>

Here are some matches<br>

<?php
$usrInterests = $_GET["interests"];

$mikeArr = array("Mike", "Japanese", "English");
$jamesArr = array("James", "English", "Japanese");

$peopleArray = array($mikeArr, $jamesArr);

$matchFound = false;
for ($x = 0; $x < count($peopleArray); $x++) {
    if (strtolower($usrInterests) == strtolower($peopleArray[$x][2])){
        echo "found a match with " . $peopleArray[$x][0] . " <br>";
        $matchFound = true;
    }
}

if (!$matchFound) {
    echo "No matches found. Sorry.<br>";
}

?>



</body>
</html>