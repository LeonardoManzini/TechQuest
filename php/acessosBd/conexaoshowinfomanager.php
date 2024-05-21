<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showinfomanager";
$senha = "%9&Rw.AbY7YKe'%mA@73+a7Hn!H(_%sIxaFnRBT,uHBXCBn3b%}YBlk+s{-e5OJS}6K=KkPBXTQeVUn#VEKm7%ds@{EgP8YO'Z";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>