<?php


	class Personnage{
		
		public $vie = 80;
		public $experience = 80;
		public $nom;
		
		
		public function __construct($nom){
			$this->nom = $nom;
		}
		
		public function revivre(){
			
			$this->vie = 100;
			
		}
		
		public function tuer(){
			
			$this->vie = 0;
			
		}
		
		public function crier(){
			echo "Youuhouhou !!!!";
		}
		
		public function mort(){
			
			if ($this->vie != 0) {
				
				echo $this->nom . "est encore vivant";
				
			}
			else{
				
				
				echo $this->nom . "est mort helas !!!";
			}
			
			
		}
	
	}