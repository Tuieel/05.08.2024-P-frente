<?php

class db {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $port = "3306";
    private $dbname = "bd_dunuts_av02";
    function conn() {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
            );
            return $conn;
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
        }
    }

    function insert($tabela, $dados) {
        $conn = $this->conn();
        $sql = "INSERT INTO $tabela (";
        $flag = 0;
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= " $campo";
            } else {
                $sql .= " , $campo";
            }
            $flag = 1;
        }
        $sql .= ") VALUES (";
        $flag = 0;
        $vetorDados = [];
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= " ?";
            } else {
                $sql .= " , ?";
            }
            $flag = 1;
            $vetorDados[] = $valor;
        }
        $sql .= " )";
        $st = $conn->prepare($sql);
        $st->execute($vetorDados);
    }

    function all($tabela) {
        $conn = $this->conn();
        $sql = "SELECT * FROM $tabela";
        $st = $conn->prepare($sql);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_CLASS);
    }

    function destroy($tabela, $id) {
        $conn = $this->conn();
        $sql = "DELETE FROM $tabela WHERE id = ?";
        $st = $conn->prepare($sql);
        $st->execute([$id]);
    }

    function find($tabela, $id) {
        $conn = $this->conn();
        $sql = "SELECT * FROM $tabela WHERE id = ?";
        $st = $conn->prepare($sql);
        $st->execute([$id]);
        return $st->fetchObject();
    }

    function update($tabela, $dados) {
        $id = $dados['id'];
        unset($dados['id']);
        $conn = $this->conn();
        $sql = "UPDATE $tabela SET ";
        $flag = 0;
        $vetorDados = [];
        foreach ($dados as $campo => $valor) {
            if ($flag == 0) {
                $sql .= " $campo= ?";
            } else {
                $sql .= " , $campo= ?";
            }
            $flag = 1;
            $vetorDados[] = $valor;
        }
        $sql .= " WHERE id = $id";
        $st = $conn->prepare($sql);
        $st->execute($vetorDados);
    }

    function search($tabela, $data) {
        $tipo = $data['tipo'];
        $valor = $data['valor'];
        $conn = $this->conn();
        $sql = "SELECT * FROM $tabela WHERE $tipo LIKE ?";
        $st = $conn->prepare($sql);
        $st->execute(["%$valor%"]);
        return $st->fetchAll(PDO::FETCH_CLASS);
    }

    function login($data) {
        $conn = $this->conn();
        $sql = "SELECT * FROM usuario WHERE cpf LIKE ?";
        $st = $conn->prepare($sql);
        $st->execute([$data['cpf']]);
        $result = $st->fetchObject();
        if (password_verify($data['senha'], $result->senha)) {
            return $result;
        } else {
            return "Error";
        }
    }
}

?>
