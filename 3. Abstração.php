Abstração: significa abstrato, algo vago ou seja alguma coisa não muito especifica.
O Vento é abstrato não vemos mas sentimos.

Regras.

1. Não é permitido instanciar classes abstratas.

2. Qualquer classe que tenha um método abstrato deve ser definida como abstrata.

3. Se tiver um metodo abstrato na classe abstrata, a classe filha deve implementar
esse método.

4. Classes abstratas podem ter métodos abstratos como também metodos "normais".

5. Quando uma classe abstrata implementa uma interface não precisa implementar os metodos
da interface, isso fica com as classes filhas que estendem a classe abstrata.

6- Classe Abstrata é como um template, onde a classe filha é que vai usar todos os
metodos e propriedades dela, caso claro forem publicas ou protegidas.

Quando devo usar:?
1. Quando usamos mais de uma classe de uma mesma familia, por exemplo:
pagamento, log, email, database...etc.

Todas as classes da mesma familia vão utilizar os mesmos metodos, então cria uma 
classe abstrata e as classes da familia vão utilizar estes metodos.
--------------------------------------------------------------------------------
Exemplo:Imagine se estivesses a calcular a area de um circulo, então colocamos um código diferente
dentro da classe circulo e do quadrado a mesma coisa.
Dependenco da situação dos claculos posso criar uma outra funcionalidade derivada de uma delas
mas com outro teor ou calculo. 
<?php
//Classe Circulo
class circle { 
    //função para um circulo
    function calculate_area(){
       // ...
    }
    //função para um circulo
    function myfunc(){
       // ...
    }
}

class square { 
    function calculate_area(){
    }
}
Nota: Classe Abstrata
    abstract class myclass{
    
            abstract function calculate_area();
}



