<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$name = array("Arun","Balu","John","Gokul");
echo "Array:";
print_r($name);
echo "<br>";
echo "Array sorted in ascending order:";
asort($name);
print_r($name);
echo "<br>";
echo "Array sorted in descending order:";
arsort($name);
print_r($name);
?>
</body>
</html>