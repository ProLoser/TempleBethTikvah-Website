<div class="smachot index">
<h2><?php __('Smachot');?></h2>
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
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('first_name');?></th>
	<th><?php echo $paginator->sort('last_name');?></th>
	<th><?php echo $paginator->sort('category');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($smachot as $simcha):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $simcha['Simcha']['id']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['created']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['modified']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['date']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['first_name']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['last_name']; ?>
		</td>
		<td>
			<?php echo $simcha['Simcha']['category']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $simcha['Simcha']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $simcha['Simcha']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $simcha['Simcha']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $simcha['Simcha']['id'])); ?>
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
		<li><?php echo $html->link(__('New Simcha', true), array('action'=>'add')); ?></li>
	</ul>
</div>
