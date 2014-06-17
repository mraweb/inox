<?php if($URL == "index.php"){ ?>
<aside>
        <p class="h2-home">Fabricando tanques de alta qualidade há três décadas</p>
    </aside><!-- FINAL ASIDE --> 
<?php }elseif($URL == "empresa.php"){ ?>
<aside>
        <img src="img/inoxfantasia.jpg" height="576" width="215" alt="Inox Fantasia" />
    </aside><!-- FINAL ASIDE -->  
<?php }elseif($URL == "produtos.php" or $URL == "tanques-de-coleta.php" or $URL == "tanques-julieta.php" or $URL == "tanques-semi-reboque.php" or $URL == "tanques-bitrem.php" or $URL == "tanques-vanderleia.php" or $URL == "tanques-personalizados.php" or $URL == "acessorios.php"){ ?>
<aside>
    	<nav role="navigation">
    		<ul class="submenu">
	    		<li><a href="tanques-de-coleta.php" title="Tanques de Coleta" <?php if($URL == "tanques-de-coleta.php"){ echo "class='ativo'";} ?>>Tanques de Coleta</a></li>

	    		<li><a href="tanques-julieta.php" title="Tanques Julieta" <?php if($URL == "tanques-julieta.php"){ echo "class='ativo'";} ?>>Tanques Julieta</a></li>

	    		<li><a href="tanques-semi-reboque.php" title="Tanques Semi-reboque" <?php if($URL == "tanques-semi-reboque.php"){ echo "class='ativo'";} ?>>Tanques Semi-reboque</a></li>

	    		<li><a href="tanques-bitrem.php" title="Tanques Bitrem" <?php if($URL == "tanques-bitrem.php"){ echo "class='ativo'";} ?>>Tanques Bitrem</a></li>

	    		<li><a href="tanques-vanderleia.php" title="Tanques Vanderleia" <?php if($URL == "tanques-vanderleia.php"){ echo "class='ativo'";} ?>>Tanques Vanderleia</a></li>

	    		<li><a href="tanques-personalizados.php" title="Tanques Personalizados" <?php if($URL == "tanques-personalizados.php"){ echo "class='ativo'";} ?>>Tanques Personalizados</a></li>

	    		<li><a href="acessorios.php" title="Acessórios" <?php if($URL == "acessorios.php"){ echo "class='ativo'";} ?>>Acessórios</a></li>
	    	</ul>
    	</nav>

    	<p class="h2-prod">Fabricando tanques de alta qualidade há três décadas</p>
    </aside><!-- FINAL ASIDE -->
<?php }elseif($URL == "servicos.php"){ ?>
<aside>
        <img src="img/servico-inox-fantasia.jpg" height="275" width="215" alt="Inox Fantasia" />

        <p class="h2-prod">Fabricando tanques de alta qualidade</p>
    </aside><!-- FINAL ASIDE --> 
<?php }elseif($URL == "clientes.php"){ ?>
<aside>
        <p class="h2-prod2">Fabricando tanques de alta qualidade</p>
    </aside><!-- FINAL ASIDE --> 
<?php }elseif($URL == "contato.php"){ ?>
<aside>
        <a href="#" title="Mapa de Localização" class="bt-mapa1 hidetxt">Mapa de Localização</a>

        <div class="tel-aside">
            <p>
                <span>16</span> 3761.3908<br />
                <span>16</span> 3761.8305
            </p>
        </div>

        <div class="mail-aside">
            <p><span>E-mail:</span><br />
                <a href="mailto:inoxfantasia@netsite.com.br" title="E-mail" class="link">inoxfantasia@netsite.com.br</a></p>
        </div>

        <div class="localiza-aside">
            <span>Localização:</span><br />
            Rua Cel. Joaquim Marques, 1673<br />
            Distrito Industrial | Batatais | SP<br />
            CEP: 14.300-000
        </div>
        
        <img src="img/financie-no-bnds.jpg" height="59" width="140" alt="Financia seu Tanque no BNDS" />
    </aside><!-- FINAL ASIDE --> 
<?php } ?>