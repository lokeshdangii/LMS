<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
        #side_bar{
            padding: 50px;
            background-color: whitesmoke;
            height: 450px;
            width: 300px;
        }
</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class = "navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System (IIPS)</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Student Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Register Login</a>
                </li>

            </ul>
        </div>
    </nav><br>
    <span><marquee>This is library Management System. Library opens at 11:00 AM and close at 5:00 PM</marquee></span><br><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h5>Working Hours</h5>
            <ul>
                <li>Opening Timing: 11:00 AM</li>
                <li>Closing Timing: 5:00 PM</li>
                <li>Saturday/Sunday Off</li>
            </ul>
            <h5>What we provide ?</h5>
            <ul>
                <li>All Stream Books</li>
                <li>Projects</li>
                <li>E-library</li>
                <li>Well Sitting Facility</li>
                <li>Peacefull Environment</li>
                <li>Free Wi-fi</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <center><h3>Student Login Form</h3></center>
            <form action="register.php" method="post">
            
                <div class="form-group">
                    <label for="name">Emai Id:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Password:</label>
                    <input type="text" name="password" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>