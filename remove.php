<?php
        $dbHost = 'localhost:3307';
        $dbName = 'conference';
        $dbUsername = 'root';
        $dbPassword = ''; 

        $t = $_GET['a'];
        //echo $t;
        $aa = substr("$t", 0, 2);
        $ab = substr("$t", 3, 5);
        $addd = abs($aa-$ab);
        //echo abs($aa-$ab);


        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT booked FROM slots WHERE name = 'Divya'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            $bookedd = $row['booked'];
            //echo $bookedd; 
            //$bookedd = ltrim($bookedd, $bookedd[0]);
            //echo $bookedd;
            $arr = explode(",",$bookedd);
            //print_r($arr);

            date_default_timezone_set('Asia/Kolkata');
            $d = date("H:i:s");
            //echo $d . "<br>";
            $e = substr("$d", 0, 2);
            //echo $d;

                if($aa == $e || $aa<$e) {
                    echo "<script>
                    alert('Current Time: $d .Booking cannot be cancelled now! Cancel your booking atleast 1 hour prior to the scheduled time')
                    </script>"; 
                }
                else {
                        if(in_array($t, $arr)) {
                            $indx = array_search($t, $arr);
                            //echo "idx:" . $indx;
                            array_splice($arr,$indx,1);
                            //print_r($arr);
                            $arr1 = implode(",",$arr);
                            //echo $arr1;
                            $sql1 = "UPDATE slots SET booked = '$arr1' WHERE name='Divya'";
                            if(mysqli_query($conn, $sql1)) {
                                echo "<script>
                                alert('Booking Cancelled')
                                </script>";
                                $sql2 = "UPDATE slots SET lhours = lhours+$addd WHERE name='Divya'";
                                if(mysqli_query($conn, $sql2)) {
                                    //echo "ok";
                                }
                            }
                            else {
                                //echo "Not Done";
                            }
                        }
                }
?>