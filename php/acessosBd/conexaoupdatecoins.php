<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "upcoins";
$senha = "CY@_tkYNg-JgpC,=S{C+91_6Io(GD;A-1TvlkMKjzr1AELN_&AeLQAL&+LubYTAoiCJqeagkmRp3+wGCf.U8U}62tEf=]tvrsR{vsI%gAa]oqM1M(_H}70zMxB^.OA3e6('j,Z8)u$.C36..Lm7m-P#4FtJi6Zf5FAtY{w3o&KRW1ZGfswke_a+HbiT5K0jwZ%MMPxaZ";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>