$(function (){

    $(".content-billet").click(function () {

        var content=$(this).attr("data");

        $("#modal-content").html(content)
    })


})