<?php

/***O que é uma classe?
R: é uma Descrição / molde / padrão / retrato dos objectos
***/

//descrevemos a classe
class Produto{
	
	    //variacel
		public $preco = 2;
		public $cor = "verde";
		public $total = 0;
		
		//metodo
		function calcula_total(){
		 echo "mostra";	
		}
}

//moldar os objectos da classe
$livro = new Produto();
echo "livro" . $livro->calcula_total();
echo "<br>";

$geleira = new Produto();
echo "geleira" . $geleira->preco;
echo "<br>";

$cama = new Produto();
echo "cama" . $cama->preco;
echo "<br>";