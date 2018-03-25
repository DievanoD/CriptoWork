<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']))
{ // aqui é onde vai decorrer a chamada se houver um *request* POST
    $method = $_POST['acao'];
    $controler = new CriptografiaController();
    if (method_exists($controler, $method))
    {
        $controler->$method($_POST);
    }
    else
    {
        echo 'Metodo incorreto';
    }
}

/**
 * Description of CriptografiaController
 *
 * @author dievano
 */

/**
 * Os métodos que realizam a criptografia/descriptografia estão no arquivo js
 * LOCALIZAÇÃO: public/js/functions-sistema.js
 */
class CriptografiaController
{

    public function __construct()
    {

    }

    public function substituicao(): void
    {
        try
        {
            $chave = $_POST["inputChave"];
            $frase = $_POST["inputFrase"];

            echo 'Chave: ' . $chave . '<br>Frase: ' . $frase;
        }
        catch (Exception $ex)
        {
            echo 'Erro: ' . $ex->getMessage();
        }
    }

}
