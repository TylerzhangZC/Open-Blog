<h1><?=lang('search_results_for');?> "<?=$search_term;?>"</h1>

<? foreach ($posts as $post): ?>
	<h1><a href="<?=site_url('blog/post/' . $post['url']);?>"><?=$post['title'];?></a></h1>
	<div class="descr"><?=strftime('%B %d, %Y', strtotime($post['date_posted']));?></div>
	<?=$post['excerpt'];?>
	
	<? if ($post['content']): ?>
		<br /><br /><a href="<?=site_url('blog/post/' . $post['url']);?>"><?=lang('read_more');?></a>
	<? endif; ?>
	<div class="info"><?=lang('posted_in');?> <a href="<?=site_url('blog/category/' . $post['url_name']);?>"><?=$post['name'];?></a> <?=lang('by');?> <?=$post['display_name'];?></div>
<? endforeach; ?>