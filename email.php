<?php
	$text = 'Вы успешно зарегистрировались на сайт Instagram. Ваш логин:' . $_POST['login'] . ', ваш пароль:' . $_POST['pass'];
	mail($_POST['mail'], "Instagram registration", $text);


	$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
	$query = mysqli_query($connect,"INSERT INTO instagram (email, name, login, pass) VALUES ('" . $_POST['mail'] . "', '" . $_POST['name'] . "', '" . $_POST['login'] . "', '" . $_POST['pass'] . "')");
	header("Location: auth.php");
 ?>