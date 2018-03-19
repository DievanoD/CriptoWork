<!DOCTYPE html>
<html lang="pt-BR">
    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body>
        <br><br>
        <div class="container">
            <div class="columns">

                <div class="column">
                    <div class="box">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="is-256x256">
                                        <img src="../public/image/cadeado2.png" alt="">
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3>Criptografia Substituição</h3>

                                        <p class="has-text-justified">
                                            Criptografar usando a cifra de substituição simples,
                                            a qual cada caractere da mensagem corresponde a um só
                                            caractere do alfabeto de substituição.
                                        </p>

                                        <a href="Criptografia.php" class="button is-success">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="box">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="is-256x256">
                                        <img src="../public/image/cadeado1.png" alt="">
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3>Descriptografia Substituição</h3>

                                        <p class="has-text-justified">
                                            Descriptografar com cifra de substituição simples,
                                            na qual o processo é o inverso da criptografia. Insere
                                            uma chave numérica e a mensagem desejada.
                                        </p>

                                        <a href="Descriptografia.php" class="button is-danger">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="column">
                    <div class="box">
                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="is-256x256">
                                        <img src="../public/image/cadeado3.png" alt="">
                                    </div>
                                </center>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column">
                                <center>
                                    <div class="content">
                                        <h3>Criptografia Transposição</h3>

                                        <p class="has-text-justified">
                                            Cifra de transposição de colunas,
                                            na qual consiste em re-organizar os caracteres da mensagem
                                            a ser criptografada. É organizado as colunas de acordo com
                                            a chave fornecida.
                                        </p>

                                        <a href="CriptografiaTransposicao.php" class="button is-link">Acessar</a>
                                    </div>
                                </center>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
