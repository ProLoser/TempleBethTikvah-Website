<div class="scrolls index">
<h1 class="pdf"><?php __('Scrolls');?> <?php echo $this->Html->image('pdf_icon_24x24.png'); ?></h1>
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
foreach ($scrolls as $scroll):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<li<?php echo $class;?>>
		<?php echo $html->link(__($time->format('Y F', $scroll['Scroll']['published']), true), '/files/scroll/'.$scroll['Scroll']['scroll_file_name']); ?>
	</li>
<?php endforeach; ?>
</ul>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>