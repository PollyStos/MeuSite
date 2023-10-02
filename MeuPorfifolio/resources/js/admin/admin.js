$(document).ready(function() {
    // Oculta todas as seções de conteúdo no início, exceto a primeira
    $(".page-wrapper").hide();
    $("#dashboard-content").show();

    // Captura o clique no botão "Dashboard"
    $("#menu-dashboard").click(function() {
        // Oculta todas as seções e mostra apenas a do admin-dashboard
        $(".page-wrapper").hide();
        $("#dashboard-content").show();
    });

    // Captura o clique no botão "Pages"
    $("#menu-pages").click(function() {
        // Oculta todas as seções e mostra apenas a do admin-pages
        $(".page-wrapper").hide();
        $("#pages-content").show();
    });
});