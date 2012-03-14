<div class="iggyAdvisors index">
<h1><?php __('Iggy Advisors');?></h1>
<?php
$i = 0;
foreach ($iggyAdvisors as $iggyAdvisor):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<div<?php echo $class;?>>
		<?php echo $html->image('/files/iggy_advisors/thumb/medium/'.$iggyAdvisor['IggyAdvisor']['picture_file_name'], array('class'=>'float')); ?>
		<h2><?php echo $iggyAdvisor['IggyAdvisor']['name']; ?></h2>
		<h3><?php echo $iggyAdvisor['IggyAdvisor']['position']; ?></h3>
		<?php echo $iggyAdvisor['IggyAdvisor']['bio']; ?>
	</div>
<?php endforeach; ?>
</div>