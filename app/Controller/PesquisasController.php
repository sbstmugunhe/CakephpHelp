<?php class PesquisasController extends AppController 
{
	 public $helpers = array("Html", "Form"); 
	 // Recuperação das informações trazidas da base de dados pelo model e fazendo a transação para exibição na index. 
	 public function index() 
	 {
	 	$genero_sexual = $this->Pesquisa->sexoEntrevistado(); 
	 	$this->set('genero', $genero_sexual); 
	 	$faixaEtaria = $this->Pesquisa->idadeEntrevistado(); 
	 	$this->set('faixa_etaria', $faixaEtaria); 
	 	$localidade = $this->Pesquisa->localidadeEntrevistado(); 
	 	$this->set('localidade', $localidade); 
	 } 
	 // Função responsável pela inserção dos dados na base de dados. 
	 public function inserir() 
	 {
	 	 $sexo_entrevistado = $this->Pesquisa->sexo; $this->set("sexo", $sexo_entrevistado); 
	 	 $faixa_etaria = $this->Pesquisa->faixa_etaria; $this->set("faixa_etaria", $faixa_etaria); 
	 	 $onde_mora = $this->Pesquisa->onde_mora; $this->set("localidade", $onde_mora); 
	 	 $filho = $this->Pesquisa->filho; $this->set("filho", $filho); 
	 	 $casado = $this->Pesquisa->casado; $this->set("casado", $casado); 
		 $ocupacao = $this->Pesquisa->ocupacao; 
         $this->set("ocupacao",$ocupacao); 

if($this->request->is("post"))
{
	$this->Pesquisa->create();
	if($this->Pesquisa->save($this->request->data))
	{
		$this->Session->setFlash(__('Pesquisa inserida com sucesso'));
		$this->redirect(array("action"=>"/index"));
	}
	else
	{
		$this->Session->setFlash(__("Não foi possível inserir esta pesquisa"));
}
}
}
}
