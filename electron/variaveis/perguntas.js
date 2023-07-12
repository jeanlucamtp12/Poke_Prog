const fs = require('fs');
var dados = "";
var vetorBD = [];
const pathVar = require('path');

const caminhoArquivoV = pathVar.resolve('./');

const filePathVar = pathVar.join(caminhoArquivoV, 'bd.txt');

var texto = fs.readFileSync(filePathVar,'utf8')

    const temp = texto.split('\n');

    temp.forEach((i) => {
        const resultado = i.split('-')[1];
        
        vetorBD.push(resultado);
});





var perguntas = [

    {
      question: vetorBD[0],
      answers: [
        { option: vetorBD[1]},
      ],
    },


    {
        question: vetorBD[2],
        answers: [
          { option: vetorBD[3]},
        ],
      
    },



    {
        question: vetorBD[4],
        answers: [
          { option: vetorBD[5]},
        ],
    },



    {
        question: vetorBD[6],
        answers: [
          { option: vetorBD[7]},
        ],
    },


    {
        question: vetorBD[8],
        answers: [
          { option: vetorBD[9]},
        ],
    },


    {
        question: vetorBD[10],
        answers: [
          { option: vetorBD[11]},
        ],
    },


    {
        question: vetorBD[12],
        answers: [
          { option: vetorBD[13]},
        ],
    },


];


