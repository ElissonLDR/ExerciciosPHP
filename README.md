EXERCICIOS

________________________________________________________________________________________________________________

1- Em um sistema de logistica, a organização dos pacotes de entrega é uma tarefa fundamental para o bom desempenho dos processos. Alocar volumes para as entregas de forma eficiente permite uma economia significativa no final do mes.
O modulo do sistema de logistica que determina a ordem em que os pacotes devem ser alocados para transporte precisa de uma função que retorno o pacote com maior volume dentro de uma lista de pacotes candidatos.
Nessa tarefa voce deve construir uma funçao que recebe um array de pacotes e retorne o volume do maior pacote.

Descrição da Função 

Para resolver o problema rescreva uma funçao chamada maior(). Essa funçao deve receber um array com o volume dos pacotes e retornar o volume do maior pacote.

A função maior()) deve receber o seguinte parametro:
- $pacotes: um array de numeros decimais maiores que zero.
________________________________________________________________________________________________________________

2- Alan e Bruna inventaram um exercício.O professor avaliou os dois exercicios concedendo pontos em uma escala de 1 a 100 para tres categorias: clareza do
problema originalidade e dificuldade.
Partindo do principio que as notas de Alan são representados por a[0], a[1] e a[2] e as notas de Bruna são representadas por  b[0], b[1] e b[2].
Sua tarefa é definir a pontuação dessa competição atraves da comparação de cada um dos tres criterios avaliados:
- Se a[1] > b[i]. Alan ganha um ponto.
- Se a[1] < b[i]. Bruna ganha um ponto.
- Se a[1] = b[i]. Ninguem ganha ponto.

A pontuação final é a soma de pontos em acada criterio.

Para resolver o problema escreva uma função chamada campeao(). Essa função deve receber dois arrays com a nota dos concorrentes e tretornar um array com a pontuação final de cada um.
A função campeao() deve receber os seguintes parametros: 
$a: um array de numeros inteiros entre 1 e 100 com as notas do primeiro competidor
$b: um array de numeros inteiros entre 1 e 100 com as notas do segundo competidor

O retorno deve ser um array com duas posições com valores entre 0 e 3.
________________________________________________________________________________________________________________

3- Uma maquina de venda de refrigerantes automatica possui um componente que da o troco para o cliente.Esse componente /tem o objetivo de dar o troco com o menor numero de notas possiveis. Essa maquina possui notas de R$2 - R$5 - R$10 - R$20 e R$50. Ela nao da troco de moeda e possui notas infinitas. Os valores dos produtos nao permite troco para valores que nao possam ser compostos por essas notas.
Por exemplo, para dar um troco de R$89, a maquina deve retornar:
- Nota de 50 (1)
- Nota de 20 (1)
- Nota de 10 (1)
- Nota de 5 (1)
- Nota de 2 (2)

Crie uma função que recebe um valor de troca e devolva um array ccom a composição das notas do troco.

Descrição da função
 Para resolver o problema, escreva uma função chamada troco(). Essa função deve receber um numero inteiro com o valor do troco e retorna um array com a quantidade de notas do troco seguindo a estrutura a seguir:
 A função troco() deve receber os seguintes parametros:
 - $valor: um inteiro com o valor do troco
 O retorno deve ser um array no seguinte formato. 
<p>r[0]  r[1]  r[2] r[3] r[4]</p>
<p>| 1 | | 1 | | 1 | | 1| | 2|</p>
<p>|$50| |$20| |$10| |$5| |$2|</p>