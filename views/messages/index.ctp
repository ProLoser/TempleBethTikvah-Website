<?php  $paginator->options(array('url' => $this->passedArgs)); ?>

<div class="messages index">
<h1><?php __('Messages');?></h1>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<thead>
<tr>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('category');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
</thead>
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
			<?php echo $time->format('jS F Y',$message['Message']['published']); ?>
		</td>
		<td>
			<?php if (!empty($message['Message']['category'])) echo $categories[$message['Message']['category']]; ?>
		</td>
		<td>
			<?php echo $message['Message']['title']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $message['Message']['id'])); ?>
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
