<!DOCTYPE html>
<html lang="pt-BR">
    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>

    <body onload="mudaStatusNavbar('nav-link-home');">
        <br><br>
        <div class="container-flex">
            <div class="columns" id="container-home">

                <div class="column is-4-desktop is-4-fullhd">
                    <div class="box" id="box-home">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="img-box-home">
                                        <a href="Criptografia.php">
                                            <img src="../public/image/cadeado1.png" alt="">
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3 id="title-descricao-home">Criptografia Substituição</h3>

                                        <p class="has-text-justified" id="txt-descricao-home">
                                            Criptografar usando a cifra de substituição simples,
                                            a qual cada caractere da mensagem corresponde a um só
                                            caractere do alfabeto de substituição.
                                        </p>

                                        <a href="Criptografia.php" class="button is-success is-medium">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-4-desktop is-4-fullhd">
                    <div class="box" id="box-home">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="img-box-home">
                                        <a href="Descriptografia.php">
                                            <img src="../public/image/cadeado2.png" alt="">
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3 id="title-descricao-home">Descriptografia Substituição</h3>

                                        <p class="has-text-justified" id="txt-descricao-home">
                                            Descriptografar com cifra de substituição simples,
                                            na qual o processo é o inverso da criptografia. Insira
                                            uma chave numérica e a mensagem desejada.
                                        </p>

                                        <a href="Descriptografia.php" class="button is-danger is-medium">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column is-4-desktop is-4-fullhd">
                    <div class="box" id="box-home">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="img-box-home">
                                        <a href="CriptografiaTransposicao.php">
                                            <img src="../public/image/cadeado3.png" alt="">
                                        </a>
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3 id="title-descricao-home">Criptografia Transposição</h3>

                                        <p class="has-text-justified" id="txt-descricao-home">
                                            Cifra de transposição de colunas, na qual consiste
                                            em re-organizar  as colunas de acordo com a chave
                                            fornecida. Insira uma chave sem letras repetidas.
                                        </p>

                                        <a href="CriptografiaTransposicao.php" class="button is-link is-medium">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <?php include './layouts/footer.php'; ?>
    </body>
</html>
