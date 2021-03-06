<?php include "header.php"; ?>

<div id="content" role="main">
    <?php include "aside.php"; ?>

    <section class="cont-right pdg-home">
        <p class="txt-chamada">Fabricando tanques de alta qualidade há três décadas.</p>

        <h1 class="txt-red">Contato</h1>

        <p>Preencha o formulário abaixo para solicitar um orçamento ou tirar qualquer dúvida sobre nossos tanques rodoviários. Se preferir, entre em contato pelo e-mail <a href="mailto:contato@inoxfantasia.com.br" title="E-mail" class="link">contato@inoxfantasia.com.br</a></p>

        <form action="resposta-contato.php" method="post" id="formID">
            <input type="hidden" name="valida" id="valida" />

            <ul class="formulario">
                <li>
                    <label for="empresa">Empresa:</label>
                    <input type="text" name="empresa" id="empresa" />
                </li>

                <li>
                    <label for="nome">*Nome:</label>
                    <input type="text" name="nome" id="nome" class="validate[required]" />
                </li>

                <li>
                    <label for="email">*E-mail:</label>
                    <input type="text" name="email" id="email" class="validate[required,custom[email]]" />
                </li>

                <li>
                    <label for="tel">Telefone:</label>
                    <input type="text" name="tel" id="tel" />
                </li>

                <li>
                    <label for="cel">Celular:</label>
                    <input type="text" name="cel" id="cel" />
                </li>

                <li>
                    <label for="end">Endereço:</label>
                    <input type="text" name="end" id="end" />

                    <label for="num">Nº:</label>
                    <input type="text" name="num" id="num" />
                </li>

                <li>
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" />
                </li>

                <li>
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" />

                    <label for="estado">Estado:</label>
                    <select name="estado" id="estado">
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="ap">AP</option>
                        <option value="am">AM</option>
                        <option value="ba">BA</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="ms">MS</option>
                        <option value="mt">MT</option>
                        <option value="mg">MG</option>
                        <option value="pa">PA</option>
                        <option value="pb">PB</option>
                        <option value="pr">PR</option>
                        <option value="pe">PE</option>
                        <option value="pi">PI</option>
                        <option value="rj">RJ</option>
                        <option value="rn">RN</option>
                        <option value="rs">RS</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR</option>
                        <option value="sc">SC</option>
                        <option value="sp">SP</option>
                        <option value="se">SE</option>
                        <option value="to">TO</option>
                    </select>
                </li>

                <li>
                    <label for="cep">CEP:</label>
                    <input type="text" name="cep" id="cep" />
                </li>

                <li>
                    <label for="msg">*Mensagem:</label>
                    <textarea name="msg" id="msg" cols="30" rows="10" class="validate[required]"></textarea>
                </li>

                <li>
                    <span>*Campos obrigatórios</span>
                    <button type="submit">ENVIAR</button>
                </li>
            </ul>
        </form>    
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