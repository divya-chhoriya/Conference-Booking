<?php
        $dbHost = 'localhost:3307';
        $dbName = 'conference';
        $dbUsername = 'root';
        $dbPassword = ''; 

        $a = $_GET['name'];
        $b = $_GET['stime'];
        $c = $_GET['etime'];
        //echo $b;
        $d = abs($b - $c);

        //echo "alert('$d<br>$b<br>$c')";

        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

            $sql2 = "SELECT booked FROM slots WHERE name='$a'";
            $res1 = mysqli_query($conn, $sql2);
            $row1 = mysqli_fetch_array($res1);
            $bs = $row1['booked'];
            $bookSlots = array($bs);
            //print_r($bookSlots);
            //print_r($bookSlots);

            //echo "Connected Successfully";
            $leftH = "SELECT lhours FROM slots WHERE name='$a'";
            $result = mysqli_query($conn, $leftH);
            $row = mysqli_fetch_array($result);
            $aa = $row['lhours'];
            //echo $aa;

            $sql = "UPDATE slots SET lhours = lhours-$d WHERE name='$a' AND lhours>0";
            

        if(mysqli_query($conn, $sql))
        {
            $lefth = "SELECT lhours FROM slots WHERE name='$a'";
            $result = mysqli_query($conn, $lefth);
            $row = mysqli_fetch_array($result);
            $ab = $row['lhours'];
            //echo $ab;

            if($aa!=$ab && $ab>=0) {
                array_push($bookSlots, "$b-$c");
                $arr1 = implode(",",$bookSlots);
                //echo $arr1;
                $sql1 = "UPDATE slots SET booked = '$arr1' WHERE name='$a'";
                if(mysqli_query($conn, $sql1)) {
                    //echo "DOne";
                }
                else {
                    //echo "Not Done";
                }
                echo "<script>
                alert('Thank you for booking!')
                </script>"; 
            }
            else {
                echo "<script>
                alert('Oops! Total hours (5) is completed. Try again later')
                </script>";
            }
        }   
        else {
            echo "Done";
        }
    
    ?>