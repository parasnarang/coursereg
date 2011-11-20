<div class="instructors form">
<?php echo $this->Form->create('Instructor');?>
	<fieldset>
		<legend><?php echo __('Edit Instructor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('gender');
		echo $this->Form->input('roomno');
		echo $this->Form->input('yearEnrolled');
		echo $this->Form->input('Department');
		echo $this->Form->input('Course');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instructor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Instructor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instructors'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
