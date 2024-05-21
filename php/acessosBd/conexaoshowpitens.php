<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showpitens";
$senha = "K7Oo;Bb'B5}l,k!egr6C@d^Y;#Ee]f8!-zLdkjI.pDmf1.B2z_rx#4z~~JwDL~Q)Q%;y'L-[f%@NieOs%7t$(-KH2&tq;+gU5ur@";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>