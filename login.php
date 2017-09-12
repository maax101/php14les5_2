<?php 
require_once 'settings.php'; 
if (login($_POST['login'],$_POST['password2'])) {
	header('Location: index.php');
}
	



?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<br><input type="text" name="login" placeholder="Логин"><br>
		<br><input type="password" name="password1" placeholder="Пароль"><br>
		<br><input type="password" name="password2" placeholder="Пароль еще раз"><br>
		<br><input type="submit" name="" value="Зарегистрироваться">
	</form>
	
</body>
</html>
