<div class="scrolls index">
<h2><?php __('Scrolls');?></h2>
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
	<th><?php echo $paginator->sort('scroll_file_name');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($scrolls as $scroll):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $scroll['Scroll']['id']; ?>
		</td>
		<td>
			<?php echo $scroll['Scroll']['created']; ?>
		</td>
		<td>
			<?php echo $scroll['Scroll']['modified']; ?>
		</td>
		<td>
			<?php echo $scroll['Scroll']['scroll_file_name']; ?>
		</td>
		<td>
			<?php echo $scroll['Scroll']['published']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $scroll['Scroll']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $scroll['Scroll']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $scroll['Scroll']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $scroll['Scroll']['id'])); ?>
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
		<li><?php echo $html->link(__('New Scroll', true), array('action'=>'add')); ?></li>
	</ul>
</div>
