<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?=base_url();?>index.php/add_article" method="POST">
		Название статьи: <br /><input type="text" name="title" value="<?=set_value('title');?>"><?=form_error('title');?><br />
		Текст статьи: <br /><textarea name="text" cols="40" rows="10"><?=set_value('text');?></textarea><?=form_error('text');?><br />
		<input type="submit" name="add" value="Добавить">
		
	</form>
</body>
</html>