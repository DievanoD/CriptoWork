$(document).ready(function () {
//    var alfabeto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var alfabeto = "abcdefghijklmnopqrstuvwxyz";

    function converteLetras(letras, chave, acao) {
        var codigos = [];
        for (var i in letras)
        {
            if (letras[i] === " ")
            {
                codigos[i] = "/";
//                codigos.push("0");
            }
            else
            {
                if (acao === "criptografar")
                {
                    codigos[i] = alfabeto.indexOf(removeAcento(letras[i].toLowerCase())) + chave;
                }
                else if (acao === "descriptografar")
                {
                    codigos[i] = alfabeto.indexOf(removeAcento(letras[i].toLowerCase())) - chave;
                }

                if (codigos[i] >= 26)
                {
//               /** Se o index passou de 25 pega o valor e subtrai pelo tamanho do alfabeto
//               **  Ex: index = 27 e alfabeto = 26, 27 - 26 = 1; retorna a 1ª posição **/
                    while (codigos[i] >= 26) {
                        codigos[i] = codigos[i] - alfabeto.length;
                    }
                }
                else if (codigos[i] < 0)
                {
                    while (codigos[i] < 0) {
                        codigos[i] = codigos[i] + alfabeto.length;
                    }
                }
//                codigos.push(alfabeto.indexOf(removeAcento(letras[i].toUpperCase())) + chave);
            }

        }
        return codigos;
    }

    function removeAcento(letra) {
//        var acentos = {
//            "ÁÅÃÀÂÄ": "A",
//            "ÉÊÈË": "E",
//            "ÍÎÌÏ": "I",
//            "ÓÕÒÔÖ": "O",
//            "ÚÙÛÜ": "U",
//            "Ç": "C"
//        };
        var acentos = {
            "áåãàâä": "a",
            "éêèë": "e",
            "íîìï": "i",
            "óõòôö": "o",
            "úùûũü": "u",
            "ç": "c"
        };

        for (var key in acentos)
        {
            for (var a = 0; a < key.length; a++)
            {
                if (letra === key[a])
                {
                    return acentos[key];
                }
            }
        }

        return letra;
    }

//  Enquanto tiver a ocorrência dos espaços na string, será feito o replace
//  indexOf() retorna -1 se o valor procurado não ocorrer.
    function removeEspacos(frase) {
        while (frase.indexOf(" ") !== -1) {
            frase = frase.replace(" ", "");
        }

        return frase;
    }

    function verificaChaveAlfabetica(chave) {
        var i = 0, count = 0;
        var indice = "";

        while (i < chave.length) {
            indice = chave.charAt(i);
            for (var x = 0; x < chave.length; x++)
            {
//                alert("Indice: " + indice + ", chave[i]: " + chave[x]);
                if (indice === chave.charAt(x))
                {
                    count++;
                }
            }

            if (count > chave.length)
            {
//                alert("false, contador: " + count);
                return false;
            }

            i++;
        }

//        alert("true, contador: " + count);
        return true;
    }

    function ordenaArray(chave) {
        var array_original = [];
        var array_ordenado = [];

        chave = chave.toLowerCase();

        for (var i in chave)
        {
            array_original[i] = chave[i];
            array_ordenado[i] = chave[i];
        }

        array_ordenado.sort();

        var k = 0;
        var indices = [];

        while (k < array_original.length) {
//            alert(array_original.indexOf(array_ordenado[k]));
            indices[k] = array_original.indexOf(array_ordenado[k]);
            k++;
        }

        return indices;
    }

    function criptografaTransposicao(frase, chave) {
        var frase_trim = removeEspacos(frase);
        var col_matriz = chave.length;
        var lin_matriz = Math.ceil((frase_trim.length / col_matriz));

//        alert("Tamanho: " + frase_trim.length + ", linhas: " + lin_matriz + ", colunas: " + col_matriz);
        var matriz = new Array();
        var count = 0, count_alfabeto = 0;

        for (var x = 0; x < lin_matriz; x++)
        {
            matriz[x] = new Array();
            for (var y = 0; y < col_matriz; y++)
            {
                if (count >= frase_trim.length)
                {
                    matriz[x][y] = alfabeto[count_alfabeto];
                    count_alfabeto += 1;
                }
                else
                {
                    matriz[x][y] = frase_trim[count];
                }
                count += 1;
            }
        }

        var ordem = ordenaArray(chave);
        var palavra = "";

        for (var x = 0; x < col_matriz; x++)
        {
            for (var y = 0; y < lin_matriz; y++)
            {
                var z = ordem[x];
                palavra += matriz[y][z];
            }
        }

        return palavra.toUpperCase();
    }

    function criptografaFrase(codigo, qtdChar) {
        var index;
        var word_aux = "";

        for (var i in codigo)
        {
            if (codigo[i] !== "/")
            {
                index = codigo[i];
                word_aux += alfabeto[index];
            }
            else
            {
                word_aux += " ";
            }
        }

        var word_final = "";
        var i = 0;
        if (qtdChar > 0)
        {
            word_aux = removeEspacos(word_aux);
            while (i < word_aux.length) {
                word_final += word_aux.substr(i, qtdChar);
                word_final += " ";
                i += qtdChar;
            }
        }
        else
        {
            word_final = word_aux;
        }
//        alert(word_final);

        return word_final;
    }

    function descriptografaFrase(codigo) {
        var index;
        var word = "";
        for (var i in codigo)
        {
            if (codigo[i] !== "/")
            {
                index = codigo[i];
                word += alfabeto[index];
            }
            else
            {
                word += " ";
            }
        }

        return word;
    }

    function descriptografaGeral(letras) {
        var palavra_final = "";

        $("#quadroDescriptografia").html("");
        for (var i = 1; i <= 26; i++)
        {
            palavra_final = descriptografaFrase(converteLetras(letras, i, "descriptografar"));
            $("#quadroDescriptografia").append("CHAVE " + i + ": " + palavra_final + ", <br>");
        }
    }

    $("#btn-criptografar").click(function () {
        var chave_cript = parseInt($("#inpChaveCriptografia").val());
        var range_caracteres = parseInt($("#inpCaracteresCriptografia").val());
        var frase_descript = $("#inpFraseCriptografia").val();

        var word = converteLetras(frase_descript, chave_cript, "criptografar");

        var resultado = criptografaFrase(word, range_caracteres);
//        alert(teste);
        $("#quadroCriptografia").html(resultado);
    });

    $("#btn-descriptografar").click(function () {
        var chave_descript = $("#inpChaveDescriptografia").val();
        var frase_cript = $("#inpFraseDescriptografia").val();

        var palavra = converteLetras(frase_cript, chave_descript, "descriptografar");

        var rs = descriptografaFrase(palavra);

        $("#quadroDescriptografia").html(rs);
    });

    $("#btn-descriptografar-geral").click(function () {
        var frase_cript = $("#inpFraseDescriptografiaGeral").val();

        if (frase_cript.trim() !== "")
        {
            descriptografaGeral(frase_cript);
        }

    });

    $("#btn-criptografar-transposicao").click(function () {
        var chave_alfabetica = $("#inpChaveCriptografiaAlfa").val();
        var frase_criptografia_transposicao = $("#inpFraseCriptografiaTranposicao").val();

        if (verificaChaveAlfabetica(chave_alfabetica) === true)
        {
            $("#quadroCriptografiaTransposicao").html(criptografaTransposicao(frase_criptografia_transposicao, chave_alfabetica));
        }
        else
        {
            $("#quadroCriptografiaTransposicao").html("Chave com caracteres repetidos!");
        }

    });

});

function clearCampos() {
    $("input").val("");
    $("#quadroCriptografia").html("");
    $("#quadroDescriptografia").html("");
    $("#quadroCriptografiaTransposicao").html("");
}