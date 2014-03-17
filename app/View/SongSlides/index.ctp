<div class="songSlides index">
	<h2><?php echo __('Song Slides'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('_id'); ?></th>
			<th><?php echo $this->Paginator->sort('_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('_bg_resource_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('license'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('custom_styles'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($songSlides as $songSlide): ?>
	<tr>
		<td><?php echo h($songSlide['SongSlide']['_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($songSlide['User']['lastname'], array('controller' => 'users', 'action' => 'view', $songSlide['User']['_id'])); ?>
		</td>
		<td><?php echo h($songSlide['SongSlide']['_bg_resource_id']); ?>&nbsp;</td>
		<td><?php echo h($songSlide['SongSlide']['title']); ?>&nbsp;</td>
		<td><?php echo h($songSlide['SongSlide']['author']); ?>&nbsp;</td>
		<td><?php echo h($songSlide['SongSlide']['license']); ?>&nbsp;</td>
		<td><?php echo substr(h($songSlide['SongSlide']['content']), 0, 200); ?>&nbsp;</td>
		<td><?php echo h($songSlide['SongSlide']['custom_styles']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $songSlide['SongSlide']['_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $songSlide['SongSlide']['_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $songSlide['SongSlide']['_id']), null, __('Are you sure you want to delete # %s?', $songSlide['SongSlide']['_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Song Slide'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
