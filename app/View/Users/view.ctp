<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __(' Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($user['User']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organisation'); ?></dt>
		<dd>
			<?php echo h($user['User']['organisation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($user['User']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($user['User']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['_id']), null, __('Are you sure you want to delete # %s?', $user['User']['_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Slides'), array('controller' => 'content_slides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Slides'), array('controller' => 'content_slides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resources'), array('controller' => 'resources', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resources'), array('controller' => 'resources', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Song Slides'), array('controller' => 'song_slides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song Slides'), array('controller' => 'song_slides', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Content Slides'); ?></h3>
	<?php if (!empty($user['content_slides'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __(' User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Meta'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['content_slides'] as $contentSlides): ?>
		<tr>
			<td><?php echo $contentSlides['_id']; ?></td>
			<td><?php echo $contentSlides['_user_id']; ?></td>
			<td><?php echo $contentSlides['title']; ?></td>
			<td><?php echo $contentSlides['meta']; ?></td>
			<td><?php echo $contentSlides['content']; ?></td>
			<td><?php echo $contentSlides['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'content_slides', 'action' => 'view', $contentSlides['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'content_slides', 'action' => 'edit', $contentSlides['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'content_slides', 'action' => 'delete', $contentSlides['id']), null, __('Are you sure you want to delete # %s?', $contentSlides['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Content Slides'), array('controller' => 'content_slides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($user['events'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __(' User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Content Json'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['events'] as $events): ?>
		<tr>
			<td><?php echo $events['_id']; ?></td>
			<td><?php echo $events['_user_id']; ?></td>
			<td><?php echo $events['date']; ?></td>
			<td><?php echo $events['title']; ?></td>
			<td><?php echo $events['content_json']; ?></td>
			<td><?php echo $events['notes']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $events['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $events['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $events['id']), null, __('Are you sure you want to delete # %s?', $events['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Events'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Resources'); ?></h3>
	<?php if (!empty($user['resources'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __(' User Id'); ?></th>
		<th><?php echo __('Standard Lib'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Resource Type'); ?></th>
		<th><?php echo __('License'); ?></th>
		<th><?php echo __('Meta'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['resources'] as $resources): ?>
		<tr>
			<td><?php echo $resources['_id']; ?></td>
			<td><?php echo $resources['_user_id']; ?></td>
			<td><?php echo $resources['standard_lib']; ?></td>
			<td><?php echo $resources['title']; ?></td>
			<td><?php echo $resources['url']; ?></td>
			<td><?php echo $resources['resource_type']; ?></td>
			<td><?php echo $resources['license']; ?></td>
			<td><?php echo $resources['meta']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resources', 'action' => 'view', $resources['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resources', 'action' => 'edit', $resources['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resources', 'action' => 'delete', $resources['id']), null, __('Are you sure you want to delete # %s?', $resources['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resources'), array('controller' => 'resources', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Song Slides'); ?></h3>
	<?php if (!empty($user['song_slides'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __(' Id'); ?></th>
		<th><?php echo __(' User Id'); ?></th>
		<th><?php echo __(' Bg Resource Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('License'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Custom Styles'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['song_slides'] as $songSlides): ?>
		<tr>
			<td><?php echo $songSlides['_id']; ?></td>
			<td><?php echo $songSlides['_user_id']; ?></td>
			<td><?php echo $songSlides['_bg_resource_id']; ?></td>
			<td><?php echo $songSlides['title']; ?></td>
			<td><?php echo $songSlides['author']; ?></td>
			<td><?php echo $songSlides['license']; ?></td>
			<td><?php echo $songSlides['content']; ?></td>
			<td><?php echo $songSlides['custom_styles']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'song_slides', 'action' => 'view', $songSlides['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'song_slides', 'action' => 'edit', $songSlides['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'song_slides', 'action' => 'delete', $songSlides['id']), null, __('Are you sure you want to delete # %s?', $songSlides['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Song Slides'), array('controller' => 'song_slides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
