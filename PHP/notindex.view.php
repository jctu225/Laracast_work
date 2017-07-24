<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	</style>
</head>
<body>
	<p>
		Hi from notindex.view!
	</p>
 <ul>
	 <?php foreach ($tasks as $task) : ?>
		 <li>
		 <?php if ($tasks->completed) : ?>
			 <strike><?= $task->description; ?></strike>
		 <?php else: ?>
		     <?= $task->description; ?>
			 </li>
		 <?php endif; ?>
	 <?php endforeach; ?>
 </ul>
</body>
</html>
