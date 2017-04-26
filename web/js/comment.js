$(document).ready(function() {
    // Au submit du formulaire
    $('#form').submit(function () {
        // On fait l'appel Ajax
        $.ajax({
            type: "POST",
            url: "{{ path('showcomments'}}",
            //data: {commentaire: commentaire, _csrf_token: "{{ csrf_token('authenticate') }}"},
            cache: false,
            data: {event_id: event_id},
            success: function (data) {
                alert('succes');
            }
        });


        // On retourne false pour ne pas recharger la page
        return false;
    });
});
/*
$(function() {
    $('#form').submit(function () {
        var event_id = $(this).attr("id");

        $.ajax({
            type: "POST",
            url: "{{ path('comments') }}",
            cache: false,
            data: {event_id: event_id},
            success: function (data) {
                $('#comment' + event_id).html(data);
            }
        });
    });
});*/