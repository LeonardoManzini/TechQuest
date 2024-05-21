<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showtradecenteritem";
$senha = "D6fJzIwi#,d~AOTnBIOpc~9twPy%c6V{f14,$5L(r@7KcP;8EAaxqJ~@&kqCD@L]IMYH.&=fH2rMbH!6yUoMHA%3{!=92LKAJx";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>