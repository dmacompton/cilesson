<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?=base_url()?>index.php/zip/archive" method="post">
		<textarea name="text" cols="30" rows="10"></textarea><br>
		<input type="submit" name="ok" value="Архивация">
	</form>
</body>
</html>