<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'Prog');
		$query = mysqli_query($connect, "SELECT * FROM instagram WHERE id = '" . $_GET['id'] . "'");
		$content = $query->fetch_assoc();
		header("Location: page.php/?name=" . $content['name'] . "");
		stop();
 ?>