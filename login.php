<?php
if(isset($_POST['check_login']))
{ 
if(empty($_POST['email']) || empty($_POST['pass']))
    header("location:login.html");
else
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
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


    $sql = "select * from slots where email = '$email'";

    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            //echo $row['password'];
            if($pass == $row['password']) {
                echo "<script>
                alert('Successfully Logged In')
                window.location.replace('index.php')
                </script>";
            }
            else {
                echo "<script>
                alert('Enter correct username & password')
                window.location.replace('login.html')
                </script>";
            }
            }
        }

    mysqli_close($conn);

     }
     else
     {
        header("location:login.html");
     }
?>