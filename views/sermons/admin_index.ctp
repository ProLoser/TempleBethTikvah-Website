<div class="sermons index">
<h2><?php __('Sermons');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('Audio File', 'audio_file_file_name');?></th>
	<th><?php echo $paginator->sort('Text File', 'text_file_file_name');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($sermons as $sermon):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $sermon['Sermon']['id']; ?>
		</td>
		<td>
			<?php echo $sermon['Sermon']['published']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($sermon['Sermon']['audio_file_name'], '/files/sermons/audio/'. $sermon['Sermon']['audio_file_name']); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sermon['Sermon']['text_file_name'], '/files/sermons/text/'. $sermon['Sermon']['text_file_name']); ?>
		</td>
		<td>
			<?php echo $sermon['Sermon']['title']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $sermon['Sermon']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $sermon['Sermon']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $sermon['Sermon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sermon['Sermon']['id'])); ?>
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
		<li><?php echo $html->link(__('New Sermon', true), array('action'=>'add')); ?></li>
	</ul>
</div>
