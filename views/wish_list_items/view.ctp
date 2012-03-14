<div class="wishListItems view">
<h1><?php  __('WishListItem');?></h1>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wishListItem['WishListItem']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wishListItem['WishListItem']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wishListItem['WishListItem']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Item'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wishListItem['WishListItem']['item']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit WishListItem', true), array('action'=>'edit', $wishListItem['WishListItem']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete WishListItem', true), array('action'=>'delete', $wishListItem['WishListItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wishListItem['WishListItem']['id'])); ?> </li>
		<li><?php echo $html->link(__('List WishListItems', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New WishListItem', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
