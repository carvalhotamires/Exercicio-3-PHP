<?php
$login_padrao = "Tamires";
$senha_padrao = "1234";

// Verifique se o formulário foi enviado
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    $usuario = $_POST['username'];
    $senha = $_POST['password'];

    
    if ($usuario == $login_padrao && $senha == $senha_padrao) {
      
        session_start();

        
        $_SESSION['logou'] = 1;

        
        header("Location: area_restrita.php");
    } else {
        
        header("Location: index.html?erro=1");
    }
} else {
    
    header("Location: index.html");
}
?>
