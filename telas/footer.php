<?php if($URL != "index.php"){ ?>
</div>
<?php } ?>
<footer role="contentinfo">
    <div class="infos">
        <address>
            <div itemscope itemtype="http://schema.org/Organization">
                <span itemprop="name"><strong>INOX FANTASIA</strong> - Indústria, Comércio e Serviços LTDA.</span><br />

                <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <span itemprop="streetAddress">Rua Cel. Joaquim Marques, 1673 | Distrito Industrial</span><br />
                    <span itemprop="addressLocality">Batatais | SP</span> | CEP
                    <span itemprop="postalCode">14300-000</span>
                </div>
            </div>

            <p>&copy;2014 Inox Fantasia. Todos os direitos reservados.</p>
        </address>

        <div class="telefone">
            <ul>
                <li><span>16</span> 3761.3908</li>
                <li><span>16</span> 3761.8305</li>
            </ul>

            <a href="http://www.jm6.ppg.br/" title="JM6" rel="external" class="jm6 hidetxt">JM6</a>
        </div>
    </div>
</footer>
<script src="js/jquery-1.11.1.min.js"></script>
<?php if($URL = "empresa.php"){ ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/mapa.js"></script>
<?php } ?>


<?php if($URL = "tanques-de-coleta.php"){ ?>
<script src="js/jquery.colorbox.js"></script>
<?php } ?>



<script src="js/scripts.js"></script>
</body>
</html>