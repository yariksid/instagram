<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body class="bg-light">
<div class="container">
	<div class="row">
		<div class="col-6">
			<img src="images/1.png">
		</div>
		<div class="col-6 mt-5">
			<img src="images/2.png" style="width: 150px; height: 50px"> 
			<div class="bg-white row pl-2" style="width: 200px">
				<form method="POST" action="email.php">
					<input class="mb-2" type="" name="mail" placeholder="Введите почту">
						<br>
					<input class="mb-2" type="" name="name" placeholder="Введите Имя">
						<br>
					<input class="mb-2" type="" name="login" placeholder="Введите Логин">
						<br>
					<input class="mb-2" type="password" name="pass" placeholder="Придумайте Пароль">
						<br>
					<a href="auth.php"><button class="btn btn-primary mt-2">Зарегистрироваться</button></a>
				</form>
			</div>
		</div>
		<div><a href="auth.php">Уже есть аккаунт? ВОЙТИ</a></div>
	</div>
</div>	
</body>
</html>