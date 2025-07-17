<?php
session_start();
 
class User
{
    public $user;
    public $senha;
 
    public function __construct(string $user, string $senha){
        $this -> user = $user;
        $this -> senha = $senha;
    }
}
 
$usuarios = [
     new User(user: "admin1", senha: "1234"),
     new User(user: "admin2", senha: "5678"),
     new User(user: "admin3", senha: "91011"),
     new User(user: "admin4", senha: "12131"),
     new User(user: "admin5", senha: "15161")];
 
function validarUsuario(string $user, string $senha, array $usuarios): ?User{
    foreach ($usuarios as $usuario) {
        if($usuario-> user === $user && $usuario-> senha === $senha){
            return $usuario;
        }
    }
    return null;
}
 
if($_POST){
    $user = $_POST['txtUser'];
    $senha = $_POST['txtSenha'];
 
    $usuarioValido = validarUsuario($user, $senha, $usuarios);
 
    if($usuarioValido){
        $_SESSION["usuario"]=$usuarioValido->user;
        header("Location: dashboard.php");
        exit;
    }else{
        $error = "Usuario ou senha inválidos";
    }
}
?>