<?php
require_once('phpmailer/PHPMailerAutoload.php');
    $phpmail = new PHPMailer();
    $phpmail->IsSMTP();
    $phpmail->Host = "mail.inoxfantasia.com.br"; 
    $phpmail->SMTPAuth = true; 
    $phpmail->Username = "envia@inoxfantasia.com.br"; 
    $phpmail->Password = "qawsedrf10*"; 
    $phpmail->Port = 587;
        
    $phpmail->IsHTML(true);
    $phpmail->From = "contato@inoxfantasia.com.br";
    $phpmail->FromName = $_POST["nome"];
    
    $phpmail->AddAddress('contato@inoxfantasia.com.br', 'Inox Fantasia');
    $phpmail->AddReplyTo($_POST["email"], $_POST["nome"]);
    
    $phpmail->Subject = "Contato do site Inox Fantasia";
    
    $phpmail->Body .= "<strong>IP:</strong> ". $_SERVER["REMOTE_ADDR"]."<br />";
    $phpmail->Body .= "<strong>Empresa:</strong> ". $_POST["empresa"]."<br />";
    $phpmail->Body .= "<strong>Nome:</strong> ". $_POST["nome"]."<br />";
    $phpmail->Body .= "<strong>E-mail:</strong> ". $_POST["email"]."<br />";
    $phpmail->Body .= "<strong>Telefone:</strong> ". $_REQUEST["tel"]."<br />";
    $phpmail->Body .= "<strong>Celular:</strong> ". $_POST["cel"]."<br />";
    $phpmail->Body .= "<strong>Endereço:</strong> ". $_POST["end"].", ". $_POST["num"]."<br />";
    $phpmail->Body .= "<strong>Bairro:</strong> ". $_POST["bairro"]."<br />";
    $phpmail->Body .= "<strong>Cidade:</strong> ". $_POST["cidade"]."<br />";
    $phpmail->Body .= "<strong>Estado:</strong> ". $_POST["estado"]."<br />";
    $phpmail->Body .= "<strong>CEP:</strong> ". $_POST["cep"]."<br />";
    $phpmail->Body .= "<strong>Mensagem:</strong> ".nl2br($_POST["msg"])."<br />";

    if($_POST["valida"] == ""){
        if(!strpos($_SERVER['HTTP_USER_AGENT'],"Googlebot") && isset($_POST['nome']) && $_POST['nome'] != ''){
            $send = $phpmail->Send();
        }
    }
?><?php include "header.php"; ?>

<div id="content" role="main">
    <?php include "aside.php"; ?>

    <section class="cont-right pdg-home">
        <p class="txt-chamada">Fabricando tanques de alta qualidade há três décadas.</p>

        <h1 class="txt-red">Contato</h1>

        <p>Preencha o formulário abaixo para solicitar um orçamento ou tirar qualquer dúvida sobre nossos tanques rodoviários. Se preferir, entre em contato pelo e-mail <a href="mailto:inoxfantasia@netsite.com.br" title="E-mail" class="link">inoxfantasia@netsite.com.br</a></p>

        <p><strong>Obrigado <?php echo $_POST["nome"]; ?>, sua mensagem foi enviada com sucesso.</strong></p>
    </section><!-- FINAL CONT-RIGHT -->  
</div><!-- FINAL CONTENT -->  

<div id="mapaTeste">
    <div class="mapaContent">
        <div id="mapa" class="window"></div>
        <a class="close hidetxt">Fechar</a>
    </div>
<div id="mask"></div>
</div>

<?php include "footer.php"; ?>