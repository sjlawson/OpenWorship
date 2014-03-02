<div class="resources view">
<h2><?php echo __('Resource'); ?></h2>
	<dl>
		<dt><?php echo __(' Id'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resource['User']['lastname'], array('controller' => 'users', 'action' => 'view', $resource['User']['_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Standard Lib'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['standard_lib']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resource Type'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['resource_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('License'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['license']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta'); ?></dt>
		<dd>
			<?php echo h($resource['Resource']['meta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resource'), array('action' => 'edit', $resource['Resource']['_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resource'), array('action' => 'delete', $resource['Resource']['_id']), null, __('Are you sure you want to delete # %s?', $resource['Resource']['_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resources'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resource'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
