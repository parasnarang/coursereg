<div class="departments view">
<h2><?php  echo __('Department');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($department['Department']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dname'); ?></dt>
		<dd>
			<?php echo h($department['Department']['dname']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Department'), array('action' => 'edit', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Department'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instructors'), array('controller' => 'instructors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instructor'), array('controller' => 'instructors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Courses');?></h3>
	<?php if (!empty($department['Course'])):?>
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
		foreach ($department['Course'] as $course): ?>
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
<div class="related">
	<h3><?php echo __('Related Instructors');?></h3>
	<?php if (!empty($department['Instructor'])):?>
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
		foreach ($department['Instructor'] as $instructor): ?>
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
