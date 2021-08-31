//Crie uma classe de login com variáveis privadas e métodos publicos para acessar e modificar tais variáveis. <br>
<?php
class Login{
    private $email;
    private $password;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $this->email = $e;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($p){
        $this->password = $p;
    }

    public function logar(){
        if($this->email == "test@gmail.com" && $this->password == "123456"):
            echo "Logado com sucesso";
        else:
            echo "O email ou a senha está errado";
        endif;
    }
}
$login = new Login();
$login->setEmail("test@gmail.com");
$login->setPassword("1234567");
$login->logar();

echo "<br>".$login->getEmail();
echo "<br>".$login->getPassword();