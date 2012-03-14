<div class="googleAppSites index">
<h2><?php __('GoogleAppSites');?></h2>
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
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($googleAppSites as $googleAppSite):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['id']; ?>
		</td>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['created']; ?>
		</td>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['name']; ?>
		</td>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['url']; ?>
		</td>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['published']; ?>
		</td>
		<td>
			<?php echo $googleAppSite['GoogleAppSite']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $googleAppSite['GoogleAppSite']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $googleAppSite['GoogleAppSite']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $googleAppSite['GoogleAppSite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $googleAppSite['GoogleAppSite']['id'])); ?>
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
		<li><?php echo $html->link(__('New GoogleAppSite', true), array('action'=>'add')); ?></li>
	</ul>
</div>
