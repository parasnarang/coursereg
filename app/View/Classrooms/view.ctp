<div class="classrooms view">
<h2><?php  echo __('Classroom');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($classroom['Classroom']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($classroom['Classroom']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaxCapacity'); ?></dt>
		<dd>
			<?php echo h($classroom['Classroom']['maxCapacity']); ?>
			&nbsp;
		</dd>

	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Classroom'), array('action' => 'edit', $classroom['Classroom']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Classroom'), array('action' => 'delete', $classroom['Classroom']['id']), null, __('Are you sure you want to delete # %s?', $classroom['Classroom']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Classrooms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classroom'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses');?></h3>
	<?php if (!empty($classroom['Course'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cname'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Credits'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($classroom['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id'];?></td>
			<td><?php echo $course['cname'];?></td>
			<td><?php echo $course['department_id'];?></td>
			<td><?php echo $course['credits'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), null, __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
