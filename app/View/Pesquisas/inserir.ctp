<?php 
echo $this->Form->create(); 
echo $this->Form->input("sexo", array("type" => "select", "label" => "Qual o seu sexo?", "empty" => "Selecione uma opção", "options" => $sexo)); 
echo $this->Form->input("faixa_etaria", array("type" => "select", "label" => "Qual a sua idade?", "empty" => "Selecione uma opção", "options" => $faixa_etaria)); 
echo $this->Form->input("localidade", array("type" => "select", "label" => "Onde mora?", "empty" => "Selecione uma opção", "options" => $localidade)); 
echo $this->Form->input("ocupacao", array("type" => "select", "label" => "Qual a sua ocupação?", "empty" => "Selecione uma opção", "options" => $ocupacao)); 
echo $this->Form->end('Salvar');

