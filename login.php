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

if($_POST){

    $usuario1 = new User(user: "admin1", senha: "1234");
    $usuario2 = new User(user: "admin2", senha: "5678");
    $usuario3 = new User(user: "admin3", senha: "91011");
    $usuario4 = new User(user: "admin4", senha: "12131");
    $usuario5 = new User(user: "admin5", senha: "15161");
}
?>