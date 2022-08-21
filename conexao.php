<?php
    $dadosConexao = [
        "host" => "localhost",
        "user" => "root",
        "pass" => "",
        "db" => "loja_de_carros"
    ];
    $conexao = mysqli_connect($dadosConexao["host"], $dadosConexao["user"], $dadosConexao["pass"], $dadosConexao["db"]);


?>