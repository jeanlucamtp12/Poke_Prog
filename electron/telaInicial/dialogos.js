

var textos = ["> Olá, eu sou o professor Erbie! Seja bem vindo a Progdea. Algumas coisas estranhas vem acontecendo na nossa cidade e gostaria da sua ajuda para tentar resolvê-las. Você precisa passar por 7 pontos da cidade, em cada um deles você terá uma tarefa para realizar. No caminho você vai aprender um pouco sobre programação e conhecer alguns pokémon também. Conto com você! Clique em iniciar e vamos começar pela fase 1!!",
    "> Aqui é a indústria onde produzimos as caixas conhecidas como “caixas variáveis”. Cada caixa possui um rótulo que indica o tipo de conteúdo que ela possui por dentro. Uma caixa variável pode conter números, letras e até mesmo palavras.  Acontece que uma espécie de pokémon chamada de Unown invadiu nossa fábrica. Aparentemente esses pokémon possuem a forma do alfabeto, eles estão formando palavras, não consigo entendê-las muito bem… Acho que eles querem ajudar na organização da fábrica. Você poderia nos ajudar arrastando os Unown corretamente para as caixas correspondentes! Se tiver dúvidas sobre os tipos de caixas que fabricamos, pode clicar na guia de ajuda! ",
    "> Vamos para nosso segundo ponto! Essa é a escola decisão, ela tem esse nome, pois os alunos que estudam nela são treinados a tomarem decisões. Tudo isso ocorre através de uma batalha de Pokémon. Espere você não tem um Pokémon, certo? Vou te emprestar um dos meus para que você possa batalhar com os outros alunos dessa escola. É muito simples, você deve responder as perguntas, se errar, você levará um ataque do inimigo, mas se acertar você consegue atacar seu adversário. Clique em iniciar para começar, mas tenha cautela, uma grande campeã chamada Cynthia está na escola hoje!! ",
    "> Chegamos ao lago repetição, neste lago os Timburr costumam construir pontes para ajudar os cidadãos da cidade a atravessarem para o bosque. Sua missão aqui é ajudar o Timburr a construir a ponte. É muito simples, basta pegar os troncos que estão caindo e colocá-los um a um no final da ponte. Tome muito cuidado, existem muitos Pokémon de água perigosos nesse lago. Vamos nessa!!!",
    "> Agora que construímos a ponte, podemos finalmente entrar no bosque. Me disseram que um Falinks que vivia aqui acabou se despedaçando e perdendo as partes do seu corpo. Gostaria que você ajudasse a cabeça do Falinks a coletar suas outras 10 partes. Vamos coletá-las e colocá-las dentro do que chamamos de vetor. Um vetor é uma caixa enorme com várias outras caixas dentro. Na nossa missão vamos colocar os Fanlinks dentro de um vetor com 10 caixas. Acredito ser o tamanho ideal, visto que temos 10 pedaços de Falinks espalhados pelo bosque. Não vamos perder mais tempo, clique em iniciar para começarmos a coleta!!",
    "> Vamos agora verificar como andam as coisas na casa das funções. Me informaram que está uma bagunça, por isso vou precisar da sua ajuda para organizar a casa. O Rotom é um fantasminha que consegue possuir objetos de casa, ele pode se transformar em vários objetos, como um forno, um ventilador, e até mesmo um telefone, acredita ? Ele se dispôs a te ajudar nessa missão. Ele vai possuir alguns objetos e te ajudar a organizar os cômodos da casa. Você pode começar pelo cômodo que quiser, a escolha é sua. Vamos lá, mãos à obra! ",
    "> Que medo!!! Vamos ter que passar no cemitério da cidade. Vários Pokémon fantasma vivem por lá, acontece que aparecerão alguns intrusos, que nós chamamos por aqui de Pokémon exceções, eles são diferentes em coloração aos Pokémon da sua espécie. O problema é que eles confundem os Pokémon daqui da cidade e fazem a maior confusão. Preciso que você capture esses Pokémon exceções para fazer com que os Pokémon do cemitério se acalmem. Conto com você!!!",
    "> Por fim, temos que passar na usina recursiva, aqui você enfrentará um desafio que vai exigir bastante do seu raciocínio. Existem cincos barras de Magnemite empilhadas, onde cada uma delas possui um tamanho diferente, elas estão empilhadas da menor para a maior. Seu desafio aqui é mover a pilha de um ponto a outro. Mas cuidado, você só consegue colocar pilhas de Magnemite em cima de outro, se este for maior. Chega de enrolação, é sempre melhor aprender na prática, certo? Háaaa, tente  pensar bem antes de realizar os movimentos, uma caixa de texto vai te dizer o número mínimo de movimentações que você deve atingir para ser considerado um gênio!!! "];


var textosFuncoes = ["> A geladeira não está funcionando, precisamos arrumá-la. O Rotom vai possuir a geladeira para te ajudar. Para completar a fase você precisa seguir o manual de instruções que o Rotom encontrou e organizar todos os itens corretamente, só assim a geladeira irá funcionar. Vamos nessa!!!!",
    " > Agora você precisa preparar algumas receitas para as visitas que vão vir até a casa das funções, mas para isso você precisa coletar todos os ingredientes para preparar uma pizza e um bolo. Os ingredientes estão espalhados pela cozinha, vou te emprestar meu Pokémon novamente para te ajudar, mas tome cuidado com os Pokémon brincalhões que vivem na casa. Não se preocupe com a parte de assar as comidas, Rotom se disponibilizou a se transformar no forno e irá te ajudar!! ",
    " > Precisamos organizar a lavanderia, está uma bagunça. Você precisa coletar as peças de roupas espalhadas pela lavanderia e colocá-las para lavar, cuidado com os Pokémon brincalhões que vivem na casa. Rotom vai te ajudar a lavá-las se transformando numa máquina de lavar!!",
    "> Precisamos ir até o quintal colher algumas frutas, legumes e verduras, além de cortar a grama. Rotom vai ajudar a derrubar as comidas que estão presas nos pés de Wormadam, ele irá se transformar em um ventilador para soprar as comidas e fazê-las cair, além disso ele vai se transformar em um cortador para te ajudar com a grama. Boa sorte e cuidados com as Combees que estão coletando pólen lá fora! ",
    "> Precisamos ir até o quintal colher algumas frutas, legumes e verduras, além de cortar a grama. Rotom vai ajudar a derrubar as comidas que estão presas nos pés de Wormadam, ele irá se transformar em um ventilador para soprar as comidas e fazê-las cair, além disso ele vai se transformar em um cortador para te ajudar com a grama. Boa sorte e cuidados com as Combees que estão coletando pólen lá fora!"];



var sweetalerts = ["Parabéns, você concluiu a fase! Vamos continuar!"];



function exibeNotificação(tipo, texto, link) {
    Swal.fire({
        icon: tipo,
        title: texto,
        allowOutsideClick: false,
        customClass: {
            container: "custom-swal",
          },
        // showConfirmButton: true,
        //timer: 1500
    }).then((result) => {

        if (result.isConfirmed && link != "") {

            window.location.href = link; //"http://localhost/jogo/electron/telaInicial/city.html";
        }
    });
}




document.addEventListener('click', musicPlay);
function musicPlay() {
    document.getElementById('audio').play();
    document.removeEventListener('click', musicPlay);
}


