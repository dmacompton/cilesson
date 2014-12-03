<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First - Вид</title>
</head>
<body>
<?php foreach($articles as $item): ?>
    <p><?=$item['title'];?></p>
    <p><?=$item['text'];?></p>
    <p><?=$item['date'];?></p>
<?php endforeach; ?>
<?php echo $this->pagination->create_links(); ?>
</body>
</html>