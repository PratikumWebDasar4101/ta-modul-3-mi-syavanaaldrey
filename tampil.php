<?php
 	session_start();
 	include("kon.php");

 	$sql 	= "SELECT * from user";
 	$result = mysqli_query($conn, $sql);

 	if (mysqli_num_rows($result)) {
 		while ($row = mysqli_fetch_array($result)) {
 			echo "<img width='100px' src='ta3/".$row["File_gbr"] . "'>";
 		}
 	}
?>