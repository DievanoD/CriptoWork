$(document).ready(function () {
    $("#box-descriptografia-avancada").hide();
    $("#div-alerta").hide();
});
function mudaStatusNavbar(obj) {
    var classe = document.getElementById(obj).className;

    if (classe === "navbar-item")
    {
        switch (obj) {
            case "nav-link-criptografia":
            case "nav-link-descriptografia":
                document.getElementById("nav-link-substituicao").className = "navbar-link is-active";
                break;
            case "nav-link-criptografia-transposicao":
                document.getElementById("nav-link-transposicao").className = "navbar-link is-active";
                break;
        }
        document.getElementById(obj).className = "navbar-item is-active";
    }

}

function mostraDescriptografiaSimples() {
    document.getElementById("tab-desc-simples").className = "is-active";
    document.getElementById("tab-desc-avancada").className = "";
    $("#box-descriptografia-simples").show();
    $("#box-descriptografia-avancada").hide();
}

function mostraDescriptografiaAvancada() {
    document.getElementById("tab-desc-avancada").className = "is-active";
    document.getElementById("tab-desc-simples").className = "";
    $("#box-descriptografia-avancada").show();
    $("#box-descriptografia-simples").hide();
}