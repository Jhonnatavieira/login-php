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


 /**
 * Valida um usuário com base em nome de usuário e senha.
 *
 * @param string $user     Nome de usuário fornecido para validação.
 * @param string $senha    Senha fornecida para validação.
 * @param array  $usuarios Lista de objetos do tipo User contendo os dados dos usuários cadastrados.
 *
 * @return ?User Retorna o objeto User correspondente se as credenciais forem válidas, ou null se não houver correspondência.
 */
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
        $_SESSION['login_error'] = "Usuário ou senha inválidos";
        header("Location: index.php");
        exit;
    }
}
?>