<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect, "UPDATE instagram SET icon = '" . $_FILES['img']['name'] . "' WHERE id = '" . $_POST['id'] . "'");
	header("Location: http://yaroslav/instagram/page.php?id=" . $_POST['id'] . "");
 ?>