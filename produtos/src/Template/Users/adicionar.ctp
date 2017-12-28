<h1>Cadastrar usuário</h1>
<?php 

	echo $this->Form->create($user, ['url' => ['action' => 'salvar']]);
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->button('Cadastrar');
	echo $this->Html->link('Acesso ao Sistema', ['controller' => 'Users', 'action' => 'login']);
	echo $this->Form->end();
 ?>