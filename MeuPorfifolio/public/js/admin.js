jQuery(document).ready(function ($) {
    // Adicione um manipulador de clique para os links do menu
    $(".menu-link").click(function (e) {
        e.preventDefault(); // Impede que o link padrão seja seguido
        var targetSection = $(this).data("section"); // Obtém o ID da seção de destino
        $("#content > div").hide(); // Esconde todas as seções dentro de #content
        $("#" + targetSection).show(); // Mostra a seção de destino
    });
});