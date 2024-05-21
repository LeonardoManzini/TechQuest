<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showinfoprof";
$senha = "urfl]Ud!TV^vvrx;w&4X;DBNV2Eqes~Por,Sq!qK;RY}U-WRi54ZIL8@qBS939+CRgLkAfzTcNMh,.EsjXRxex!RO;%0~8g4u&";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>