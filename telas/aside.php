<?php if($URL == "index.php"){ ?>
<aside>
        <p class="h2-home">Fabricando tanques de alta qualidade há três décadas</p>
    </aside><!-- FINAL ASIDE --> 
<?php }elseif($URL == "empresa.php"){ ?>
<aside>
        <img src="img/inoxfantasia.jpg" height="576" width="215" alt="Inox Fantasia" />
    </aside><!-- FINAL ASIDE -->  
<?php }elseif($URL == "produtos.php" or $URL == "tanques-de-coleta.php"){ ?>
<aside>
    	<nav role="navigation">
    		<ul class="submenu">
	    		<li><a href="tanques-de-coleta.php" title="Tanques de Coleta" <?php if($URL == "tanques-de-coleta.php"){ echo "class='ativo'";} ?>>Tanques de Coleta</a></li>

	    		<li><a href="julieta.php" title="Julieta" <?php if($URL == "julieta.php"){ echo "class='ativo'";} ?>>Julieta</a></li>

	    		<li><a href="semi-reboque.php" title="Semi-reboque" <?php if($URL == "semi-reboque.php"){ echo "class='ativo'";} ?>>Semi-reboque</a></li>

	    		<li><a href="bitrem.php" title="Bitrem" <?php if($URL == "bitrem.php"){ echo "class='ativo'";} ?>>Bitrem</a></li>

	    		<li><a href="vanderleia.php" title="Vanderleia" <?php if($URL == "vanderleia.php"){ echo "class='ativo'";} ?>>Vanderleia</a></li>

	    		<li><a href="tanques-personalizados.php" title="Tanques Personalizados" <?php if($URL == "tanques-personalizados.php"){ echo "class='ativo'";} ?>>Tanques Personalizados</a></li>

	    		<li><a href="acessorios.php" title="Acessórios" <?php if($URL == "acessorios.php"){ echo "class='ativo'";} ?>>Acessórios</a></li>
	    	</ul>
    	</nav>

    	<p class="h2-prod">Fabricando tanques de alta qualidade há três décadas</p>
    </aside><!-- FINAL ASIDE -->


<?php } ?>