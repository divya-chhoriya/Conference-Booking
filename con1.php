<html>
<head>
    <title>Conference Booking</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>

    <style></style>
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
        <div class="card d-flex flex-column justify-content-center" style="padding: 5%;">
            <h1 class="text-center" style="font-family: 'Segoe UI', Verdana, sans-serif;">Conference 1 Slot Booking</h1><br>
            <form action="checking.php" method="post">
            <div class="card-body text-center">
                Name: <input type="text" name="uname" id="uname" required>&emsp;&emsp;&emsp;
                Date: <input type="date" name="date" required><br><br><br>
                Start Time:
                <select name="stime" required>
                    <option>--select--</option>
                    <option value="10">10:00 am</option>
                    <option value="11">11:00 am</option>
                    <option value="12">12:00 pm</option>
                    <option value="13">13:00 pm</option>
                    <option value="14">14:00 pm</option>
                    <option value="15">15:00 pm</option>
                    <option value="16">16:00 pm</option>
                    <option value="17">17:00 pm</option>
                    <option value="18">18:00 pm</option>
                    <option value="19">19:00 pm</option>
                    <option value="20">20:00 pm</option>
                </select>&emsp;&emsp;&emsp;
                End Time:
                <select name="etime" required>
                    <option>--select--</option>
                    <option value="11">11:00 am</option>
                    <option value="12">12:00 pm</option>
                    <option value="13">13:00 pm</option>
                    <option value="14">14:00 pm</option>
                    <option value="15">15:00 pm</option>
                    <option value="16">16:00 pm</option>
                    <option value="17">17:00 pm</option>
                    <option value="18">18:00 pm</option>
                    <option value="19">19:00 pm</option>
                    <option value="20">20:00 pm</option>
                    <option value="21">21:00 pm</option>
                    <option value="22">22:00 pm</option>
                </select><br><br><br>
                <button class="btn" id="check" name="check" style="background-color: black; color: white;">Check Availability</button>
            </div>
            </form>
        </div>
    </div>

</body>
</html>
