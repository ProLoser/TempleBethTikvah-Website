<div class="choirSongs index">
<h2><?php __('Choir Music');?><?php if (isset($category)) echo ': '.$category; ?></h2>
<p>To save the files to your computer: <br />
	Right-Click the 'Download' link and choose Save-As to select where you wish to save the file.</p>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('number');?></th>
	<th>Play Song</th>
	<th><?php echo $paginator->sort('Music', 'music_file_file_name');?></th>
	<th><?php echo $paginator->sort('Document', 'word_file_file_name');?></th>
	<th><?php echo $paginator->sort('Sheet Music', 'sheet_music_file_name');?></th>
</tr>
</thead>
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
			<?php echo $choirSong['ChoirSong']['title']; ?>
		</td>
		<td>
			<?php echo $choirSong['ChoirSong']['number']; ?>
		</td>
		<td align="center">
			<?php if (!empty($choirSong['ChoirSong']['music_file_file_name'])) echo $this->element('dewplayer-mini', array('mp3'=>Router::url('/files/choir_song/music_file/').$choirSong['ChoirSong']['music_file_file_name'])); ?>
		</td>
		<td align="center">
			<?php if (!empty($choirSong['ChoirSong']['music_file_file_name'])) echo $html->link('Download', '/files/choir_song/music_file/'.$choirSong['ChoirSong']['music_file_file_name']); ?>
		</td>
		<td align="center">
			<?php if (!empty($choirSong['ChoirSong']['word_file_file_name'])) echo $html->link('Download', '/files/choir_song/word_file/'.$choirSong['ChoirSong']['word_file_file_name']); ?>
		</td>
		<td align="center">
			<?php if (!empty($choirSong['ChoirSong']['sheet_music_file_name'])) echo $html->link('Download', '/files/choir_song/sheet_music/'.$choirSong['ChoirSong']['sheet_music_file_name']); ?>
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