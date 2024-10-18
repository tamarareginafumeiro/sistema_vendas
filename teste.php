<?php

require_once "./backend/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();

//print_r($usuarioDAO->getById(1);)
echo $usuarioDAO->getById(1);


?>