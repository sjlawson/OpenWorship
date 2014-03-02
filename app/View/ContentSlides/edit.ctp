<div class="contentSlides form">
<?php echo $this->Form->create('ContentSlide'); ?>
	<fieldset>
		<legend><?php echo __('Edit Content Slide'); ?></legend>
	<?php
		echo $this->Form->input('_id');
		echo $this->Form->input('_user_id');
		echo $this->Form->input('title');
		echo $this->Form->input('meta');
		echo $this->Form->input('content');
		echo $this->Form->input('notes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContentSlide._id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContentSlide._id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Content Slides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
