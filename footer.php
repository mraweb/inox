<?php if($URL != "index.php"){ ?> </div> <?php } ?> <footer role="contentinfo"> <div class="infos"> <address> <div itemscope itemtype="http://schema.org/Organization"> <span itemprop="name"><strong>INOX FANTASIA</strong> - Indústria, Comércio e Serviços LTDA.</span><br/> <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">Rua Cel. Joaquim Marques, 1673 | Distrito Industrial</span><br/> <span itemprop="addressLocality">Batatais | SP</span> | CEP <span itemprop="postalCode">14300-000</span> </div> </div> <p>&copy;2014 Inox Fantasia. Todos os direitos reservados.</p> </address> <div class="telefone"> <ul> <li><span>16</span> 3761.3908</li> </ul> <a href="http://www.jm6.ppg.br/" title="JM6" rel="external" class="jm6 hidetxt">JM6</a> </div> </div> </footer> <script src="js/jquery-1.11.1.min.js"></script> <?php if($URL == "index.php"){ ?> <script src="js/slides.min.jquery.js"></script> <script>
// slide banner Home
    $(function(){
        // Set starting slide to 1
        var startSlide = 1;

        // Initialize Slides
        $('#slide-home').slides({
            preload: true,
            preloadImage: 'img/loading.gif',
            generatePagination: true,
            play: 5000,
            pause: 2500,
            hoverPause: true,
            start: startSlide,
            effect: 'slide'
        });
    });
</script> <?php } ?> <?php if($URL == "empresa.php" or $URL == "contato.php"){ ?> <script src="http://maps.google.com/maps/api/js?sensor=false"></script> <script src="js/mapa.js"></script> <script src="js/jquery.validationEngine.js"></script> <script src="js/jquery.validationEngine-pt.js"></script> <script src="js/jquery.mask.js"></script> <script src="js/validacao.js"></script> <?php } ?> <?php if($URL == "tanques-de-coleta.php" or $URL == "tanques-julieta.php" or $URL == "tanques-semi-reboque.php" or $URL == "tanques-bitrem.php" or $URL == "tanques-vanderleia.php" or $URL == "tanques-personalizados.php" or $URL == "acessorios.php"){ ?> <script src="js/jquery.colorbox.js"></script> <?php } ?> <script src="js/scripts.js"></script> </body> </html>