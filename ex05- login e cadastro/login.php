<?php
include("conexao.php")

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $EMAIL = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM DADOS WHERE EMAIL = ?";
    $stmt->prepare($sql);
    $stmt->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if(password_verify($senha, $usuario["senha"])) {
            echo"Login realizado com sucesso. Bem-vindo," . $usuario ["nome"];
        } else{
            echo"Senha incorreta.";
        } else{
            echo"usuário não encontrado.";
        } 
    }
        $stmt->close();
        $conn->close();   
}
?>