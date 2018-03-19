<!DOCTYPE html>
<html lang="pt-BR">

    <?php include './layouts/head.php'; ?>

    <?php include './layouts/header.php'; ?>
    <body>
        <br>
        <br>
        <div class="columns">
            <div class="column is-4 is-offset-2">
                <div class="box">
                    <form action="../controller/CriptografiaController.php" method="POST" name="form-cript-substituicao">
                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label" for="inpChave">CHAVE NUMÉRICA</label>
                                    <div class="control">
                                        <input class="input" type="text" name="inputChave" id="inpChaveCriptografia" placeholder="Ex: 1, 2...etc" required>
                                    </div>
                                    <p class="help">Insira um número inteiro</p>
                                </div>
                            </div>
                        </div>

                        <div class="columns">
                            <div class="column is-12">
                                <div class="field">
                                    <label class="label" for="inpCaracteres">QTD CARACTERES</label>
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
                                    <p class="help">Insira uma frase ou palavra</p>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <p class="control">
                                <button type="button" class="button is-danger" onclick="clearCampos();">
                                    Limpar
                                </button>

                                <button type="button" name="acao" value="substituicao" id="btn-criptografar" class="button is-success">
                                    Criptografar
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <div class="column is-4">
                <!--<h3>RESULTADO</h3>-->
                <div class="painel">
                    <p id="quadroCriptografia"></p>
                </div>
            </div>
        </div>
    </body>
</html>
