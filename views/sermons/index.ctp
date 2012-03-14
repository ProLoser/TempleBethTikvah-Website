<div class="sermons index">
<h1><?php __('Sermons');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0" style="text-align: center">
<thead>
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th>Audio File</th>
	<th>Text File</th>
</tr>
</thead>
<?php
$i = 0;
foreach ($sermons as $sermon):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td style="text-align: left">
			<?php echo $sermon['Sermon']['title']; ?>
		</td>
		<td>
			<?php echo $this->Time->format('Y', $sermon['Sermon']['published']); ?>
		</td>
		<td>
			<?php if (!empty($sermon['Sermon']['audio_file_name'])) echo $this->element('dewplayer-mini', array('mp3'=>Router::url('/files/sermons/audio/').$sermon['Sermon']['audio_file_name'])); ?>
			<?php if (!empty($sermon['Sermon']['audio_file_name'])) echo $html->link('Download', '/files/sermons/audio/' . $sermon['Sermon']['audio_file_name']); ?>
		</td>
		<td>
			<?php if (!empty($sermon['Sermon']['text_file_name'])) echo $html->link('Download', '/files/sermons/text/' . $sermon['Sermon']['text_file_name']); ?>
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
<style type="text/css">
	.altrow {
		background: rgba(150,162,176, .2);
	}
	td {
		padding: 3px;
	}
</style>