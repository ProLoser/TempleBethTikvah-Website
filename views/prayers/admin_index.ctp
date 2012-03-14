<div class="prayers index">
<h2><?php __('Prayers');?></h2>
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
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('Audio File', 'prayer_audio_file_name');?></th>
	<th><?php echo $paginator->sort('Text File', 'prayer_text_file_file_name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($prayers as $prayer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $prayer['Prayer']['id']; ?>
		</td>
		<td>
			<?php echo $prayer['Prayer']['created']; ?>
		</td>
		<td>
			<?php echo $prayer['Prayer']['modified']; ?>
		</td>
		<td>
			<?php echo $prayer['Prayer']['name']; ?>
		</td>
		<td>
			<?php echo $prayer['Prayer']['prayer_audio_file_name']; ?>
		</td>
		<td>
			<?php echo $prayer['Prayer']['prayer_text_file_file_name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $prayer['Prayer']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $prayer['Prayer']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $prayer['Prayer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prayer['Prayer']['id'])); ?>
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
		<li><?php echo $html->link(__('New Prayer', true), array('action'=>'add')); ?></li>
	</ul>
</div>
