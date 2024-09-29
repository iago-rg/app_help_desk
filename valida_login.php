<?php
    session_start();

    $usuarios_app = [
        ['id' => '1', 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1],
        ['id' => '2','email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 1],
        ['id' => '3','email' => 'joao@teste.com.br', 'senha' => '123456', 'perfil_id' => 2],
        ['id' => '4','email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2],
    ];

    $usuario_autentica = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autentica = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autentica == true){
        header('Location: home.php');
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
    }
    else{
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NÃO';
    }
        
    

?>