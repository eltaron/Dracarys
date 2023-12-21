<?php
try {
    $con = new PDO('sqlite:D:\desktopApps\Dracarys\db.sqlite3');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //throw exception
} catch (PDOException $e) {
    echo 'Failed To Connect' . $e->getMessage();
}
