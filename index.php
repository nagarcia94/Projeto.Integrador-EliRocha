<?php
require "inc/cabecalho.php";
?>

<body>


    <main>

        <article class="destaque">
            <h2> <span class="orange">NUTRICIONISTA </span>ELIANE ROCHA</h2>
            <p>Descubra como se alimentar bem e com prazer!</p> 
            <br>

            <div class="botoes">

            <div class="botao2"><a href="https://elirocha.com.br/">Agendar Consulta</a></div>

            <div class="botao3"><a href="sobremim.php">Sobre mim </a></div></div>
            </div>
        </article>

        <article class=" limitador2 caixa">
            <div class="pqconsultar">
                <h2> Porque fazer uma consulta nutricional?</h2> <br>
                <p>É na consulta que o profissional consegue fazer as avaliações que irão auxiliar a confecção do plano alimentar.
                    <br> Através de uma anamnese podemos conhecer o estilo de vida, hábitos, horários, locais de alimentação, restrições e preferências alimentares do cliente. <br>
                    Aplica-se um questionário para verificar o histórico de doenças, histórico familiar, bem como o uso de medicamentos e exames laboratoriais.
                    Também é discutido com o paciente as metas, objetivos do tratamento nutricional, levando em consideração as necessidades do paciente, respeitando a idade, preferências e condições fisiológicas.
                </p>
            </div>
            <br><br>

            <div class="fotoeli">
                <figure><img src="imagens/imagem home.jpg" alt=""></figure>
            </div>


            <div class="offerservicos">
                <h2>OS SERVIÇOS QUE OFEREÇO</h2> <br>
                <figure><a href="servicos.php"><img src="imagens/dieta.png" alt=""></a>
                    <p> Avaliação Nutricional</p>
                </figure><br>

                <figure><a href="servicos.php"><img src="imagens/fita-metrica.png" alt=""></a>
                <p>Avaliação Antropométrica </p> </figure><br>

                <figure><a href="servicos.php"><img src="imagens/pinca.png" alt=""></a>
                <p>Exame Biompendância</p></figure> <br>

                <figure><a href="servicos.php"><img src="imagens/apoio-suporte.png" alt=""></a>
                <p>Grupo de apoio</p> </figure><br>

            </div>

        </article> <br><br>

        <article class="dica">

            <h2>Dicas da Nutri </h2>

            <div class="dicasnutri">
                
                <div>
                    <a href="dicasnutri.php"><img src="imagens/dicafeira.jpg" alt=""></a>
                    <p>Boas Escolhas na Feira!</p>

                </div>
                <div>
                    <a href="dicasnutri.php"><img src="imagens/dicalavar.jpg" alt=""></a>
                    <p>Higienização dos Produtos!</p>
                </div>
                <div>
                    <a href="dicasnutri.php"><img src="imagens/dicaorganizar.jpg" alt=""></a>
                    <p>Cuidados no Armazenamento!</p>
                </div>
                <div>
                    <a href="dicasnutri.php"><img src="imagens/dicaervas.jpg" alt=""></a>
                    <p>Ervas e Condimentos!</p>
                </div>
                <div>
                    <a href="dicasnutri.php"> <img src="imagens/dicaagua.jpg" alt=""></a>
                    <p>Agua Saborizada!</p>
                </div>

            </div>
        </article>
        <!-- Fim do Dicas Nutri -->



        <br><br>
        <article class="localizacao">
            <h2>Localização</h2>
            <br>
            <address class="vlmariana">
                Rua Domingos de Morais, 2781 – 14º andar – Ed. Art Work
                Vila Mariana – São Paulo/SP – CEP 04035-001
                Próximo ao metrô Santa Cruz <br> </address>
            <br>
            <address class="belavista">Rua Cincinato Braga, 340 – 6º e 10º andar – Cond. Edificio Delta Plaza
                Bela Vista – São Paulo/SP – CEP 01333-010
                Próximo ao metrô Brigadeiro</address>


            </address>

        </article>

    </main>

    <?php
    require "inc/rodape.php";
    ?>

    <script src="js/menu.js"></script>

    <!-- Importação da biblioteca JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Importação do JS do plugin Slick -->
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script>
        $('.dicasnutri').slick({
            //    autoplay: true,
            //    autoplaySpeed: 3000,
            dots: true,
            prevArrow: "<a class='voltar' href=''> &lt; </a>",
            nextArrow: "<a class='avancar' href=''> &gt; </a>"
        });
    </script>


</body>

</html>