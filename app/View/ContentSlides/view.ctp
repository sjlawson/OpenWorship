<div class="contentSlides view">
<h2><?php echo __('Content Slide'); ?></h2>
	<dl>
		<dt><?php echo __(' Id'); ?></dt>
		<dd>
			<?php echo h($contentSlide['ContentSlide']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contentSlide['User']['lastname'], array('controller' => 'users', 'action' => 'view', $contentSlide['User']['_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($contentSlide['ContentSlide']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta'); ?></dt>
		<dd>
			<?php echo h($contentSlide['ContentSlide']['meta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($contentSlide['ContentSlide']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($contentSlide['ContentSlide']['notes']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Content Slide'), array('action' => 'edit', $contentSlide['ContentSlide']['_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Content Slide'), array('action' => 'delete', $contentSlide['ContentSlide']['_id']), null, __('Are you sure you want to delete # %s?', $contentSlide['ContentSlide']['_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Slides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Slide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
