<?php
session_start();
require_once '../db/db.php';
if (isset($_POST['search'])) {
	$con = dbConnection();
	$username = $_POST['search'];
	$q = mysqli_query($con,"SELECT * FROM posts WHERE post_title like '%$username%'");
	if(mysqli_num_rows($q)>=1)
	{
		$data = "<table border=1>
				<tr>
					<td>Image</td>
					<td>Title</td>
					<td>Details</td>
				</tr>";

		while ($row = mysqli_fetch_assoc($q)) {
		$data .= "<tr>
					<td><img width='100px' src='../uploads/{$row['post_pic']}'></td>
					<td>{$row['post_title']}</td>
					<td>{$row['post_details']}</td>
				</tr>";
		}
		$data .= "</table>";
				
		echo $data;
	}else{
		echo "No entry";
	}
}