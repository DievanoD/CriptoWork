<!DOCTYPE html>
<html lang="pt-BR">
    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body onload="mudaStatusNavbar('nav-link-sobre');">
        <br><br>

        <div class="container-flex">
            <div class="columns">
                <div class="column is-6-desktop is-offset-3">
                    <div class="box">
                        <div class="article">
                            <div class="content">
                                <h1 class="has-text-centered">CriptoWork</h1>
                                <div class="has-text-justified">
                                    <p>
                                        CriptoWork é um sistema web criado para realizar
                                        criptografias e descriptografias básicas de palavras e
                                        frases. Esta aplicação foi feita como trabalho para a aula
                                        de segurança de redes, do curso ADS - IFTM - campus Ituiutaba.
                                    </p>
                                    <p>
                                        Toda a lógica do sistema foi feita em javascript puro e também
                                        Jquery, pois preferi usá-los para carregar dinamicamente os dados
                                        de resultado, sem a necessidade de que toda vez que for mostrar
                                        os dados na tela para o usuário, o sistema dar refresh na mesma.
                                        Ou seja, questão de estética mesmo.
                                    </p>

                                    <p>
                                        O código da aplicação está no GitHub, no qual você pode acessar
                                        diretamente clicando no botão de mesmo nome, localizado no canto superior
                                        direito.
                                    </p>

                                    <p class="has-text-centered">
                                        <strong>Desenvolvedor:</strong> Diêvano Dantas Moraes.
                                    </p>
                                    <p class="has-text-centered">
                                        <span class="icon is-medium"><i class="fas fa-envelope"></i></span>dievanodantas@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include './layouts/footer.php'; ?>
    </body>
</html>
