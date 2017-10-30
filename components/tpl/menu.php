<li>
	<a href="<?= $category['Url'];?>">
		<?=
        $category['Title']; ?>
	</a>
	<?php    if (isset($category['childs'])): ?>
		<ul>
			<?= $this->getMenuHtml($category['childs']) ?>
		</ul>
	<?php endif;?>
</li>
