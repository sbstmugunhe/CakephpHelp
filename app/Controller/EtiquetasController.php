<?php
App::uses('AppController', 'Controller');

class EtiquetasController extends AppController{
	
	public $users = array ();
	
	public function index()
	{
		
	}
	
	public function viewPdf() {
		$this->layout = 'pdf';
   		$this->render();
		
		

	}
}


?>