<?php
include('connction.php'); // Corrija o nome do arquivo para 'connection.php'

#die();

header("Access-Control-Allow-Origin", "Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/javascript');
// Verifique se o valor 'lido' foi recebido via POST


if (isset($_POST['visto'])) {
    $valorLido = $_POST["visto"];
 // Escape o valor para evitar SQL injection (use prepared statements para maior segurança)
    $valorLido = mysqli_real_escape_string($db, $valorLido);
    // Query para inserir dados
    $sql = "INSERT INTO links (id, nome, url, visto) VALUES (null, 'valorfaf2', 'valsafor3', '$valorLido')";

    if (mysqli_query($db, $sql)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($db);
    }
} else {
    echo "Valor 'lido' não foi recebido corretamente.";
}
?>
