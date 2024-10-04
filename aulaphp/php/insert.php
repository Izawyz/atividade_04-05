<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $host = 'localhost';
        $db = 'senai_aulaphp'
        $user = 'Isabella'
        $pass = '123456'
        $port = 3307;
        require_once 'php/connection.php';
        $database = new Database($host,$db,$user,$pass,$port);
        $database -> connect();
        $pdo = $database->getConnection();

        if ($pdo) {
               try {
                // Prepara uma consulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
                $stmt = $pdo->prepare("INSERT into usuario(nome, senha) values ('Valquer','123456');");
                
                // Executa a consulta preparada
                $stmt->execute();

                } catch (PDOException $e) {
                    // Captura e exibe qualquer exceção (erro) que possa ocorrer durante a consulta ao banco de dados
                    echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
                }
            }
    ?>
</head>