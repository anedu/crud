<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'crud');
$query = mysqli_query($connect, 'DELETE FROM post WHERE id = ' . $_POST['id']); 
header("Location: index.php"); ?>