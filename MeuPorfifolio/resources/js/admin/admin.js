$(document).ready(function() {
    

    // Captura o clique no botão "Pages"
    $("#page-button").click(function() {
        
        
        // Atualiza a label com a parte "update" da URL
        var url = window.location.href;
        var parts = url.split('/');
        var lastPart = parts[parts.length - 1];
        if(lastPart==="view"){
            lastPart = "Visualizar"
        }
        if(lastPart==="update"){
            lastPart = "atualizar"
        }
        if(lastPart==="create"){
            lastPart = "Novo"
        }
        $("#page-label").text(lastPart);
    });
});

