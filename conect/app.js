
$(document).ready(function() {
    // Quando o checkbox for clicado
    $('#meucheckbox').on('change', function() {
        if ($(this).is(':checked')) {
            // Checkbox marcado
            var valorCheckbox = $(this).val()//data("x");
            console.log("Checkbox marcado! Valor: " + valorCheckbox);

            // Enviar dados para outra página PHP via AJAX
            $.ajax({
                dataType: "html",
                type: "POST",
                url: "outra_pagina.php", // Substitua pelo URL da sua página PHP
                data: {visto:valorCheckbox}, // Enviar como objeto com chave 'lido'
                success: function(response) {
                    console.log("Dados enviados com sucesso!",response);
                    // Aqui você pode tratar a resposta do servidor, se necessário
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Erro ao enviar dados: " + errorThrown);
                }
            });
        } else {
            // Checkbox desmarcado
            console.log("Checkbox não marcado!");
        }
    });
});
