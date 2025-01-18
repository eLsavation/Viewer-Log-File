<?php
// config.php

// Tentukan direktori log
$logDir = 'logs/';
$logFiles = array_diff(scandir($logDir), array('..', '.'));

// Fungsi untuk membaca file log
function readLogFile($file) {
    return nl2br(file_get_contents($file));
}
?>