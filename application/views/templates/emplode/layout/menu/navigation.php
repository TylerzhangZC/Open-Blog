<?php if (($navigation = $this->navigation_library->get_navigation())): ?>
	<ul>
		<?php foreach ($navigation as $navigation_item): ?>
			<li><a href="<?php echo ($navigation_item['external'] == 0) ? site_url($navigation_item['url']) : $navigation_item['url']; ?>" title="<?php echo $navigation_item['description']; ?>"><span><?php echo $navigation_item['title']; ?></span></a></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>	
<div class="clearer">&nbsp;</div>