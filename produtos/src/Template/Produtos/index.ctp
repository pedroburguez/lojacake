<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Preço com Desconto</th>
			<th>Descrição</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($produtos as $produto) { ?>
        <tr>
            <td><?= $produto['id']; ?></td>
            <td><?= $produto['nome']; ?></td>
            <td><?= $this->Money->format($produto['preco']); ?></td>
            <td><?= $this->Money->format($produto->calculaDesconto()); ?></td>
            <td><?= $produto['descricao']; ?></td>
            <td>
            	<?php echo $this->Html->link('Editar', ['controller' => 'produtos', 'action' => 'editar', $produto['id']]); ?>

            	<?php  
            		  echo $this->Form->postLink('Apagar', ['controller' => 'produtos', 'action' => 'deletar', $produto['id']], ['confirm' => 'Deseja apagar o produto '. $produto['nome']. '?']);
            	?>
            </td>
        </tr>
    	<?php } ?>
	</tbody>
</table>
<?php
	
	echo $this->Html->link('Nove Produto', ['controller' => 'produtos', 'action' => 'novo']);
	echo " ";
	echo " ";
	echo $this->Html->link('Sair', ['controller' => 'Users', 'action' => 'logout']);
	echo " ";
	echo " ";
	echo $this->Html->link('Enviar email', ['controller' => 'Contato', 'action' => 'index']);

?>
<div class="paginator">
	<ul class="pagination">
		<?php 
			
			echo $this->Paginator->prev('Voltar');
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('Avançar');
		 ?>
	 </ul>
 </div>