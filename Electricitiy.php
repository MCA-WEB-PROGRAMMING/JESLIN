<html>
    <head>
</head>
<title>
    Electricity Bill
</title>
<body>
    <form method="POST">
        <table>
            <tr>
                <td>
                    Enter the meter number:
                    <input type="number" name="num">
                </td>
            </tr>
             <tr>
                 <td>
                     Enter the number of units:
                     <input type="number" name="unit">
                </td>
            </tr>
            <tr>
                <td>
                    Enter the catagory:
                    <select name="tariff">
                        <option>Select</option>
                        <option>Rural</option>
                        <option>Residential</option>
                        <option>Commercial</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        if($unit>0&&$unit<=50)
        {
            $e=20;
            $price=(($unit*0.25)+$e);
            echo "$price";
        }
        else if($unit>50&&$unit<=100)
        {
            $e=20;
            $price=(($unit*0.55)+$e);
            echo "$price";
        }
        else if($unit>100&&$unit<=150)
        {
            $e=25;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>150&&$unit<=250)
        {
            $e=25;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>250&&$unit<=400)
        {
            $e=30;
            $price=(($unit*3.0)+$e);
            echo "$price";
        }
        else
        {
            $e=40;
            $price=(($unit*4.0)+$e);
            echo "$price";
        }
    }
    if($tariff=="Residential")
    {
    
        if($unit>0&&$unit<=50)
        {
            $e=25;
            $price=(($unit*0.3)+$e);
            echo "$price";
        }
        else if($unit>50&&$unit<=100)
        {
            $e=25;
            $price=(($unit*0.55)+$e);
            echo "$price";
        }
        else if($unit>100&&$unit<=150)
        {
            $e=30;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>150&&$unit<=250)
        {
            $e=30;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>250&&$unit<=400)
        {
            $e=35;
            $price=(($unit*3.0)+$e);
            echo "$price";
        }
        else
        {
            $e=45;
            $price=(($unit*4.0)+$e);
            echo "$price";
        }
    }
    if($tariff=="Commercial")
    {
    
        if($unit>0&&$unit<=50)
        {
            $e=30;
            $price=(($unit*0.3)+$e);
            echo "$price";
        }
        else if($unit>50&&$unit<=100)
        {
            $e=30;
            $price=(($unit*0.55)+$e);
            echo "$price";
        }
        else if($unit>100&&$unit<=150)
        {
            $e=35;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>150&&$unit<=250)
        {
            $e=35;
            $price=(($unit*2.0)+$e);
            echo "$price";
        }
        else if($unit>250&&$unit<=400)
        {
            $e=40;
            $price=(($unit*3.0)+$e);
            echo "$price";
        }
        else
        {
            $e=50;
            $price=(($unit*4.0)+$e);
            echo "$price";
        }
    }
    echo "Your Meter Number is:".$num;
    echo "<br>";
    echo "Units are:".$unit;
    echo "<br>";
    echo "Extra Charge:".$a;
    echo "<br>";
    echo "Total $unit units of charges :Rs.".$amount;
    echo "<br>";
}
?>

