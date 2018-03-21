
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
