<div class="courses view">
<h2><?php  echo __('Course');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($course['Course']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cname'); ?></dt>
		<dd>
			<?php echo h($course['Course']['cname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($course['Department']['dname'], array('controller' => 'departments', 'action' => 'view', $course['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Credits'); ?></dt>
		<dd>
			<?php echo h($course['Course']['credits']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Course'), array('action' => 'edit', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Course'), array('action' => 'delete', $course['Course']['id']), null, __('Are you sure you want to delete # %s?', $course['Course']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Classrooms'), array('controller' => 'classrooms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Classroom'), array('controller' => 'classrooms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructors'), array('controller' => 'instructors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructor'), array('controller' => 'instructors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Classrooms');?></h3>
	<?php if (!empty($course['Classroom'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th><?php echo __('MaxCapacity'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Classroom'] as $classroom): ?>
		<tr>
			<td><?php echo $classroom['id'];?></td>
			<td><?php echo $classroom['location'];?></td>
			<td><?php echo $classroom['maxCapacity'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'classrooms', 'action' => 'view', $classroom['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'classrooms', 'action' => 'edit', $classroom['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'classrooms', 'action' => 'delete', $classroom['id']), null, __('Are you sure you want to delete # %s?', $classroom['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Classroom'), array('controller' => 'classrooms', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Instructors');?></h3>
	<?php if (!empty($course['Instructor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fname'); ?></th>
		<th><?php echo __('Lname'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Roomno'); ?></th>
		<th><?php echo __('YearEnrolled'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Instructor'] as $instructor): ?>
		<tr>
			<td><?php echo $instructor['id'];?></td>
			<td><?php echo $instructor['fname'];?></td>
			<td><?php echo $instructor['lname'];?></td>
			<td><?php echo $instructor['gender'];?></td>
			<td><?php echo $instructor['dob'];?></td>
			<td><?php echo $instructor['age'];?></td>
			<td><?php echo $instructor['roomno'];?></td>
			<td><?php echo $instructor['yearEnrolled'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instructors', 'action' => 'view', $instructor['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instructors', 'action' => 'edit', $instructor['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instructors', 'action' => 'delete', $instructor['id']), null, __('Are you sure you want to delete # %s?', $instructor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instructor'), array('controller' => 'instructors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Students');?></h3>
	<?php if (!empty($course['Student'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Regno'); ?></th>
		<th><?php echo __('Fname'); ?></th>
		<th><?php echo __('Lname'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Yearenrolled'); ?></th>
		<th><?php echo __('Cgpa'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($course['Student'] as $student): ?>
		<tr>
			<td><?php echo $student['id'];?></td>
			<td><?php echo $student['regno'];?></td>
			<td><?php echo $student['fname'];?></td>
			<td><?php echo $student['lname'];?></td>
			<td><?php echo $student['gender'];?></td>
			<td><?php echo $student['dob'];?></td>
			<td><?php echo $student['address'];?></td>
			<td><?php echo $student['department_id'];?></td>
			<td><?php echo $student['yearenrolled'];?></td>
			<td><?php echo $student['cgpa'];?></td>
			<td><?php echo $student['age'];?></td>
			<td><?php echo $student['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $student['id']), null, __('Are you sure you want to delete # %s?', $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
