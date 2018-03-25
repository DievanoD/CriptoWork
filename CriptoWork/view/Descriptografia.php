<!DOCTYPE html>
<html lang="pt-BR">

    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body onload="mudaStatusNavbar('nav-link-descriptografia');">
        <br>
        <div class="container-flex">
            <div class="columns">
                <div class="column">
                    <div class="content has-text-centered">
                        <span id="title-conteudo">Descriptografia Substituição Simples</span>
                    </div>
                </div>
            </div>
            <div class="tabs is-centered">
                <ul>
                    <li class="is-active" id="tab-desc-simples"><a onclick="mostraDescriptografiaSimples();">Simples</a></li>
                    <li id="tab-desc-avancada"><a onclick="mostraDescriptografiaAvancada();">Avançado</a></li>
                </ul>
            </div>

            <div class="columns" id="box-descriptografia-simples">
                <div class="column is-4-desktop is-4-fullhd is-offset-2-desktop is-offset-2-fullhd">
                    <div class="box">
                        <form action="#" method="POST">
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label" for="inputChave2">CHAVE NUMÉRICA</label>
                                        <div class="control">
                                            <input class="input" type="text" name="inputChave2" id="inpChaveDescriptografia" placeholder="Ex: 1, 2...etc" required>
                                        </div>
                                        <p class="help">Insira um número inteiro positivo *</p>
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
                                        <p class="help">Insira uma frase ou palavra *</p>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <p class="control">
                                    <button type="button" class="button is-danger" onclick="clearCampos();">
                                        Limpar
                                    </button>

                                    <button type="button" id="btn-descriptografar" class="button is-link">
                                        Descriptografia Simples
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="column is-4-desktop is-4-fullhd">
                    <div class="painel">
                        <p id="quadroDescriptografiaSimples"></p>
                    </div>
                </div>
            </div>

            <div class="columns" id="box-descriptografia-avancada">
                <div class="column is-4-desktop is-4-fullhd is-offset-2-desktop is-offset-2-fullhd">
                    <div class="box">
                        <form action="#" method="POST">
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label" for="inpFrase2">FRASE</label>
                                        <div class="control">
                                            <input class="input" type="text" name="inputFrase2" id="inpFraseDescriptografiaGeral" placeholder="Ex: Vida longa e próspera!" required>
                                        </div>
                                        <p class="help">Insira uma frase ou palavra *</p>
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

                <div class="column is-4-desktop is-4-fullhd">
                    <div class="painel">
                        <p id="quadroDescriptografiaAvancada"></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include './layouts/footer.php'; ?>
    </body>
</html>
