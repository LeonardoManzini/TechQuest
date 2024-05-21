<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "upxp";
$senha = "(O6XDh3xX=TMJKTY7hdj=9f1tXJ%pl~DFG3dh)N(r7VS..8NKdMmdP=&Qo;.,DLi1,oR6+Cr%]Z~%+;Y[2I~{3%GkXCX;fD}%Sn";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>