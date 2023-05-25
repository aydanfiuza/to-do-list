<?php
    $servername = "localhost:1360";
    $username = "root";
    $password = "";
    $db = "lista_de_tarefas";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>