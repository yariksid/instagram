<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect, "SELECT email, name, login, pass, icon, id FROM instagram WHERE email = '" . $_POST['mail'] . "' AND pass = '" . $_POST['pass'] . "'");
	$cont = $query->fetch_assoc();
	if ($query->num_rows == 0) {
		header("Location: http://yaroslav/instagram/auth.php?error=Нет такого пользовотеля");
	}else{
		header("Location: http://yaroslav/instagram/page.php?id=" . $cont['id'] . "");
	}

?>