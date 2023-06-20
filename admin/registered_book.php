<?php
	$connection = mysqli_connect("13.51.163.201","phpmyadmin","x8t9aWV3q8Ck");
	$db = mysqli_select_db($connection,"lmsdb");
	$book_count = 0;
	$query = "select count(*) as book_count from book";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$book_count = $row['book_count'];
	}
?>