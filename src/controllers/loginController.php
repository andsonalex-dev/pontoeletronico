<?php   
    
loadModel('Login');

if(count($_POST)>0){
    $login = new Login($_POST);
    try{
        $login->checkLogin();
        echo "Usuário logado {$user->name}";
    }catch(Exception $e){
        echo "Falha no login";
    }
}


loadView('login');