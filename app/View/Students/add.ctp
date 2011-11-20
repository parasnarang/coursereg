<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php echo __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('regno');
		echo $this->Form->input('fname');
		echo $this->Form->input('lname');
		echo $this->Form->input('gender');
		echo $this->Form->input('dob');
		echo $this->Form->input('department_id');
		echo $this->Form->input('yearenrolled');
		echo $this->Form->input('cgpa');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
