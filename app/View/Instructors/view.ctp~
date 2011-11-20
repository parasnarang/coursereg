<div class="instructors view">
<h2><?php  echo __('Instructor');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Roomno'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['roomno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('YearEnrolled'); ?></dt>
		<dd>
			<?php echo h($instructor['Instructor']['yearEnrolled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instructor'), array('action' => 'edit', $instructor['Instructor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instructor'), array('action' => 'delete', $instructor['Instructor']['id']), null, __('Are you sure you want to delete # %s?', $instructor['Instructor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departments');?></h3>
	<?php if (!empty($instructor['Department'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dname'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instructor['Department'] as $department): ?>
		<tr>
			<td><?php echo $department['id'];?></td>
			<td><?php echo $department['dname'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departments', 'action' => 'view', $department['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departments', 'action' => 'edit', $department['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departments', 'action' => 'delete', $department['id']), null, __('Are you sure you want to delete # %s?', $department['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses');?></h3>
	<?php if (!empty($instructor['Course'])):?>
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
		foreach ($instructor['Course'] as $course): ?>
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
