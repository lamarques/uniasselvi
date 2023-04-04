<?php

include __DIR__ . '/anexos/connection.php';

$sql = "INSERT INTO contato VALUE (NOT NULL, 'Rogerio Lamarques', 'rogerio.lamarques@gmail.com', 'MASCULINO', 'teste de inserção')";

try {
    $conn->query($sql);
    echo "Adicionado com sucesso";
} catch (Exception $e) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}