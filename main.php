<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Electron App</title>
</head>

<body>
    <button id="openButton">Open New Window</button>
    <?php
    if (isset($_SESSION['x'])) {
        echo     $_SESSION['x'];
    }

    ?>
    <script>
        const electron = require('electron');
        const {
            ipcRenderer
        } = electron;
        const openButton = document.getElementById('openButton');
        openButton.addEventListener('click', () => {
            ipcRenderer.send('openNewWindow');
        });
    </script>
</body>

</html>