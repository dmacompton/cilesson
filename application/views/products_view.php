<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($products as $item) : ?>
		<p><strong>Название товара:</strong> <?=$item['title'];?></p>
		<p><strong>Описание товара:</strong> <?=$item['description'];?></p>
		<p><strong>Цена:</strong> <?=$item['price'];?></p><br/>
		<form method="POST" action="<?=base_url()?>index.php/cart/add_product/<?=$item['id'];?>">
			<input type="hidden" name="id" value="<?=$item['id'];?>" />
			<input type="hidden" name="title" value="<?=$item['title'];?>" />
			<input type="hidden" name="title_en" value="<?=$item['title_en'];?>" />
			<input type="hidden" name="description" value="<?=$item['description'];?>" />
			<input type="hidden" name="price" value="<?=$item['price'];?>" />
			<input type="submit" name="to_cart" value="В корзину">
		</form>
		<hr/>
	<?php endforeach; ?>
	<a href="<?=base_url()?>index.php/cart/view_cart">В корзину</a>
</body>
</html>