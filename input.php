<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'yaroslav_pn_11');
$query = mysqli_query($connect, "INSERT INTO Posts ( text, user_id, post_img) VALUES('" . $_POST['txt'] . "', '" . $_POST['id'] . "', '" . $_FILES['img']['name'] . "') ");
header("Location: http://yaroslav/instagram/page.php?id=" . $_POST['id'] . "");
?>