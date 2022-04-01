<html>
<head>
    <title>Conference Booking</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
            <i></i><span>Conference Booking</span>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="con1.php">Conference 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="con2.php">Conference 2</a>
            </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">

        <!-- Avatar -->
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
            <img src="https://media.istockphoto.com/vectors/user-member-vector-icon-for-ui-user-interface-or-profile-face-avatar-vector-id1130884625?k=20&m=1130884625&s=612x612&w=0&h=OITK5Otm_lRj7Cx8mBhm7NtLTEHvp6v3XnZFLZmuB9o=" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
            <li>
              <a class="dropdown-item" href="login.html">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>

  <div class="w-100 h-100" style="padding: 5%; background: url('https://media.istockphoto.com/photos/an-empty-meeting-room-and-conference-table-3d-rendering-picture-id664387024?k=20&m=664387024&s=612x612&w=0&h=oCpfy_9v_nC7UjWVRq-7-8hTlRgT4ZifCUDpNXjzWE0=') no-repeat; background-size: cover;">
      <div class="card d-flex flex-column justify-content-center text-center" style="padding-top: 40px;">

      <h2 class="text-center">Booking Details</h2><br>
      <h5></h5>
      <div class="table-responsive">
        <table class="table" style="padding-top: 150px;">
          <thead>
            <tr>
              <th scope="col">Booked Slot</th>
              <th scope="col">Remove Slot</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
                $dbHost = 'localhost:3307';
                $dbName = 'conference';
                $dbUsername = 'root';
                $dbPassword = ''; 

                $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                    //echo "Connected Successfully";

                $sql = "SELECT booked FROM slots WHERE name='Divya'";
                //$a = "Divya";

                if($result = mysqli_query($conn, $sql)){
                    $row = mysqli_fetch_array($result);
                    $bookedd = $row['booked'];
                    //echo $bookedd; 
                    //$bookedd = ltrim($bookedd, $bookedd[0]);
                    //echo $bookedd;
                    $arr = explode(",",$bookedd);
                    
                    foreach($arr as $item) {
                      echo "<tr>";
                       echo "<td>" . $item . "</td>";
                       echo "<td><a href='remove.php?a=$item'><button style='background-color: transparent; border: none;'><i class='fas fa-times'></i></button></a></td>";
                       echo "</tr>";
                      }
                    
                    
                }
              ?>
            </tr>
          </tbody>
        </table>
    </div>
    </div>
  </div>


</body>
</html>