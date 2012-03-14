<div class="iggyPosts index">
<h2><?php __('IggyPosts');?></h2>
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
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('File', 'filename_file_name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iggyPosts as $iggyPost):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iggyPost['IggyPost']['id']; ?>
		</td>
		<td>
			<?php echo $iggyPost['IggyPost']['created']; ?>
		</td>
		<td>
			<?php echo $iggyPost['IggyPost']['modified']; ?>
		</td>
		<td>
			<?php echo $iggyPost['IggyPost']['published']; ?>
		</td>
		<td>
			<?php echo $iggyPost['IggyPost']['filename_file_name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $iggyPost['IggyPost']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $iggyPost['IggyPost']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $iggyPost['IggyPost']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iggyPost['IggyPost']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New IggyPost', true), array('action' => 'add')); ?></li>
	</ul>
</div>