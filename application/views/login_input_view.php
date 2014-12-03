<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?=base_url()?>index.php/input">
		Логин: <input type="text" name="login"><br>
		Пароль: <input type="password" name="pswd"><br>
		<input type="submit" name="enter" value="Войти">
	</form>
</body>
</html>