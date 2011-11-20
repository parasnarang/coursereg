<div class="instructors index">
	<h2><?php echo __('Instructors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('fname');?></th>
			<th><?php echo $this->Paginator->sort('lname');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('roomno');?></th>
			<th><?php echo $this->Paginator->sort('yearEnrolled');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($instructors as $instructor): ?>
	<tr>
		<td><?php echo h($instructor['Instructor']['id']); ?>&nbsp;</td>
		<td><?php echo h($instructor['Instructor']['fname']); ?>&nbsp;</td>
		<td><?php echo h($instructor['Instructor']['lname']); ?>&nbsp;</td>
		<td><?php echo h($instructor['Instructor']['gender']); ?>&nbsp;</td>
		<td><?php echo h($instructor['Instructor']['roomno']); ?>&nbsp;</td>
		<td><?php echo h($instructor['Instructor']['yearEnrolled']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instructor['Instructor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instructor['Instructor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instructor['Instructor']['id']), null, __('Are you sure you want to delete # %s?', $instructor['Instructor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}')
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
		<li><?php echo $this->Html->link(__('New Instructor'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
