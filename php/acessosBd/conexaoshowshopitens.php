<?php

//Parametros de conexão
$servidor = "localhost";
$usuario = "showshopintens";
$senha = "&ni(b.IGCd!GcNhu&&Da@R4kTnbksKjy=V&QJgriE9N]uAmJy6u1i1md.8nDQb2qo0MhFSAf@TCKFjuP9Bor+u08i83GD-~;@R1";
$bd = "TechQuest";

//Conexao com o BD
$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conexao));
}

?>