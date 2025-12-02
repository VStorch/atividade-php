<?php
    function conecta_bd() {
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "crud";

        return new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    }

    function cadastra_usuario($nome, $data_nasc, $email, $telefone) {
        $con = conecta_bd();
        $stmt = $con -> prepare("INSERT INTO usuarios(nome, data_nasc, email, telefone)
                                VALUES(:nome, :data_nasc, :email, :telefone)");
        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':data_nasc', $data_nasc);
        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam('telefone', $telefone);
        return $stmt -> execute();
    }
?>