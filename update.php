<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'crud');
$query = mysqli_query($connect, 'UPDATE posts SET title = "' . $_POST['title'] . '", text = "' . $_POST['text'] . '" WHERE id = ' . $_POST['id']); 
header("Location: index.php"); ?>