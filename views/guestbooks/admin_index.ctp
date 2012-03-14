<div class="guestbooks index">
<h2><?php __('Guestbooks');?></h2>
<p>Whenever a visitor signs the guestbook, they will not be prompted to do so again for 6 days. There is a link at the bottom of the page to skip the signup form. If the viewer chose not to sign the guestbook, the signup form will appear next to the webcam until they do.</p>
<br />
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
	<th><?php echo $paginator->sort('ip');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('location');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($guestbooks as $guestbook):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $guestbook['Guestbook']['id']; ?>
		</td>
		<td>
			<?php echo $guestbook['Guestbook']['created']; ?>
		</td>
		<td>
			<?php echo $guestbook['Guestbook']['ip']; ?>
		</td>
		<td>
			<?php echo $guestbook['Guestbook']['name']; ?>
		</td>
		<td>
			<?php echo $guestbook['Guestbook']['email']; ?>
		</td>
		<td>
			<?php echo $guestbook['Guestbook']['location']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $guestbook['Guestbook']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $guestbook['Guestbook']['id'])); ?>
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