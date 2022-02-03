<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$user = $_GET['user'];
$password = $_GET['password'];
$result;


if(($user == "syscoin") and ($password == "meEscolhe")) {
	$result['mensagem'] = 'Meu nome completo eh Giulia. Eu quero essa vaga!';
}
else {
	$result['mensagem'] = 'Credenciais erradas.';
}
http_response_code(200);
echo json_encode($result);
?>