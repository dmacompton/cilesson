<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
</head>
<body>
	<?php echo $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $links); ?>
</body>
</html>