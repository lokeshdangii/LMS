<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lmsdb");
	$query = "delete from issued_book where book_id = $_GET[bid]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Returned Successfully...");
	window.location.href = "manage_return.php";
</script>