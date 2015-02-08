
<div class="users view large-10 medium-9 columns">
	<h1>Login</h1>
	<?= $this->Form->create() ?>
	<?= $this->Form->input('email') ?>
	<?= $this->Form->input('password') ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Html->link('Register', array('action' => 'add'), array('escape'=>false,'title' => "add"))?>
	<?= $this->Form->end() ?>
</div>
