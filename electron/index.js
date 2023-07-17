const {app, BrowserWindow} = require ('electron')
//const Tray = electron.Tray


app.whenReady().then(() => {

    //const appIcon = new Tray(__dirname+'./img/home/icone.png')
    //criando uma nova janela
    const janela = new BrowserWindow({
       // icon: __dirname+'./img/home/icone.png',
        width: 1280,
        height: 720,
        fullscreen: true, 
        //nodeIntegration: false,
        frame: false,
        kiosk: true,
        icon: './img/home/icone.png',
        title: 'PokeProg',
        name: 'PokeProg',

        webPreferences: {
            nodeIntegration: true,
        }
    });

    //carregando a pagina html
    janela.loadFile('./telaInicial/index.html');

    //carregando o console 
    //janela.webContents.openDevTools();

})