<div class="wishListItems index">
<h1><?php __('WishListItems');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('item');?></th>
</tr>
<?php
$i = 0;
foreach ($wishListItems as $wishListItem):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wishListItem['WishListItem']['modified']; ?>
		</td>
		<td>
			<?php echo $wishListItem['WishListItem']['item']; ?>
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