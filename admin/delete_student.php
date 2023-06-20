<?php
	$connection = mysqli_connect("13.51.163.201","phpmyadmin","x8t9aWV3q8Ck");
	$db = mysqli_select_db($connection,"lmsdb");
	$query = "delete from student where mobile = $_GET[sid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student Deleted successfully...");
	window.location.href = "manage_student.php";
</script>