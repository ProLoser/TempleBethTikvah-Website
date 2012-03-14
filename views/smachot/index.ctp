<div class="smachot index">
<h1><?php __('Smachot');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('first_name');?></th>
	<th><?php echo $paginator->sort('last_name');?></th>
	<th><?php echo $paginator->sort('category');?></th>
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
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>