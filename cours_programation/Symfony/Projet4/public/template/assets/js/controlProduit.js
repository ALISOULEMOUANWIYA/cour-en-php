$(document).ready(function () {
    const soumettre = document.querySelector(".ajouterProduit");
    const listeFacture = document.querySelector(".table .tableauListe");
    $(".my-custom-scrollbar").css("height", "2 px");

    setTimeout(listeFactureFait, 1000);
    var urlEdite = "";


    $(document).on('click', '.delete', function (e) {
        e.preventDefault();

        var url = $(this).attr('href');
        $.post(url,  // url
            function (data, textStatus, jqXHR) {  // success callback
                listeFactureFait();
                // alert(' data:' + data);
            });
    });

    $(document).on('click', '.updatePrododuit', function (e) {
        e.preventDefault();

        console.log(urlEdite);
        var valeur = $('.lbP').serializeArray();
        $.ajax({
            // url: $form.attr('action'),
            url: urlEdite,
            type: 'post',
            dataType: 'json',
            data: valeur,
            // processData: false,
            success: function (data) {
                listeFactureFait();
                viderChamp();
            }
        });
    });

    $(document).on('click', '.edite', function (e) {
        e.preventDefault();

        var nom = this.className;
        var txt = String(nom);
        var text = txt.substring(txt.lastIndexOf(" ") + 1, txt.length);

        var labelle = document.querySelector(".name." + text).innerHTML;
        var quantite = document.querySelector(".count." + text).innerHTML;

        console.log($(".listeNbr").length / 2);
        for (let x of $(".listeNbr")) {
            console.log(x);
        }

        $(".form-control.form-group.lblP").val(labelle.trim());
        $(".form-control.form-group.qtP").val(quantite.trim())

        urlEdite = $(this).attr('href');
        soumettre.classList.remove("ajouterProduit");
        soumettre.classList.add("updatePrododuit");

    });

    $(document).on("click", ".ajouterProduit", function (e) {
        e.preventDefault();

        var valeur = $('.lbP').serializeArray();
        $.ajax({
            // url: $form.attr('action'),
            url: '/Produit/add',
            type: 'post',
            dataType: 'json',
            data: valeur,
            // processData: false,
            success: function () {
                listeFactureFait();
                viderChamp();
            }
        });

    });

    function listeFactureFait() {

        $.get('/Produit/listes',  // url
            function (data, textStatus, jqXHR) {  // success callback
                listeFacture.innerHTML = data; 
                // alert(' data:' + data);
            });
        setTimeout(taille, 2000);
    }

    function viderChamp() {
        $(".form-control.form-group.lblP").val('');
        $(".form-control.form-group.qtP").val('');
        document.querySelector(".form-control.form-group.lblP").focus();
    }

    function taille() {
        $(".my-custom-scrollbar").css("height", "" + (parseInt(($(".listeNbr").length) / 2) * 100) + "");
        console.log(parseInt(($(".listeNbr").length) / 2) * 100);
    }
});

