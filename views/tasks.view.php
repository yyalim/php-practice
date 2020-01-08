<form action="tasks" method="POST">
	<input type="text" name="description" />
	<input type="submit" value="Add Todo">
</form>

<ul>
<?php foreach($tasks as $task): ?>
	<li>
		<?php if($task->isComplete()): ?>
		<strike>
			<?= $task->description; ?>
		</strike>
	<?php else: ?>
		<?= $task->description; ?>
	<?php endif; ?>
	</li>
<?php endforeach; ?>
</ul>
