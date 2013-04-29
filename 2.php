<?php
$u = $_POST['usuario']; 
$p = $_POST['contra'];
 
if ($u == 'lore' && $p == '12345' )
{
    echo "Usuario y password correcto";
}
 else {
    echo "Usuario y password incorrecto";
}

?>