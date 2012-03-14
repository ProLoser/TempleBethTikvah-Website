<div class="choirSongs index">
<h2><?php __('ChoirSongs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('category');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('number');?></th>
	<th><?php echo $paginator->sort('music_file');?></th>
	<th><?php echo $paginator->sort('word_file');?></th>
	<th><?php echo $paginator->sort('sheet_music');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($choirSongs as $choirSong):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $choirSong['ChoirSong']['id']; ?>
		</td>
		<td>
			<?php echo $time->niceShort($choirSong['ChoirSong']['created']); ?>
		</td>
		<td>
			<?php echo $time->niceShort($choirSong['ChoirSong']['modified']); ?>
		</td>
		<td>
			<?php echo $choirSong['ChoirSong']['category']; ?>
		</td>
		<td>
			<?php echo $choirSong['ChoirSong']['title']; ?>
		</td>
		<td>
			<?php echo $choirSong['ChoirSong']['number']; ?>
		</td>
		<td>
			<?php if (!empty($choirSong['ChoirSong']['music_file_file_name'])) echo $html->link('Download', '/files/choir_song/music_file/'.$choirSong['ChoirSong']['music_file_file_name']); ?>
		</td>
		<td>
			<?php if (!empty($choirSong['ChoirSong']['word_file_file_name'])) echo $html->link('Download', '/files/choir_song/word_file/'.$choirSong['ChoirSong']['word_file_file_name']); ?>
		</td>
		<td>
			<?php if (!empty($choirSong['ChoirSong']['sheet_music_file_name'])) echo $html->link('Download', '/files/choir_song/sheet_music/'.$choirSong['ChoirSong']['sheet_music_file_name']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $choirSong['ChoirSong']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $choirSong['ChoirSong']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $choirSong['ChoirSong']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $choirSong['ChoirSong']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New ChoirSong', true), array('action'=>'add')); ?></li>
	</ul>
</div>
