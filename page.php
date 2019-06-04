<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Page</title>
	<meta charset="utf-8">
</head>
<body class="bg-light">
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
		$query = mysqli_query($connect, "SELECT * FROM posts INNER JOIN instagram ON posts.user_id = instagram.id");
		$query2 = mysqli_query($connect, "SELECT * FROM instagram WHERE id = '" . $_GET['id'] . "'");
		$content2 = $query2->fetch_assoc();
	 ?>
	<div class="container bg-white">
		<div class="mb-4 border border-secondary p-3">
			<div style="text-align: center;" class="">
				<?php echo '<img style="width: 75px; height: 75px;" class="rounded-circle" src="images/' . $content2['icon'] . '">' ?>
				<h3 class="ml-2">
					<?php echo $content2['name'] ?>
				</h3>
			</div>
			<form enctype="multipart/form-data" method="POST" action="avatar.php">
				<input type="file" name="img">
				<?php echo '<input type="hidden" name="id" value="' . $content2['id'] .  '">' ?>
				<button class="btn btn-primary mt-3">Добавить</button>
			</form>
		</div>
		<div class="border border-secondary p-3">
			<h5>Создать новый пост</h5>
			<form enctype="multipart/form-data" method="POST" action="input.php">
				<input type="file" name="img">
				<span>Напишите что нибудь:</span><input type="" name="txt">
				<?php echo '<input type="hidden" name="id" value="' . $content2['id'] .  '">' ?>
				<br>
				<button type="submit" class="btn btn-primary mt-3">Добавить</button>
			</form>
		</div>
		<div class="">
			<?php
				$num = $query->num_rows;
				for ($i=0; $i < $num; $i++) { 
				$content = $query->fetch_assoc();
			 ?>
			 <div class="border border-black">
			 	<div>
			 		<?php echo '<img style="width: 50px; height: 50px;" src="' . 'images/' . $content['icon'] . '">' ?>
			 		<h3><?php echo $content['name'] ?></h3>
			 		<hr>
			 	</div>
			 	<div style="text-align: center">
			 		<h5><?php echo $content['text'] ?></h5>
			 		<?php echo '<img src="' . 'images/' . $content['post_img'] . '">' ?>
			 	</div>
			 </div>
			 <?php 
			 	}
			  ?>
		</div> 
	</div>
</body>
</html>
