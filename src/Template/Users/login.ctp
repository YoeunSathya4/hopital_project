

<div class="users form">
	<h1>Users Login</h1>
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?=__('Please Enter email and password')?></legend>
		<?=$this->Form->control('email')?>
		<?=$this->Form->control('password')?>
	</fieldset>
<?=$this->Form->button(__('Login'));?>
<?= $this->Form->end() ?>
</div>