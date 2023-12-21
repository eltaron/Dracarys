const electron = require('electron')
const app = electron.app
const Menu = electron.Menu
const BrowserWindow = electron.BrowserWindow

const path = require('path')
const url = require('url')


app.on('ready', () => {
  if (process.platform === 'darwin') {
    var template = [{
      label: 'FromScratch',
      submenu: [{
        label: 'Quit',
        accelerator: 'CmdOrCtrl+Q',
        click: function() { app.quit(); }
      }]
    }, {
      label: 'Edit',
      submenu: [{
        label: 'Undo',
        accelerator: 'CmdOrCtrl+Z',
        selector: 'undo:'
      }, {
        label: 'Redo',
        accelerator: 'Shift+CmdOrCtrl+Z',
        selector: 'redo:'
      }, {
        type: 'separator'
      }, {
        label: 'Cut',
        accelerator: 'CmdOrCtrl+X',
        selector: 'cut:'
      }, {
        label: 'Copy',
        accelerator: 'CmdOrCtrl+C',
        selector: 'copy:'
      }, {
        label: 'Paste',
        accelerator: 'CmdOrCtrl+V',
        selector: 'paste:'
      }, {
        label: 'Select All',
        accelerator: 'CmdOrCtrl+A',
        selector: 'selectAll:'
      }]
    }];
    var osxMenu = Menu.buildFromTemplate(template);
    Menu.setApplicationMenu(osxMenu);
  }
})

// PHP SERVER CREATION /////
const PHPServer = require('php-server-manager');

let server
  if (process.platform === 'win32') {

server = new PHPServer({
    php: `${__dirname}/php/php.exe`,
    port: 5555,
    directory: __dirname,
    directives: {
        display_errors: 1,
        expose_php: 1
    }
    });
  } else {

server = new PHPServer({
  
    port: 5555,
    directory: __dirname,
    directives: {
        display_errors: 1,
        expose_php: 1
    }
});
};
let mainWindow
function createWindow() {
  server.run();
  mainWindow = new BrowserWindow({
    width: 1200,
    height: 700,
    icon: __dirname + '/icons/logo2.png',
    webPreferences: {
      nodeIntegration: true,
      contextIsolation: false
  }
  })
  mainWindow.loadURL('http://' + server.host + ':' + server.port + '/');
  const { shell } = require('electron');
  shell.showItemInFolder('fullPath');
  
   // Listen for a custom event from the renderer process
  electron.ipcMain.on('refresh-window', () => {
    mainWindow.reload();
  });

  electron.ipcMain.on('openCategoryWindow', () => {
    const newWindow = new BrowserWindow({ width: 600, height: 600,webPreferences: {
      nodeIntegration: true,
      contextIsolation: false
  } });
    newWindow.loadURL('http://' + server.host + ':' + server.port + '/view/categories/add.php');
  });
  mainWindow.on('closed', function () {
    server.close();
    mainWindow = null;
    app.quit();
  });
 
}

app.on('ready', createWindow) 
app.on('window-all-closed', function () {
  if (process.platform !== 'darwin') {
    server.close();
    app.quit();
  }
})
app.on('activate', function () {
  if (mainWindow === null) {
    createWindow()
  }
})