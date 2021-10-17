<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="insert.php">
		<div>
			<input type="" name="title" placeholder="Заголовок">
		</div>
		<div>
			<input type="" name="text" placeholder="Текст">
		</div>
		<button>Создать</button>
	</form>
	<!-- connect to db -->
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'crud');
	$query = mysqli_query($connect, 'SELECT * FROM posts');
	for ($i=0; $i < $query->num_rows; $i++) { 
	 	$result = $query->fetch_assoc(); ?>
	 	<h1><?php echo $result['title']; ?></h1>
	 	<p><?php echo $result['id']; ?></p>
	 	<p><?php echo $result['text']; ?></p>
	 	<form method="POST" action="delete.php">
	 		<?php echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
	 		<button>Удалить</button>
	 	</form>
	 	<form method="POST" action="update.php">
	 		<?php echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
	 		<div>
	 			<?php echo '<input type="" name="title" value="' . $result['title'] . '">'; ?>
	 		</div>
	 		<div>
	 			<?php echo '<input type="" name="text" value="' . $result['text'] . '">'; ?>
	 		</div>
	 		<button>Обновить</button>
	 	</form>
	<?php } ?>
</body>
</html>