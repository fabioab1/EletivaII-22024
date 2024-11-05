<?php
    
    declare(strict_types=1);
    require_once '../config/bancodedados.php';

    function login(string $email, string $senha)
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
        $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $pdo->beginTransaction();
            $senha = password_hash('adm', PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
            $stmt->execute(['Administrador', 'adm@adm.com', $senha, 'adm']);
            $pdo->commit();
        }

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha']))
            return $usuario;
        else
            return null;

    }

    function novoUsuario(string $nome, string $email, string $senha, string $nivel): bool
    {
        global $pdo;
        $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
        $stmt = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $email, $senha_criptografada, $nivel]);
 
    }

    function excluirUsuario(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
        return $stmt->execute([$id]);
 
    }

    function todosUsuarios(): array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM usuario WHERE nivel <> 'adm'");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    }

    function retornaUsuarioPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE id = ?");
        $stmt->execute([$id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario ? $usuario : null;
 
    }

    function editarUsuario(int $id): bool
    {   
        global $pdo;
        $stmt = 

    }

?>