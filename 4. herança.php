A herança = signifca herdar alguma coisa de alguém.
Exemplo: Um filho pode herdar alguns traços do pai, ou comportamentos etc.

Em OOP podemos dizer que significa copiar algumas funcionalidade.

Exemplo1:
Nota1:Temos uma classe que calcula os lados.
<?php
class shapes{
    function sides(){
    }

    function calculate_area(){
    }
}

Exemplo2:
Nota1: Se as classes abaixo precisassem ter as funões "sides e calculate_area"
então em vez de repetir o código conforme baixo extenderiamos simplemente a classe.
Conforme exemplo3.

class circle { 
        function sides(){
        }

        function calculate_area(){
        }
}

class square { 
    function sides(){
    }

    function calculate_area(){
    }
}   

Exemplo3: Extender a classe forma, e automaticamente eles herdam as funcionalidades
do shapes como se estivesse a usar a classe shapes.

class circle extends shapes { 
        function sides(){
        }

        function calculate_area(){
        }
}

class square extends shapes { 
    function sides(){
    }

    function calculate_area(){
    }
}   