<?php
$valor = 'jamilton';
isset($valor);
//isset da false caso nn tenha nada ou quando se coloca null
//empaty = true quando -> '', 0 , '0', false, null, array() e nos demais dá falso
//is_numeric ela faz a diferenciação de numero e string então da true só se for numero
if(isset($valor)){
    echo 'Variavel iniciada';
}

?>