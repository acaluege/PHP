OOP PHP COURSE
===============
1. Classes / Objects

Classe: é a planta da casa.
Objecto: é a planta se materializando como casa.

Nota1: 
    - Usamos "Funções para Classes repetidas" e 
    - Usamos "Classes para Funções repetidas".

Nota2: 
    - Classes tem muitas vantagens sobre as funções.   
 ****************************************************************
 Ex1: 
 Imaginemos que temos uma (1) forma e precisamos calcular a area.
    
    //função para um circulo
    functions calculate_area(){
        
    }

    //função para um quadrado
    functions calculate_area(){
        
    }
Nota1: No exemplo acima se fossemos executar teriamos erro, erro "nome da função".
Não podemos nunca fazer isso.
********************************************************************
Ex2: 
 Imaginemos que temos uma (1) forma e precisamos calcular a area.
    
    //função para um circulo
    functions calculate_area_circle(){
        ...
    }

    //função para um quadrado
    functions calculate_area_square(){
        ...
    }
Nota1: No exemplo acima corrigimos o nome da função, porém no calculo do "circulo ou do quadrado"
na medida que vamos trabalhando vamos nos deparar que os dados são iguais tanto para um como para.
Tendo o Ex2 como exemplo estariamos nos repetindo a nivel de código.
***********************************************************************
Ex3:
Solução:
"Usamos Classes para Funções repetidas".
Para solucionar o problema do Ex1 e Ex2 colocamos as "funcionalidades" dentro da "Classe".

class circle { 
    //função para um circulo
    functions calculate_area(){
        ...
    }
}

class quadrado{ 
    //função para um quadrado
    functions calculate_area(){
        ...
    }
}

Nota1: Desta forma podemos calcular a area pois ambas funções estão dentro de uma classe
Apesar de que ainda continuamos a ter funções similares nas determinadas classes.
***************************************************************************

methods (metodos)
properties (propriedade)
inheritace (herança)
instatiation (instanciação)

- accessors - private - public - protected - static

2. Getters, setters, constructors, destructores

3. abstract classes, interfaces, traits

4. magic methods
__GET, __SET, __CONSTRUCT __CALL, __TOSTRING

5. pratical signup and login