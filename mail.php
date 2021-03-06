<?php $name = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['mensagem'];

$formcontent="From: $name \n Message: $message";
$recipient="thaylorcs@outlook.com";
$subject = "Formulário de Contato";
$mailheader = "From $email \r \n";

$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Climatizzar <contato@climatizzar.com.br>' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 

mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Obrigado";

?>