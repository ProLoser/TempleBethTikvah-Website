<div class="boardMembers index">
<h1><?php __('BoardMembers');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('board');?></th>
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
			<?php echo $boardMember['BoardMember']['position']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['name']; ?>
		</td>
		<td>
			<?php echo $boardMember['BoardMember']['email']; ?>
		</td>
		<td>
			<?php if ($boardMember['BoardMember']['board']) echo 'Board Member'; ?>
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