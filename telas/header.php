<?php $URL = basename($_SERVER["SCRIPT_NAME"]); ?><!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>
<?php
if($URL == "index.php"){
    echo "Inox Fantasia";
}elseif($URL == "empresa.php"){
    echo "Empresa | Inox Fantasia";
}elseif($URL == "produtos.php"){
    echo "Produtos | Inox Fantasia";
}elseif($URL == "tanques-de-coleta.php"){
    echo "Tanques de Coleta | Inox Fantasia";
}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}elseif($URL == "empresa.php"){

}
?>
</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/colorbox.css">
<!--[if ie]>
    <script type="text/javascript" src="js/html5shiv.js"></script>
<![endif]-->
<?php include "analytics.php"; ?>
</head>
<?php if($URL == "index.php"){ ?>
<body itemscope itemtype="http://schema.org/WebPage" class="bg-home">
<?php }else{ ?>
<body itemscope itemtype="http://schema.org/WebPage" class="bg-int">
<div class="internas">
<?php } ?>
<header role="banner">
    <?php if($URL == "index.php"){ ?>
    <h1><a href="/" title="Inox Fantasia" class="hidetxt">Inox Fantasia</a></h1>
    <?php }else{ ?>
    <p class="logo"><a href="/" title="Inox Fantasia"><img src="img/inox-fantasia.png" height="190" width="221" alt="Inox Fantasia" /></a></p>
    <?php } ?>
    
    <nav role="navigation">
        <ul>
            <li><a href="/" title="Home" <?php if($URL == "index.php"){ echo 'class="ativo"'; } ?>>Home</a></li>
            <li><a href="empresa.php" title="Empresa" <?php if($URL == "empresa.php"){ echo 'class="ativo"'; } ?>>Empresa</a></li>
            <li><a href="produtos.php" title="Produtos" <?php if($URL == "produtos.php" or $URL == "tanques-de-coleta.php"){ echo 'class="ativo"'; } ?>>Produtos</a></li>
            <li><a href="servicos.php" title="Serviços" <?php if($URL == "servicos.php"){ echo 'class="ativo"'; } ?>>Serviços</a></li>
            <li><a href="contato.php" title="Contato" <?php if($URL == "contato.php"){ echo 'class="ativo"'; } ?>>Contato</a></li>
        </ul>
    </nav>
</header><!-- FINAL HEADER -->