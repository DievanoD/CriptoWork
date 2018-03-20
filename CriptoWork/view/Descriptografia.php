<!DOCTYPE html>
<html lang="pt-BR">

    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body>
        <!--<br>-->
        <br>
        <div class="columns">
            <div class="column">
                <div class="content has-text-centered">
                    <span id="title-conteudo">Descriptografia Substituição Simples</span>
                </div>
            </div>
        </div>
        <hr>

        <div class="columns">
            <div class="column is-5">
                <div class="columns">
                    <div class="column is-10 is-offset-2">
                        <div class="box">
                            <form action="#" method="POST">
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label" for="inputChave2">CHAVE NUMÉRICA</label>
                                            <div class="control">
                                                <input class="input" type="text" name="inputChave2" id="inpChaveDescriptografia" placeholder="Ex: 1, 2...etc" required>
                                            </div>
                                            <p class="help">Insira um número inteiro</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label" for="inpFrase2">FRASE</label>
                                            <div class="control">
                                                <input class="input" type="text" name="inputFrase2" id="inpFraseDescriptografia" placeholder="Ex: Vida longa e próspera!" required>
                                            </div>
                                            <p class="help">Insira uma frase ou palavra</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <p class="control">
                                        <button type="button" class="button is-danger" onclick="clearCampos();">
                                            Limpar
                                        </button>

                                        <button type="button" id="btn-descriptografar" class="button is-success">
                                            Descriptografia Simples
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
                <div class="columns">
                    <div class="column is-10 is-offset-2">
                        <div class="box">
                            <form action="#" method="POST">

                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label" for="inpFrase2">FRASE</label>
                                            <div class="control">
                                                <input class="input" type="text" name="inputFrase2" id="inpFraseDescriptografiaGeral" placeholder="Ex: Vida longa e próspera!" required>
                                            </div>
                                            <p class="help">Insira uma frase ou palavra</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="field">
                                    <p class="control">
                                        <button type="button" class="button is-danger" onclick="clearCampos();">
                                            Limpar
                                        </button>

                                        <button type="button" id="btn-descriptografar-geral" class="button is-dark">
                                            Descriptografia Avançada
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="column is-6">
                <div class="columns" id="div-painel">
                    <div class="column is-10 is-offset-2" >
                        <h3>RESULTADO</h3>
                        <div class="painel">
                            <p id="quadroDescriptografia"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
