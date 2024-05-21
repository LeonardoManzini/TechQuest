<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "shoptransation";
$senha = "C6TJ.J3vkw~C-}~ZMX9zPpCuVgcIG%I}Vj]MNkp30nuC)REu8kg.drJXm06hs^Zv]@SkJkpRxa,SlS(sZLW1@I}$[#j6JOdn1-G_HLqEV_+hF;6N.qHC@UEbV#}O}bTZRR=UoZM;t@7MEJFboJWn";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>