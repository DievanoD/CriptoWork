<!DOCTYPE html>
<html lang="pt-BR">
    <?php include './layouts/head.php'; ?>

    <!--<title>Criptografia - Substituição</title>-->

    <?php include './layouts/header.php'; ?>

    <body onload="mudaStatusNavbar('nav-link-criptografia');">
        <!--<br>-->
        <br>
        <div class="container-flex">
            <div class="columns">
                <div class="column">
                    <div class="content has-text-centered">
                        <span id="title-conteudo">Criptografia Substituição Simples</span>
                    </div>
                </div>
            </div>
            <hr>

            <div class="columns">
                <div class="column is-4-desktop is-4-fullhd is-offset-2-desktop is-offset-2-fullhd">
                    <div class="box">
                        <form action="#" method="POST" name="form-cript-substituicao">
                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label" for="inpChave">CHAVE NUMÉRICA</label>
                                        <div class="control">
                                            <input class="input" type="text" name="inputChave" id="inpChaveCriptografia" placeholder="Ex: 1, 2...etc" required>
                                        </div>
                                        <p class="help">Insira um número inteiro *</p>
                                    </div>
                                </div>
                            </div>

                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label" for="inpCaracteres">INTERVALO CARACTERES</label>
                                        <div class="control">
                                            <input class="input" type="text" name="inputQtdCaracteres" id="inpCaracteresCriptografia" placeholder="Ex: 3,  aba cdd efs ghc...">
                                        </div>
                                        <p class="help">Insira um número inteiro positivo, não é obrigatório</p>
                                    </div>
                                </div>
                            </div>

                            <div class="columns">
                                <div class="column is-12">
                                    <div class="field">
                                        <label class="label" for="inpFrase">FRASE</label>
                                        <div class="control">
                                            <input class="input" type="text" name="inputFrase" id="inpFraseCriptografia" placeholder="Ex: Vida longa e próspera!" required>
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

                                    <button type="button" name="acao" value="substituicao" id="btn-criptografar" class="button is-link">
                                        Criptografar
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="column is-4-desktop is-4-fullhd">
                    <!--<h3>RESULTADO</h3>-->
                    <div class="painel">
                        <p id="quadroCriptografia"></p>
                    </div>
                </div>
            </div>
        </div>
        <?php include './layouts/footer.php'; ?>
    </body>
</html>
