<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showinfoaluno";
$senha = "dnJoMa,]o@I}6$~[3q5]~.ikc4#)zclZ0g=+#jrc4c+9MfB@dtV9nGFIT}Kqt(4t2dKf0=IyB%8Q-IKGqWK,siuHIG6hSH8~h5x3";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>