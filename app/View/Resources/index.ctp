<div class="resources index">
	<h2><?php echo __('Resources'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('_id'); ?></th>
			<th><?php echo $this->Paginator->sort('_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('standard_lib'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('resource_type'); ?></th>
			<th><?php echo $this->Paginator->sort('license'); ?></th>
			<th><?php echo $this->Paginator->sort('meta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resources as $resource): ?>
	<tr>
		<td><?php echo h($resource['Resource']['_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resource['User']['lastname'], array('controller' => 'users', 'action' => 'view', $resource['User']['_id'])); ?>
		</td>
		<td><?php echo h($resource['Resource']['standard_lib']); ?>&nbsp;</td>
		<td><?php echo h($resource['Resource']['title']); ?>&nbsp;</td>
		<td><?php echo h($resource['Resource']['url']); ?>&nbsp;</td>
		<td><?php echo h($resource['Resource']['resource_type']); ?>&nbsp;</td>
		<td><?php echo h($resource['Resource']['license']); ?>&nbsp;</td>
		<td><?php echo h($resource['Resource']['meta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resource['Resource']['_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resource['Resource']['_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resource['Resource']['_id']), null, __('Are you sure you want to delete # %s?', $resource['Resource']['_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Resource'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
