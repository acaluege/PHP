SAIBA TUDO SOBRE MVC na Pratica do PHP

Model

View

Controller

Camada de modelo ou da lógica da aplicação (Model) Modelo é a ponte entre as camadas Visão (View) e Controle (Controller), consiste na parte lógica da aplicação, que gerencia o comportamento dos dados através de regras de negócios, lógica e funções.

É o coração da execução, responsável por tudo que a aplicação vai fazer a partir dos comandos da camada de controle em um ou mais elementos de dados, respondendo a perguntas sobre o sua condição e a instruções para mudá-las. O modelo sabe o que o aplicativo quer fazer e é a principal estrutura computacional da arquitetura, pois é ele quem modela o problema que está se tentando resolver. Modela os dados e o comportamento por trás do processo de negócios. Se preocupa apenas com o armazenamento, manipulação e geração de dados. É um encapsulamento de dados e de comportamento independente da apresentação.

Camada de apresentação ou visualização (View) Visão pode ser qualquer saída de representação dos dados, como uma tabela ou um diagrama. É onde os dados solicitados do Modelo (Model) são exibidos. É possível ter várias visões do mesmo dado, como um gráfico de barras para gerenciamento e uma visão tabular para contadores. A Visão também provoca interações com o usuário, que interage com o Controle (Controller).

Camada de controle ou controlador (Controller) Controle é o componente final da tríade, faz a mediação da entrada e saída, comandando a visão e o modelo para serem alterados de forma apropriada conforme o usuário solicitou através do mouse e teclado. O foco do Controle é a ação do usuário, onde são manipulados os dados que o usuário insere ou atualiza, chamando em seguida o Modelo.

O Controle (Controller) envia essas ações para o Modelo (Model) e para a janela de visualização (View) onde serão realizadas as operações necessárias.

Vantagens do modelo MVC*

Como o modelo MVC gerencia múltiplos views usando o mesmo modelo é fácil manter, testar e atualizar sistemas compostos;
É muito simples adicionar novos clientes apenas incluindo seus views e controles;
Torna a aplicação escalável;
É possível ter desenvolvimento em paralelo para o modelo, visualizador e controle pois são independentes;
Facilita o reuso do código;
Melhor nível de sustentabilidade, pois facilita a manutenção da aplicação;
Fácil transformação da interface, sem que haja necessidade de modificar a camada de negócio;
Melhor desempenho e produtividade, graças a estrutura de pacotes modulares;
A arquitetura modular permite aos desenvolvedores e designers desenvolverem em paralelo;
Partes da aplicação podem ser alteradas sem a necessidade de alterar outras.
*Desvantagens do modelo MVC

Necessita de um tempo maior para explorar e modelar o sistema;
Requer mão-de-obra especializada;
À medida que o tamanho e a complexidade do projeto crescem, a quantidade de arquivos e pastas continuará aumentando também. Os interesses de UI (interface do usuário) (modelos, exibições, controladores) se localizam em várias pastas, que não são formadas em grupos por ordem alfabética.
