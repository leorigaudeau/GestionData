process.env.GOOGLE_API_KEY='AIzaSyDSug2GWFqJ6RImT-6TVzr2nhq_9pdi82Q'
const {app, BrowserWindow} = require('electron')

let win

function createWindow () {
    win = new BrowserWindow({width: 1200, height: 750, resizable: true})

    win.loadFile('test.html')

    win.on('closed', () => {
        win = null
    })
}

app.on('ready', createWindow)

app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') {
        app.quit()
    }
})

app.on('activate', () => {
    if (win === null) {
        createWindow()
    }
})