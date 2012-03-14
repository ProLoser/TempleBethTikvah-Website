<div class="googleAppSites index">
<h2><?php __('GoogleAppSites');?></h2>
<h4>Instructions:</h4>
<p>This section is for the site LISTINGS in the navigation bar. It does not create or manage sites in any way, only the links in the navigation bar.</p>
<ol>
	<li>Visit <a href="http://sites.templebethtikvah.com/">sites.templebethtikvah.com</a> and login with your Temple Google account</li>
	<li>Create a new site, making sure to note the URL you entered for your site</li>
	<li>Manage sites by choosing 'Browse sites in tbt.com' and be sure to check every categories (including uncategorized)</li>
	<li>Add a link to the site in the navigation bar link here.</li>
</ol>
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
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('order');?></th>
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
			<?php echo $time->niceShort($googleAppSite['GoogleAppSite']['created']); ?>
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
			<?php echo $googleAppSite['GoogleAppSite']['order']; ?>
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
