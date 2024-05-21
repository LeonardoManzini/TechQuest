<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "trade";
$senha = "j$~-jkFqERg%a#ipqi'A-aeEXaf',s4YRpQ-yC6u@+jW3^DLgqV3yx(qzCz6aiaXo(cjA'aiwMadsSY3xku^)Om27SSK{_,NgXOtM.2v$%9v[_V{7L_N[#_hhr,8;WBr9rpf-&]9HftZEGaG@-37Ie";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>