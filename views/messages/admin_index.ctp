<div class="messages index">
<h2><?php __('Messages');?></h2>
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
	<th><?php echo $paginator->sort('category');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($messages as $message):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $message['Message']['id']; ?>
		</td>
		<td>
			<?php echo $message['Message']['created']; ?>
		</td>
		<td>
			<?php echo $message['Message']['category']; ?>
		</td>
		<td>
			<?php echo $message['Message']['published']; ?>
		</td>
		<td>
			<?php echo $message['Message']['title']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $message['Message']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $message['Message']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $message['Message']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $message['Message']['id'])); ?>
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
		<li><?php echo $html->link(__('New Message', true), array('action'=>'add')); ?></li>
	</ul>
</div>
