<div class="songSlides view">
<h2><?php echo __('Song Slide'); ?></h2>
	<dl>
		<dt><?php echo __(' Id'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($songSlide['User']['lastname'], array('controller' => 'users', 'action' => 'view', $songSlide['User']['_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' Bg Resource Id'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['_bg_resource_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['license']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Custom Styles'); ?></dt>
		<dd>
			<?php echo h($songSlide['SongSlide']['custom_styles']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Song Slide'), array('action' => 'edit', $songSlide['SongSlide']['_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Song Slide'), array('action' => 'delete', $songSlide['SongSlide']['_id']), null, __('Are you sure you want to delete # %s?', $songSlide['SongSlide']['_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Song Slides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song Slide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
