const {app, BrowserWindow} = require ('electron')

app.whenReady().then(() => {

    //criando uma nova janela
    const janela = new BrowserWindow({
        width: 1280,
        height: 720,
        webPreferences: {
            nodeIntegration: true,
        }
    });


    //carregando a pagina html
    janela.loadFile('./telaInicial/index.html');

    //carregando o console 
    //janela.webContents.openDevTools();

})