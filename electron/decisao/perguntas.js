const fs2 = require('fs');
var dados = "";
var vetorBDDecisao = [];
const path = require('path');

const caminhoArquivo = path.resolve('./');

const filePath = path.join(caminhoArquivo, 'bd2.txt');

var texto = fs2.readFileSync(filePath,'utf8')

    const aux = texto.split('\n');

    aux.forEach((i) => {
        const resultado = i.split('★')[1];
        
        if(i.includes("\\n")){
         // vetorBDDecisao.push(resultado.replace(/\\n/g, "<br>")); split("\\n")
         var textoFormatado = resultado.replace(/\\n/g, "\n");

         console.log(textoFormatado)
          vetorBDDecisao.push(textoFormatado);

        }else{
          vetorBDDecisao.push(resultado);
        }
});



var perguntas = [

    {
      question: vetorBDDecisao[0],      
      answers: [
        { option: vetorBDDecisao[1], correct: false },
        { option: vetorBDDecisao[2], correct: true },
      
      ],
    },



    {
      question: vetorBDDecisao[3],      
        answers: [
          { option: vetorBDDecisao[4], correct: true },
          { option: vetorBDDecisao[5], correct: false },
        
        ],
    },
   


    {
      question: vetorBDDecisao[6],      
        answers: [
          { option: vetorBDDecisao[7], correct: false },
          { option: vetorBDDecisao[8], correct: true },
        
        ],
    },


    {
      question: vetorBDDecisao[9],      
        answers: [
          { option: vetorBDDecisao[10], correct: true },
          { option: vetorBDDecisao[11], correct: false },
        
        ],
    },




    {
      question: vetorBDDecisao[12],      
        answers: [
          { option: vetorBDDecisao[13], correct: false },
          { option: vetorBDDecisao[14], correct: true },
        
        ],
    },



    {
      question: vetorBDDecisao[15],      
        answers: [
          { option: vetorBDDecisao[16], correct: true },
          { option: vetorBDDecisao[17], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[18],      
        answers: [
          { option: vetorBDDecisao[19], correct: true },
          { option: vetorBDDecisao[20], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[21],      
        answers: [
          { option: vetorBDDecisao[22], correct: false },
          { option: vetorBDDecisao[23], correct: true },
        
        ],
    },



    {
      question: vetorBDDecisao[24],      
        answers: [
          { option: vetorBDDecisao[25], correct: true },
          { option: vetorBDDecisao[26], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[27],      
        answers: [
          { option: vetorBDDecisao[28], correct: false },
          { option: vetorBDDecisao[29], correct: true },
        
        ],
    },



    {
      question: vetorBDDecisao[30],      
        answers: [
          { option: vetorBDDecisao[31], correct: false },
          { option: vetorBDDecisao[32], correct: true },
        
        ],
    },



    {
      question: vetorBDDecisao[33],      
        answers: [
          { option: vetorBDDecisao[34], correct: true },
          { option: vetorBDDecisao[35], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[36],      
        answers: [
          { option: vetorBDDecisao[37], correct: false },
          { option: vetorBDDecisao[38], correct: true },
        
        ],
    },


    {
      question: vetorBDDecisao[39],      
        answers: [
          { option: vetorBDDecisao[40], correct: true },
          { option: vetorBDDecisao[41], correct: false },
        
        ],
    },


    {
      question: vetorBDDecisao[42],      
        answers: [
          { option: vetorBDDecisao[43], correct: true },
          { option: vetorBDDecisao[44], correct: false },
        
        ],
    },


    {
      question: vetorBDDecisao[45],      
        answers: [
          { option: vetorBDDecisao[46], correct: true },
          { option: vetorBDDecisao[47], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[48],      
        answers: [
          { option: vetorBDDecisao[49], correct: false },
          { option: vetorBDDecisao[50], correct: true },
        
        ],
    },





    {
      question: vetorBDDecisao[51],      
        answers: [
          { option: vetorBDDecisao[52], correct: false },
          { option: vetorBDDecisao[53], correct: true },
        
        ],
    },



    {
      question: vetorBDDecisao[54],      
        answers: [
          { option: vetorBDDecisao[55], correct: true },
          { option: vetorBDDecisao[56], correct: false },
        
        ],
    },



    {
      question: vetorBDDecisao[57],      
        answers: [
          { option: vetorBDDecisao[58], correct: false },
          { option: vetorBDDecisao[59], correct: true },
        
        ],
    },



];


