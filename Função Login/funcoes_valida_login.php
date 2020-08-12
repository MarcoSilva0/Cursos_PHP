<?php

function valida_login($login, $senha){

    //validar direto em um banco de dados
    $login_bd = 'Marco.silva';
    $senha_bd = 'marco1022';

    if($login == $login_bd && $senha == $senha_bd){
        return true;
    }

    return false;

}


?>