<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'crud');
$query = mysqli_query($connect, 'INSERT INTO posts (title, text) VALUES ("' . $_POST['title'] . '", "' . $_POST['text'] . '")'); 
header("Location: index.php"); ?>