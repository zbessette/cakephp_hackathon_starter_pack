<h1>Register</h1>
<?= $this->Form->create('Register'); ?>
	<?= $this->Form->control('first_name'); ?>
	<?= $this->Form->control('last_name'); ?>
	<?= $this->Form->control('username'); ?>
	<?= $this->Form->control('password'); ?>
	<?= $this->Form->submit(); ?>
<?= $this->Form->end(); ?>
