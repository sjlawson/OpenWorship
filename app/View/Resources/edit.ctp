<div class="resources form">
<?php echo $this->Form->create('Resource'); ?>
	<fieldset>
		<legend><?php echo __('Edit Resource'); ?></legend>
	<?php
		echo $this->Form->input('_id');
		echo $this->Form->input('_user_id');
		echo $this->Form->input('standard_lib');
		echo $this->Form->input('title');
		echo $this->Form->input('url');
		echo $this->Form->input('resource_type');
		echo $this->Form->input('license');
		echo $this->Form->input('meta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resource._id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resource._id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
