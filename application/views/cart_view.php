<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>
</head>
<body>
<?php echo form_open('cart/update'); ?>

<table cellpadding="6" cellspacing="1" style="width:400px" border="1" align="center">

<tr>
  <th>Название</th>
  <th>Описание</th>
  <th style="text-align:right">Количество</th>
  <th style="text-align:right">Цена</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <td><?php echo $items['name']; ?></td>
	  <td><?php echo $items['description']; ?></td>
	  <td style="text-align:right"><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '1', 'size' => '3')); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['price']); ?></td>
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"><a href="<?=base_url();?>index.php/cart/clear_cart">Очистить</a></td>
  <td class="right"><strong>Всего</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p align="center"><input type="submit" name="update" value="Обновить"></p>
</body>
</html>