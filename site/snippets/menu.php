	<nav>
		<div>
<?php foreach($pages->visible() AS $p): ?>
			<a href="<?php echo $p->url() ?>"<?php echo ($p->isOpen()) ? ' class="active"' : '' ?>><?php echo html($p->title()) ?></a>
<?php endforeach ?>
		</div>
	</nav>