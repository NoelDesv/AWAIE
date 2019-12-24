<?php
function connectMaBase(){
    $base = mysql_connect ('localhost','root','lololi.9');  
    mysql_select_db ('prune', $base) ;
}
?>