<h1>Acesse o Sistema</h1>

<?php 

	echo $this->Form->create();
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->button('Acessar');  echo " ".$this->Html->link('Cadastrar', ['controller' => 'Users', 'action' => 'adicionar']);
	echo $this->Form->end();


 ?>