<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "upinfoperf";
$senha = "%%n5A#1Fa,z6AMBnU-=D]kkNgA!pbF0gztO7+S5bNx{zUlVEciV%t'~${3it;[q^L]z2,cA!pM&}f@=lbBu+c^%=LWvV4&lsc3)";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>