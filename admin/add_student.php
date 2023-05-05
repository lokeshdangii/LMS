<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdb");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Student</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System (IIPS-DAVV)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="#">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Student</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_student.php">Add New Student</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_student.php">Manage Student</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Faculty</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_faculty.php">Add New Faculty</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_faculty.php">Manage Faculty</a>
	        	</div>
		      </li>
			  <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Issue/Return</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="issue_book.php">Issue Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_return.php">Return Book</a>
	        	</div>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>This is library Management System. Library opens at 11:00 AM and close at 5:00 PM</marquee></span><br><br>
		<center><h4>Add a new Student</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="name">Student Name:</label>
						<input type="text" class="form-control" name="name" required>
					</div>
					<div class="form-group">
						<label for="stu_id">Student Roll No:</label>
						<input type="text" name="stu_id" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Mobile No.:</label>
						<input type="text" name="mobile" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">email</label>
						<input type="text" name="email" class="form-control" >
					</div>
				
					<button type="submit" name="add_stu" class="btn btn-primary">Add Student</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	if(isset($_POST['add_stu']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lmsdb");
		$query = "insert into student values('$_POST[stu_id]','$_POST[name]',$_POST[mobile],'$_POST[email]')";
		$query_run = mysqli_query($connection,$query);
		// header("Location:admin_dashboard.php");
	}
?>
