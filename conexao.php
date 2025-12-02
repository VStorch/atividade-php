<?php
    function conecta_bd() {
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "crud";

        return new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    }

    function cadastrar_usuario($nome, $data_nasc, $email, $telefone) {
        $con = conecta_bd();
        $stmt = $con -> prepare("INSERT INTO usuarios(nome, data_nasc, email, telefone)
                                VALUES(:nome, :data_nasc, :email, :telefone)");
        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':data_nasc', $data_nasc);
        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam(':telefone', $telefone);
        return $stmt -> execute();
    }

    function excluir_usuario($id) {
        $con = conecta_bd();
        $stmt = $con -> prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt -> bindParam(':id', $id);
        return $stmt -> execute();
    }

    function atualizar_usuario($id, $nome, $data_nasc, $email, $telefone) {
        $con = conecta_bd();
        $stmt = $con -> prepare("UPDATE usuarios SET nome = :nome, data_nasc = :data_nasc, email = :email, telefone = :telefone WHERE id = :id");
        $stmt -> bindParam(':id', $id);
        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':data_nasc', $data_nasc);
        $stmt -> bindParam(':email', $email);
        $stmt -> bindParam(':telefone', $telefone);
        return $stmt -> execute();
    }

    function get_usuario($id) {
        $con = conecta_bd();
        $stmt = $con -> prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
        return $stmt -> fetch(PDO::FETCH_ASSOC);
    }

    function get_usuarios() {
        $con = conecta_bd();
        $stmt = $con -> prepare("SELECT * FROM usuarios");
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }

?>