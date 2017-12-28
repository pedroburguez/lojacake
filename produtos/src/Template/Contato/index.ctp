<h1>Eviando email</h1>
<?php 
	
	echo $this->Form->create($contato);
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->input('mensagem');
	echo $this->Form->button('Enviar');
	echo $this->Form->end();

	echo $this->Html->link('Voltar', ['controller' => 'produtos', 'action' => 'index']); 

 ?>