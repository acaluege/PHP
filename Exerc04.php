<?php

/***Como retornar os dados da função
 * R: return
***/


//descrevemos a classe
class Produto{
	
	    //variacel
		public $preco = 2;
		public $cor = "verde";
		static public $total = 0;
		
		//metodo
		static function calcula_total(){

			$total = 10 * 200;
				return $total;
		}
}

//Acesso direto a variavel da classe
$livro = Produto::calcula_total();
echo $livro;