<?php
/**
 * Created by PhpStorm.
 * User: p001495
 * Date: 16/01/2019
 * Time: 16:18
 */

include ("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao,$_POST["email"],$_POST["senha"]);

if($usuario == null){
    header("Location: index.php?login=0");
}else{
    header("Location: index.php?login=1");
    setcookie("usuario_logado",$usuario['email'],time()+60);

}
die();