<?php
    include_once("connection.php");

    $task = $_POST["task"];

    if (!$conn->query("INSERT INTO lista (tarefa) VALUES ('$task')")) {
        echo $conn->error;
    }

    header('location: ../index.php')
?>