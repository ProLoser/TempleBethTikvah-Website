<div class="mensClubScrollArticles index">
	<h2><?php __('Mens Club Scroll Articles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('publish_date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($mensClubScrollArticles as $mensClubScrollArticle):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $mensClubScrollArticle['MensClubScrollArticle']['id']; ?>&nbsp;</td>
		<td><?php echo $mensClubScrollArticle['MensClubScrollArticle']['created']; ?>&nbsp;</td>
		<td><?php echo $mensClubScrollArticle['MensClubScrollArticle']['modified']; ?>&nbsp;</td>
		<td><?php echo $mensClubScrollArticle['MensClubScrollArticle']['title']; ?>&nbsp;</td>
		<td><?php echo $mensClubScrollArticle['MensClubScrollArticle']['publish_date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $mensClubScrollArticle['MensClubScrollArticle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $mensClubScrollArticle['MensClubScrollArticle']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $mensClubScrollArticle['MensClubScrollArticle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $mensClubScrollArticle['MensClubScrollArticle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Records %start% to %end% of %count%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mens Club Scroll Article', true), array('action' => 'add')); ?></li>
	</ul>
</div>