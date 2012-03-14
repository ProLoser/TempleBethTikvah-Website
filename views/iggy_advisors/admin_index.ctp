<div class="iggyAdvisors index">
<h2><?php __('IggyAdvisors');?></h2>
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
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('Picture', 'picture_file_name');?></th>
	<th><?php echo $paginator->sort('order');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($iggyAdvisors as $iggyAdvisor):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['id']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['created']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['modified']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['name']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['position']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['picture_file_name']; ?>
		</td>
		<td>
			<?php echo $iggyAdvisor['IggyAdvisor']['order']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $iggyAdvisor['IggyAdvisor']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $iggyAdvisor['IggyAdvisor']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $iggyAdvisor['IggyAdvisor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $iggyAdvisor['IggyAdvisor']['id'])); ?>
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
		<li><?php echo $html->link(__('New IggyAdvisor', true), array('action' => 'add')); ?></li>
	</ul>
</div>