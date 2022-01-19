<html>
<head>
</head>
<body>
        
<?php
$a=array("Sachin","Dhoni","Kohli","Rohit","Jadeja");
echo "<table border='1' width='50'><tr><th>Sl.no</th><th>Players</th></tr>";
foreach($a as $key=>$value)
{
    echo "<tr><td>$key</td><td>$value</td></tr>";
    
}
echo "</table>";
?>
</body>
</html>