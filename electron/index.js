const {app, BrowserWindow} = require ('electron')

app.whenReady().then(() => {


    //criando uma nova janela
    const janela = new BrowserWindow({
        width: 1280,
        height: 720,
        fullscreen: true, 
        //nodeIntegration: false,
        frame: false,
        webPreferences: {
            nodeIntegration: false,
        }
    });





    //carregando a pagina html
    janela.loadFile('./telaInicial/index.html');

    //carregando o console 
    //janela.webContents.openDevTools();

})