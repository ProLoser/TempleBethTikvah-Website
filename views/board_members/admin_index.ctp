<div class="boardMembers index">
<h2><?php __('BoardMembers');?></h2>
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
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('board');?></th>
	<th><?php echo $paginator->sort('order');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($boardMembers as $boardMember):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $boardMember['BoardMember']['id']; ?>
		</td>
		<td>
			<?php echo $time->niceShort($boardMember['BoardMember']['created']); ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['position']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['name']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['email']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['board']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['order']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $boardMember['BoardMember']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $boardMember['BoardMember']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $boardMember['BoardMember']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $boardMember['BoardMember']['id'])); ?>
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
		<li><?php echo $html->link(__('New BoardMember', true), array('action'=>'add')); ?></li>
	</ul>
</div>
