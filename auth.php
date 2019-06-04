<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-6 mt-5">
			<div class="bg-white row pl-2" style="width: 200px">
				<form method="POST" action="login.php">
					<input class="mb-2" type="" name="mail" placeholder="Введите почту">
						<br>
					<input class="mb-2" type="password" name="pass" placeholder="Придумайте Пароль">
						<br>
					<button class="btn btn-primary mt-2">Войти</button>
				</form>
				<?php echo '<h3>' . $_GET['error'] . '</h3>' ?>
			</div>
		</div>
	</div>
</div>	
</body>
</html>
