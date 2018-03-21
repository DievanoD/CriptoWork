<!DOCTYPE html>
<html lang="pt-BR">

    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body onload="mudaStatusNavbar('nav-link-criptografia-transposicao');">
        <!--<br>-->
        <br>
        <div class="columns">
            <div class="column">
                <div class="content has-text-centered">
                    <span id="title-conteudo">Criptografia Transposição de Colunas</span>
                </div>
            </div>
        </div>
        <hr>

        <div class="columns">
            <div class="column is-4-desktop is-4-fullhd is-offset-2-desktop is-offset-2-fullhd">
                <div class="box">
                    <form action="#" method="POST">
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label" for="inputChaveAlfa">CHAVE ALFABÉTICA</label>
                                    <div class="control">
                                        <input class="input" type="text" name="inputChaveAlfa" id="inpChaveCriptografiaAlfa" placeholder="Ex: saber" required>
                                    </div>
                                    <p class="help">Insira uma palavra sem letras repetidas</p>
                                </div>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label" for="inputFraseCriptografiaTransposicao">FRASE</label>
                                    <div class="control">
                                        <input class="input" type="text" name="inputFraseCriptografiaTransposicao" id="inpFraseCriptografiaTranposicao" placeholder="Ex: Vida longa e próspera!" required>
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

                                <button type="button" id="btn-criptografar-transposicao" class="button is-success">
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
                    <p id="quadroCriptografiaTransposicao"></p>
                </div>
            </div>
        </div>

    </body>
</html>
