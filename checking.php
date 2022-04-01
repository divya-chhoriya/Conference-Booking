<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <style>
        .container {
        height: 100%;
        width: 100%;
        position: relative;
        background: url('https://media.istockphoto.com/photos/an-empty-meeting-room-and-conference-table-3d-rendering-picture-id664387024?k=20&m=664387024&s=612x612&w=0&h=oCpfy_9v_nC7UjWVRq-7-8hTlRgT4ZifCUDpNXjzWE0=') no-repeat; 
        background-size: cover;
        }

        .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
        .btn {
            height: 50px;
            width: 200px;
        }
        </style>    
</head>
<body>

<?php
    if(isset($_POST['check']))
    {
        $dbHost = 'localhost:3307';
        $dbName = 'conference';
        $dbUsername = 'root';
        $dbPassword = ''; 

        $a = $_POST['uname'];
        $b = $_POST['stime'];
        $c = $_POST['etime'];
        $d = abs($b - $c);
        $s = $b . "-" . $c;

        //echo "alert('$d<br>$b<br>$c')";

        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

            $sql = "SELECT booked FROM slots WHERE name = '$a'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $bookedd = $row['booked'];
            //echo $bookedd; 
            //$bookedd = ltrim($bookedd, $bookedd[0]);
            //echo $bookedd;
            $arr = explode(",",$bookedd); 
            //print_r($arr);

                if(in_array($s, $arr)) {
                    echo "<script>
                    alert('Slot already booked! Try another slot')
                    </script>";                    
                }
                else {
                    echo "<script>
                    alert('Slot is available')
                    </script>";
                    echo "<div class='container'>
                            <div class='center'>
                            <a href='book_slot.php?name=$a&stime=$b&etime=$c'><button class='btn' id='book' name='book' style='background-color: black; color: white;'>Book Slot</button></a>
                            </div>
                        </div>";
                }

        }
    ?>

</body>
</html>