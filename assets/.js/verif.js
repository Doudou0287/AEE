document.getElementById("envoyer").addEventListener("click", function(event) {
    var erreur;
    var inputs = document.forms["contacter"];
    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    // var regTel = /^((\+|00)33\s?|0)[67](\s?\d{2}){4}$/;
    var nameregx = /^[\S]{1,50}$/;
    var nom = inputs["nom"];
    var prenom = inputs["prenom"];
    var email = inputs["email"];
    var msg = inputs["textarea"];
    //var sujet = inputs["sujet"];
    var non = document.getElementById("non").checked;
    var oui = document.getElementById("oui").checked;

    if ((non == false) && (oui == false)) {
        erreur = "veuillez choisir une option "
            // return false ;
            // console.log(oui);
            // console.log(non);
    }
    if (nom.value.match(nameregx) == null) {
        nom.classList.add("invalid");
        // nom.previousElementSibling.classList.add("invalid")
        erreur = "nom non valide"
    }
    nom.addEventListener('input', function() {
        if (nom.value.match(nameregx) == null) {
            nom.classList.add("invalid");
            // nom.previousElementSibling.classList.add("invalid")
            erreur = "nom non valide"
        } else {
            nom.classList.remove("invalid");
        }
    })
    if (prenom.value.match(nameregx) == null) {
        prenom.classList.add("invalid");
        // prenom.previousElementSibling.classList.add("invalid")
        erreur = "prenom non valide"
    }
    prenom.addEventListener('input', function() {
        if (prenom.value.match(nameregx) == null) {
            prenom.classList.add("invalid");
            // prenom.previousElementSibling.classList.add("invalid")
            erreur = "prenom non valide"
        } else {
            prenom.classList.remove("invalid");
            erreur = "";

        }
    })
    if ((email.value.match(regex) == null)) {
        email.classList.add("invalid");
        erreur = "email invalide"
    }
    email.addEventListener('input', function() {
        if ((email.value.match(regex) == null)) {
            email.classList.add("invalid");
            // email.previousElementSibling.classList.add("invalid")
            erreur = "email invalide"
        } else {
            email.classList.remove("invalid");
            erreur = ""
        }
    })
    if (msg.value.length == 0) {
        msg.classList.add("invalid");
        // this.msg.previousElementSibling.classList.add("invalid")
        erreur = "message trop court"
    }
    msg.addEventListener('input', function() {
        if (msg.value.length == 0) {
            msg.classList.add("invalid");
            //this.msg.previousElementSibling.classList.add("invalid")
            erreur = "message trop court"
        } else {
            msg.classList.remove("invalid");
            erreur = ""
        }
    })

    if (erreur) {
        event.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    }
    // else
    // {
    // // alert("Formulaire envoyé ! ");
    // // document.location.reload(true);
    // }
});