<?php

//Criar um conexão para a base de dados
$host='127.0.0.1';
$bd='cadastro';
$userdb='root';
$senhadb='senac';


//receber do form
$nome=$_POST["nome"];
$email=$_POST["email"];
$sexo=$_POST["sexo"];
$ddd=$_POST["ddd"];
$telefone=$_POST["telefone"];
$endereco=$_POST["endereco"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$pais=$_POST["pais"];
$login=$_POST["login"];
$senha=$_POST["senha"];
$news=$_POST["news"];

// Conectando com o bd

$conexao=mysql_connect($host,$bd,$userdb,$senhaid);
if(!$conexao)
    die("Erro de conexão -> ".mysql_error())
$banco=mysql_select_db($bd,$conexao);
if(!$banco)
    die("Erro de conexão ->".mysql_error())



?>