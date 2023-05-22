var perguntas = [
    {
      question: "Qual dessas não é um tipo de variável?",
      answers: [
        { option: "Números inteiros", correct: false },
        { option: "Palavras", correct: false },
        { option: "Números reais", correct: false },
        { option: "Contas", correct: true },
      ],
    },
    {
      question: "Qual tipo de caixinha (variável) armazena 123?",
      answers: [
        { option: "Numeros inteiros", correct: true },
        { option: "Palavras", correct: false },
        { option: "Booleanos", correct: false },
        { option: "Letras", correct: false },
      ],
    },
    {
      question: "O que significa atribuir um valor a uma variável?",
      answers: [
        { option: "Excluir a caixa", correct: false },
        { option: "Retirar um valor de dentro da caixa", correct: false },
        { option: "Colocar um valor dentro da caixa", correct: true },
      ],
    },
    {
      question: "O que significa 'se uma condição for verdadeira / acerta a pergunta durante a batalha' em uma estrutura de decisão?",
      answers: [
        { option: "Ataca o oponente", correct: true },
        { option: "Nada acontece", correct: false },
        { option: "É atacado pelo oponente", correct: false },
      ],
    },

    {
      question: "O que significa 'se uma condição for falsa / errar a pergunta durante a batalha' em uma estrutura de decisão?",
      answers: [
        { option: "Ataca o oponente", correct: false },
        { option: "É atacado pelo oponente", correct: true },
        { option: "Nada acontece", correct: false },
      ],
    },

    {

      question: "  O que significa o operador == durante as perguntas da fase ?",
      answers: [
        { option: "Multiplicação", correct: false },
        { option: "Divisão", correct: false },
        { option: "Comparação de igualdade", correct: true },
        { option: "Comparação de desigualdade", correct: false },
      ],
    },





    {
      question: "Qual ação você teve que executar de forma repetida várias vezes durante a fase?",
      answers: [
        { option: "Carregar os troncos para projetar a ponte", correct: true },
        { option: "Atravessar a ponte", correct: false },
        { option: "Usar poderes", correct: false },
      ],
    },




    {
      question: "Realizar uma mesma tarefa diversas vezes, faz com que você crie?",
      answers: [
        { option: "Um caminho", correct: false },
        { option: "Um triangulo", correct: false },
        { option: "Um loop", correct: true },
      ],
    },




    {
      question: "O que acontece com os números de troncos cada vez que você pega um novo, e o leva até a borda da ponte?",
      answers: [
        { option: "Aumenta o número de troncos (incrementa)", correct: true },
        { option: "Diminui o número de troncos (decrementa)", correct: false },
        { option: "Nada acontece", correct: false },
      ],
    },




    { 
      question: "Qual era o tamanho do vetor de Falinks que você teve que montar?",
      answers: [
        { option: "16", correct: false },
        { option: "10", correct: true },
        { option: "22", correct: false },
        { option: "12", correct: false },
      ],
    },


    {
      question: "Você acha que seria possível obter um vetor de Falinks maior que 10?",
      answers: [
        { option: "sim", correct: true },
        { option: "não", correct: false },
      ],
    },


    {
      question: "O que descreve melhor o que lhe foi pedido durante a segunda fase dos Falinks?",
      answers: [
        { option: "Atribuição de ids para cada Falinks do vetor", correct: false },
        { option: "Atribuição de nomes para alguns Falinks do vetor", correct: true },
        { option: "Atribuição de número para cada Falinks do vetor", correct: false },
      ],
    },


    {
      question: "Caso não utilizasse as funções dos dispositivos Rotom, como ficaria a casa?",
      answers: [
        { option: "Normal, não alteraria nada", correct: false },
        { option: "Bagunçada, a casa continuaria desarrumada", correct: true },
        { option: "Limpa, não alteraria o estado da casa", correct: false },
      ],
    },

    {
      question: "Qual era o maior objetivo da fase de funções?",
      answers: [
        { option: "Coletar as frutas", correct: false },
        { option: "Lavar roupas", correct: false },
        { option: "Organizar a casa", correct: true },
        { option: "Fazer um bolo", correct: false },
      ],
    },

    
    {
      question: "Qual o maior objetivo de uma função ?",
      answers: [
        { option: "Organização, simplificação", correct: true },
        { option: "Complexidade, dificultar análise ", correct: false },
        { option: "Visibilidade, tornar as coisas mais fáceis de serem visualizadas ", correct: false },
      ],
    },

    {
      question: "O que causa uma exceção/diferenciação na fase?",
      answers: [
        { option: "Pokemon diferente dos convencionais", correct: true },
        { option: "Pokemon iguais as convencionais", correct: false },
        { option: "Fantasmas no cemitério", correct: false },
      ],
    },

    {
      question: "Caso os Pokémon shinies não fossem capturados, o que iria acontecer?",
      answers: [
        { option: "Desordem, os Pokémon shiny continuariam afetando a convivência dos demais ", correct: true },
        { option: "Nada ocorreria, são amigos", correct: false },
        { option: "Festa, seria uma grande festança, visto que os Pokémon shiny não estavam assustando os demais", correct: false },
      ],
    },

    {
      question: "O que aconteceu quando você tratou/capturou todas as exceções?",
      answers: [
        { option: "Os Pokémon começaram a brigar entre si", correct: false },
        { option: "Uma grande confusão, os Pokémon começaram a sentir faltas dos diferentes", correct: false },
        { option: "Tudo voltou a funcionar como era antes, os Pokémon já não estavam mais confusos", correct: true },
      ],
    },

    {
      question: "Durante o teste recursivo, você utilizou uma fórmula/função recursiva para resolver a torre de hanoi.<br> Qual das opções abaixo melhor define a fórmula/função que você utilizou para completar o desafio?",
      answers: [
        { option: "Pegou o maior bloco da pilha e moveu para o terceiro pino.<br> Depois, usou a fórmula novamente para mover todos os blocos menores que ficaram no primeiro pino para o segundo pino.<br> E por último, usou a fórmula mais uma vez para mover todos os discos menores do segundo pino para o terceiro pino.", correct: true },
        { option: "Pegou o menor bloco da pilha e moveu para o terceiro pino.<br> Depois, usou a fórmula novamente para mover todos os blocos maiores que ficaram no primeiro pino para o segundo pino.<br> E por último, usou a fórmula mais uma vez para mover todos os discos maiores do segundo pino para o terceiro pino.", correct: false },
      ],
    
    },
  ];


