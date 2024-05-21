<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "deleteuser";
$senha = "HCSPV2^;]!^Xj@'G8WUtQ_.Qd#l~t,01-sSE'2n#y5^E)RWEmMvPYp-z+QLe{a]TtbF;t-P@aFGm_{[Y@B9XY8AnOhsi#mEM+~96";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>