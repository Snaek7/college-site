<?php 

$nome = $_POST['nome'];
$email = $_POST['email'];
$menssagem = $_POST['mensagem'];
$titulo = "Email teste";
$dest = "emerson_franca77@icloud.com";

mail($dest, $titulo, $mensagem, $nome, $email);

if (mail) {
	echo "enviado!";
} else {
	echo "error!";
}

?>