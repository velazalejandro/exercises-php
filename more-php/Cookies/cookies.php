<?php
/*esto sirve para fijarlas durante una semana*/
/*esto no imprime nada porque no le has dicho nada*/
setcookie("numero", 20);
setcookie("nombre", "Ana", time ()+60*60*24*7);
setcookie("grupo","asir"); //modificar
?>