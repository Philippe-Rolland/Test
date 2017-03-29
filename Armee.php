<?php

class Armee{
	
	
	public $hommes = 50;
	public $nomChef;
	
	public function __construct($nomChef){
		
		$this->nomChef = $nomChef;
		
	}
	
	public function nombreHomme(){
		
		echo $this->$hommes;
		
	}
	

	
}