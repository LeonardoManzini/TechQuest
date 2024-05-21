<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "givetask";
$senha = "(8iE0ad9xn7tvWnvkKA+U;5reYwfeUx(N9M];5[7(%i-i#QFSLkc_5G+%Cshn4qizbIPV1cqJ)40sAQZ~VP!LBQ5E+P83]F{#";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>