<div class="googleAppSites view">
<h2><?php  __('GoogleAppSite');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $googleAppSite['GoogleAppSite']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit GoogleAppSite', true), array('action'=>'edit', $googleAppSite['GoogleAppSite']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete GoogleAppSite', true), array('action'=>'delete', $googleAppSite['GoogleAppSite']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $googleAppSite['GoogleAppSite']['id'])); ?> </li>
		<li><?php echo $html->link(__('List GoogleAppSites', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New GoogleAppSite', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
