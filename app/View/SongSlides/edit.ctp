

<script type="text/javascript"> 
    tinyMCE.init({ 
        theme : "modern",
	toolbar: "hr",
        mode : "textareas", 
        convert_urls : false 
    }); 
</script>
<div class="songSlides form">
<?php echo $this->Form->create('SongSlide'); ?>
	<fieldset>
		<legend><?php echo __('Edit Song Slide'); ?></legend>
	<?php
		echo $this->Form->input('_id');
		echo $this->Form->input('_user_id');
		echo $this->Form->input('_bg_resource_id');
		echo $this->Form->input('title');
		echo $this->Form->input('author');
		echo $this->Form->input('license');
		echo $this->Form->input('content');
		echo $this->Form->input('custom_styles');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SongSlide._id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SongSlide._id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Song Slides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
