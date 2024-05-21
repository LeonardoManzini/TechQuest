<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showtasks";
$senha = "=qMEgn2z_[WL4Tgv%X;n'xO.ZZM;MIYarD+dX9}(NpAX#o=[Jxx5u$5NpY%=mrp+b4rteHEnGo+n8A-n;=q99QC-'Iu^99WNNQ~s";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>