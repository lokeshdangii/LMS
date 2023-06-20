<?php
	$connection = mysqli_connect("13.51.163.201","phpmyadmin","x8t9aWV3q8Ck");
	$db = mysqli_select_db($connection,"lmsdb");
	$user_count = 0;
	$query = "select count(*) as user_count from users";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$user_count = $row['user_count'];
	}
?>