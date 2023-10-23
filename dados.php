<?php
$serverName = "DESKTOP-SLS5OQ8";
$connectionOptions = array(
    "Database" => "MeuBancoDeDados",
    "Uid" => "nome",
    "PWD" => "email"
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die("Erro na conexão com o SQL Server: " . sqlsrv_errors());
}
?>
