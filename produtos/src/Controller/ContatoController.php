<?php 
namespace App\Controller;
use App\Form\ContatoForm;

class ContatoController extends AppController {

	public function index() {

		$contato = new ContatoForm();

		if ($this->request->is('post')){
			$contato->execute($this->request->data());
			$this->Flash->set('Email enviado com sucesso!');
		}else{
			$this->Flash->set('Erro ao enviar o email', ['element' => 'error']);

		}

		$this->set('contato', $contato);
	}


}

 ?>
