<?php

require_once("config.php");

// Carregar um Usuário
/*$root = new Usuario();
$root->loadById(1);
echo $root;*/

//carregar uma lista de usuários
/*$listas= Usuario::getList();
echo json_encode($listas);*/

//Carrega uma lista de usuário buscando pelo login.
/*$search = Usuario::search("ro");
echo json_encode($search);
*/

//Carregar um usuário usando o login e a senha.
$usuario = new Usuario();
$usuario->login("fsd","fff");

echo $usuario;

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/
?>
