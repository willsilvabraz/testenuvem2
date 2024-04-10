<?php
include_once("conexao.php");

$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);

echo "Nome: $firstname<br>";
echo "Nome: $lastname<br>";
echo "Email: $email<br>";
echo "Senha: $password<br>";
echo "Telefone: $number<br>";
echo "cpf: $cpf<br>";
echo "cnpj: $cnpj<br>";


$query = "insert into usuario (usu_nome, usu_sobre_nome, usu_telefone, usu_email, usu_senha, usu_telefone, usu_cpf, usu_cnpj ) values('$firstname' , '$lastname', '$email','$password','$number','$cpf','$cnpj')";
try{
    mysqli_query($conn,$query);
}catch(mysqli_sql_exception $e){
    echo "".$e->getMessage()."";
}
