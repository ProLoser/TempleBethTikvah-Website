<div class="iggyPosts index">
<h1><?php __('IGGGY Posts');?></h1>
<p>To download a file, right-click the name and choose 'Save-As' from the droplist to save the file to your computer.</p>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Records %start% to %end% of %count%', true)
));
?></p>
<div class="paging">Reorder by <?php echo $paginator->sort('published');?></div>
<ul>
<?php
$i = 0;
foreach ($iggyPosts as $iggyPost):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	if ($i == 1) {
		$class = ' class="first"';
	}
?>
	<li<?php echo $class;?>>
		<?php echo $html->link($time->format('Y F', $iggyPost['IggyPost']['published']), '/files/iggy_posts/'.$iggyPost['IggyPost']['filename_file_name']); ?>
	</li>
<?php endforeach; ?>
</ul>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>