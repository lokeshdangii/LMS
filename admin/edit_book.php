<?php
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdb");
	$book_id = "";
	$book_name = "";
	$author = "";
	$publisher = "";
	$query = "select * from book where book_id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$book_id = $row['book_id'];
		$book_name = $row['book_name'];
		$author = $row['author'];
		$publisher = $row['publisher'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
	<span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
		<center><h4>Edit Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="book_id">Book Acc Number:</label>
						<input type="text" name="book_id" value="<?php echo $book_id;?>" class="form-control" disabled required>
					</div>
					<div class="form-group">
						<label for="book_name">Book Name:</label>
						<input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="author">Author:</label>
						<input type="text" name="author" value="<?php echo $author;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="publisher">Publisher:</label>
						<input type="text" name="publisher" value="<?php echo $publisher;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Edit Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lmsdb");
		$query = "update book set book_name = '$_POST[book_name]', author = '$_POST[author]', publisher = '$_POST[publisher]' where book_id = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
		header("location:manage_book.php");
	}
?>