<div class="yartzeits index">
<h1><?php __('Yartzeits');?></h1>
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
	<th><?php echo $paginator->sort('memorial_plaque');?></th>
</tr>
<?php
$i = 0;
foreach ($yartzeits as $yartzeit):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $yartzeit['Yartzeit']['date']; ?>
		</td>
		<td>
			<?php echo $yartzeit['Yartzeit']['first_name']; ?>
		</td>
		<td>
			<?php echo $yartzeit['Yartzeit']['last_name']; ?>
		</td>
		<td>
			<?php echo $yartzeit['Yartzeit']['memorial_plaque']; ?>
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