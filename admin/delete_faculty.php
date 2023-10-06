<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection,"lmsdb");
	$query = "delete from faculty where fac_id = $_GET[fid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Faculty Deleted successfully...");
	window.location.href = "manage_faculty.php";
</script>