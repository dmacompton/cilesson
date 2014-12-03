<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?=base_url()?>index.php/login">
		Логин: <input type="text" name="login"><br>
		Пароль: <input type="password" name="pswd"><br>
		<input type="submit" name="enter" value="Войти">
	</form>
	<?php echo $this->benchmark->elapsed_time('code_start', 'code_end');
?><br>
	<?php echo $this->benchmark->memory_usage();?>


</body>
</html>