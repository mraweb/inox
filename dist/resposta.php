
*******************************
FORMULARIO FUNCAO MAILER SEM VARIAVEL
******************************* 


<?php
require_once('phpmailer/class.phpmailer.php');
	$phpmail = new PHPMailer();
    $phpmail->IsSMTP(); // envia por SMTP
	$phpmail->Host = "smtp.dominio.com.br"; // SMTP servers
	$phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
	$phpmail->Username = "envia@dominio.com.br"; // SMTP username
	$phpmail->Password = "qweasd"; // SMTP password
	$phpmail->Port = 587;
		
    $phpmail->IsHTML(true);
	$phpmail->From = "cliente@dominio.com.br";
    $phpmail->FromName = $_POST["nome"];
	
    $phpmail->AddAddress('contato@dominio.com.br', 'Mirabella');
    $phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);
	
	$phpmail->Subject = "Contato do site Mirabella - ".$_POST["nome"]."";
	
	$phpmail->Body .= "<strong>IP:</strong> ". $_SERVER["REMOTE_ADDR"]."<br />";
    $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
    $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["mail"]."<br />";
    $phpmail->Body .= "<strong>Telefone:</strong> ". $_REQUEST["tel"]."<br />";	
	$phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br />";

	if($_POST["valida"] == ""){
	    if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] != ''){
	    	$send = $phpmail->Send();
		}
	}
?>


*******************************
FORMULARIO FUNCAO MAILER SEM VARIAVEL COM ANEXO
******************************* 


<?php
require_once('phpmailer/class.phpmailer.php');
	$phpmail = new PHPMailer();
    $phpmail->IsSMTP(); // envia por SMTP
	$phpmail->Host = "smtp.dominio.net"; // SMTP servers
	$phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
	$phpmail->Username = "contato@dominio.net"; // SMTP username
	$phpmail->Password = "iopjkl10"; // SMTP password
	$phpmail->Port = 587;
		
	$arquivo = $_FILES["arquivo"];

    $phpmail->IsHTML(true);
    $phpmail->From = $_POST["email"];
    $phpmail->FromName = $_POST["nome"];
	
	// Recupera o nome do arquivo
	$arquivo_nome = $arquivo['name'];
	// Recupera o caminho temporario do arquivo no servidor
	$arquivo_caminho = $arquivo['tmp_name'];

    $phpmail->AddAddress('contato@dominio.com.br', 'Dominio');
    $phpmail->AddReplyTo($_POST["mail"], $_POST["nome"]);
	
	$phpmail->Subject = "Contato do site Dominio - ".$_POST["nome"]."";

    $phpmail->Body .= "Nome: ". $_POST["nome"]."<br />";
	$phpmail->Body .= "E-mail: ". $_POST["mail"]."<br />";
	$phpmail->Body .= "Telefone: ". $_REQUEST["tel"]."<br />";	
	$phpmail->Body .= "Mensagem: ".nl2br($_POST["msg"])."<br />";
	$phpmail->AddAttachment($arquivo_caminho, $arquivo_nome);
    
    if($_POST["valida"] == ""){
	    if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] != ''){
	    	$send = $phpmail->Send();
		}
	}
?>


*******************************
FORMULARIO FUNCAO MAIL
******************************* 

<? 
	$recipient = "Villa Paris <renan@ao5.com.br>";
	$subject = "Formulário de Contato do site Villa Paris";
	
	$message = "Dados enviados pelo Contato do site Villa Paris \n\n";
	$message .= "Nome: " . $_POST["nome"] . "\n";
	$message .= "E-mail: " . $_POST["emailcliente"] . "\n";
	$message .= "Telefone: (" . $_POST["ddd"] . ") " . $_POST["num"] . "\n";
	$message .= "Endereço: " . $_POST["endereco"] . ", " . $_POST["numero"] . "\n";
	$message .= "Bairro: " . $_POST["bairro"] . "\n";
	$message .= "Cidade: " . $_POST["cidade"] . "\n";
	$message .= "Estado: " . $_POST["estado"] . "\n";
	$message .= "CEP: " . $_POST["cep"] . "\n";
	$message .= "Mensagem: "  . "\n" . $_POST["msg"] . "\n";
	
	
	$headers = "From:<". $_POST["emailcliente"] .">\n";
	$headers .= "Content-Type: text/plain; charset=utf-8";
	
	mail($recipient, $subject, $message, $headers);
?>