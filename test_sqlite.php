<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $db = new SQLite3('/var/www/html/STIVEN_BLANDON_V/sugerencias.db');
    echo "Conexión a SQLite establecida correctamente.";
} catch (Exception $e) {
    echo "Error al conectar con SQLite: " . $e->getMessage();
}
?>