<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;

	class ProdutosController extends AppController {

		public $paginate = [ 'limit' => 2];

		public function initialize(){
			parent::initialize();

			$this->loadComponent('Paginator');
			$this->loadComponent('Csrf');
		}

		public function index(){
			$produtosTable = TableRegistry::get('Produtos');
			$produtos = $produtosTable->find('all');
			$this->set('produtos', $this->paginate($produtos));
		
		}

		public function novo(){
			$produtosTable = TableRegistry::get('Produtos');
			$produto = $produtosTable->newEntity();
			$this->set('produto', $produto);
		}
	
		public function salva(){

			$produtosTable = TableRegistry::get('Produtos');
			$dados = $this->request->data();
			$produto = $produtosTable->newEntity($dados);

			if(!$produto->errors() && $produtosTable->save($produto)) {
		        $this->Flash->set("Produto inserido com sucesso", ['element' => 'success']);
		        $this->redirect(['action' => 'index']);
		    }else {
		        $this->Flash->set("Erro ao inserir o produto", ['element' => 'error']);
		    }
		    $this->set('produto', $produto);
		    $this->render('novo');
		}
			

		public function editar($id){

			$produtosTable = TableRegistry::get('Produtos');
			$produto = $produtosTable->get($id);
			$this->set('produto', $produto);
			$this->render('novo');
		}

		
		public function deletar($id) {
		    $produtosTable = TableRegistry::get('Produtos');    
		    $produto = $produtosTable->get($id);

		    if($produtosTable->delete($produto)) {
		        $this->Flash->set("Produto removido com sucesso", ['element' => 'error']);
		    }else {
		        $this->Flash->set("Erro ao remover o produto", ['element' => 'error']);
		    }
		    $this->redirect(['action' => 'index']);
		}

	}

 ?>