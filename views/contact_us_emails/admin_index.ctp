<div class="contactUsEmails index">
<h2><?php __('ContactUsEmails');?></h2>
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
	<th><?php echo $paginator->sort('category');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('subject');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contactUsEmails as $contactUsEmail):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['id']; ?>
		</td>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['created']; ?>
		</td>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['category']; ?>
		</td>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['name']; ?>
		</td>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['email']; ?>
		</td>
		<td>
			<?php echo $contactUsEmail['ContactUsEmail']['subject']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $contactUsEmail['ContactUsEmail']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $contactUsEmail['ContactUsEmail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contactUsEmail['ContactUsEmail']['id'])); ?>
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
