<?php
if(isset($_POST['submit']))
{ 
if(empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['pass']))
    header("location:register.html");
else
{
    $a=$_POST['fname'];
    $b=$_POST['email'];
    $c=$_POST['pass'];
}
$dbHost = 'localhost:3307';
$dbName = 'conference';
$dbUsername = 'root';
$dbPassword = ''; 

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected Successfully";


$sql = "CREATE TABLE if not exists slots(
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(15) NOT NULL)";
if(mysqli_query($conn, $sql))
{
    echo "<br>Table created successfully</br>";
} 
else
{
    echo "ERROR: Could not create table " . mysqli_error($conn);
}


$sql = "INSERT INTO slots VALUES ('$a','$b','$c')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Record Added')</script>";
} 
else
{
    echo "ERROR: Could not insert values " . mysqli_error($conn);
}


mysqli_close($conn);

 }
 else
 {
    header("location:register.html");
 }
?>


