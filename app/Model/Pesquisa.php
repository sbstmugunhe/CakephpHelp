<?php class Pesquisa extends AppModel 
{
	 public $sexo = array("Masculino" => "Masculino", "Feminino" => "Feminino"); 
	 public $faixa_etaria = array("Abaixo dos 16 anos" => "Abaixo dos 16 anos", "17 a 20" => "17 a 20", "21 a 30" => "21 a 30", "31 a 40" => "31 a 40", "Acima dos 50 anos" => "Acima dos 50 anos"); 
	 public $onde_mora = array("Recife" => "Recife", "Cabo" => "Cabo", "Caetés" => "Caetés", "Outros" => "Outros"); 
	 public $trabalha = array("Sim" => "Sim", "Não" => "Não"); 
	 public $filhos = array("Sim" => "Sim", "Não" => "Não"); 
	 public $seCasado = array("Sim" => "Sim", "Não" => "Não"); 
	 public $ocupacao = array("Desempregado" => " Desempregado ", "Professor" => " Professor", "Engenheiro" => "Engenheiro", "Estudante" => "Estudante", "Outros" => "Outros"); 
	 public function sexoEntrevistado() 
	 	{
	 	 $genero = $this->find('all', array('fields' => array('count(Pesquisa.sexo) as quantidade', 'sexo'), 'group' => 'sexo'));
	 	 $dados = array(); 
	 	 foreach ($genero as $value) 
	 	 {
	 	 	$dados[$value['Pesquisa']['sexo']] = $value[0]['quantidade']; 
			} 
	 	 	 return $dados; 
		} 
		public function idadeEntrevistado() 
			{
	 	 	 	 $idade = $this->find('all', array('fields' => array('count(Pesquisa.faixa_etaria) as quantidade', 'faixa_etaria'), 'group' => 'faixa_etaria')); 
	 	 	 	 $dados = array(); 
	 	 	 	 foreach ($idade as $value) 
	 	 	 	 {
	 	 	 	 	$dados[$value['Pesquisa']['faixa_etaria']] = $value[0]['quantidade']; 
	 	 	 	 	 } 
	 	 	 	 	 return $dados; 
			} 
			public function localidadeEntrevistado() 
				{
	 	 	 	 	 	 $localidade = $this->find('all', array('fields' => array('count(Pesquisa.localidade) as quantidade', 'localidade'),'group' => 'localidade')); 
	 	 	 	 	 	 $dados = array(); 
	 	 	 	 	 	 foreach ($localidade as $value) 
	 	 	 	 	 	 {
	 	 	 	 	 	 	 $dados[$value['Pesquisa']['localidade']] = $value[0]['quantidade']; 
						} 
	 	 	 	 	 	 	 return $dados; 
						} 
	 	 	 	 	 	 	 public function seCasadoEntrevistado() 
	 	 	 	 	 	 	 {
	 	 	 	 	 	 	 	 $casado = $this->find('all', array('fields' => array('count(Pesquisa.se_casado) as quantidade', ' se_casado'), 'group' => ' se_casado')); 
	 	 	 	 	 	 	 	 $dados = array(); 
	 	 	 	 	 	 	 	 foreach ($casado as $value) 
	 	 	 	 	 	 	 	 {
	 	 	 	 	 	 	 	 	 $dados[$value['Pesquisa']['se_casado']] = $value[0]['quantidade']; 
} 
	 	 	 	 	 	 	 	 	 return $dados; 
							 } 
	 	 	 	 	 	 	 	 	 public function seTemFilhosEntrevistado() 
	 	 	 	 	 	 	 	 	 	{
	 	 	 	 	 	 	 	 	 	 $filhos = $this->find('all', array('fields' => array('count(Pesquisa.tem_filho) as quantidade', ' tem_filho'), 'group' => 'tem_filho')); 
	 	 	 	 	 	 	 	 	 	 $dados = array(); 
	 	 	 	 	 	 	 	 	 	 	foreach ($filhos as $value) 
	 	 	 	 	 	 	 	 	 	 	{
	 	 	 	 	 	 	 	 	 	 	 $dados[$value['Pesquisa']['tem_filho']] = $value[0]['quantidade']; 
											} 
	 	 	 	 	 	 	 	 	 	 	 return $dados; 
							} 
							public function ocupacaoEntrevistado() 
							{
	 	 	 	 	 	 	 	$ocupacao = $this->find('all', array('fields' => array('count(Pesquisa.ocupacao) as quantidade', 'ocupacao'), 'group' => 'ocupacao')); 
	 	 	 	 	 	 	 	$dados = array(); 
	 	 	 	 	 	 	 	 foreach ($ocupacao as $value) 
	 	 	 	 	 	 	 	 {
	 	 	 	 	 	 	 	 	 $dados[$value['Pesquisa']['ocupacao']] = $value[0]['quantidade']; 
								 } 
	 	 	 	 	 	 	 	 	return $dados; 
							} function beforeSave($options = array()) 
							{
	 	 	 	 	 	 	 $this->data['Pesquisa']['localidade'] = utf8_decode($this->data['Pesquisa']['localidade']); 
							} 
}

