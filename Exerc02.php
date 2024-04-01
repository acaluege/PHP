<?php

/***Como ter acesso da classe sem instanciar o objecto?
 * R: Produto::(metodo ou variavel)
***/

//descrevemos a classe
class Produto{
	
	    //variacel
		static public $preco = 2;
		public $cor = "verde";
		public $total = 0;
		
		//metodo
		static function gerar_id(){
			return rand(0,9999);
			
		}
}

//Acesso direto ao metodo da classe
$num = Produto::gerar_id();
echo $num;