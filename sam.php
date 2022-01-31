<?php
if(isset($_POST['submit']))
{
    $naa=$_POST['nam'];
    $add=$_POST['add'];
    $age=$_POST['age'];
    $mob=$_POST['num'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $n=preg_match('@[A-z]@',$naa);
    $ph=preg_match('@[6-9]\d{9}@',$mob);
    $upper=preg_match('@[A-Z]@',$pass);
    $lower=preg_match('@[a-z]@',$pass);
    $numb=preg_match('@[0-9]@',$pass);
    $conn=mysqli_connect("localhost","root","","student");
    if($conn)
    {
        echo ("successfully connected");
        echo "<br>";
    }
    else{
        echo ("error");
        echo "<br>";
    }


    
    if($naa=="")
    {
        echo( "enter valid name")."<br>";
    }
      else if(!$n)
      {
          echo("only letters are allowed")."<br>";
      }
    if($add=="")
    {
        echo ("enter the address")."<br>";
    }
    if($age=="")
    {
        echo( " enter  the age")."<br>";
    }
    if($mob=="")
    {
        echo(" enter valid number")."<br>";
    }
      else if(!$ph)
      {
          echo("Mobile  number must contain 10 digits & only start with 6/7/8/9")."<br>";
      }
    if($pass=="" && strlen($pass)<8)
    {
        echo" enter password"."<br>";
    }
      else if(!$upper || !$lower || !$numb)
      {
           echo ("enter strong password")."<br>";
      }
    if($email=="")
    {
        echo" enter valid email"."<br>";
    }
    $query="INSERT INTO studs(name,address,age,mobile,email)VALUES('{$naa}','{$add}','{$age}','{$mob}','{$email}')";

if(mysqli_query($conn,$query))
{
    echo("successfully inserted");
    echo"<br>";
}
else
{
    echo("insertion failed");
    echo "<br>";
}

$search="SELECT * FROM studs";
$data=mysqli_query($conn,$search);


while($res=mysqli_fetch_assoc($data))
{
  ?>
  <table>
  <tr>
      <td><?php echo $res['name'];?></td>
      <td><?php echo $res['address'];?></td>
      <td><?php echo $res['age'];?></td>
      <td><?php echo $res['mobile'];?></td>
      <td><?php echo $res['email'];?></td>
  </tr></table>
  <?php
}
}
?>
     

<html>
    <head>
</head>
<body>
    <form method="POST">
        <center>
            <h2>Register here</h1>
        <table>
            <tr><td>Name</td>
            <td><input type="text" name="nam" id="name" ></td></tr>
            
            <tr><td>Address</td>
            <td><input type="text" name="add" id="address"></td></tr>

            <tr><td>Age</td>
            <td><input type="number" name="age"></td></tr>

            <tr><td>Mobile No.</td>
            <td><input type="number" name="num" id="number"></td></tr>

            <tr><td>Password</td>
            <td><input type="password" name="password"></td></tr>

            <tr><td>Email</td>
            <td><input type="text" name="email"></td></tr>



            <tr><td><input type="submit" name="submit"></td></tr>

                            
</center>
</form>
</body>
</html>
