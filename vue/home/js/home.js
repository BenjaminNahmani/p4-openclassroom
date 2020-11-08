$(function(){
    $("#signal").click(function () {
        var id=$(this).attr("data")
        var response=confirm("Êtes-vous sur de vouloir signaler ce commentaire ?")
        if(response)
        {
            $.get("signal?id="+id,function(res){
                console.log(res)
            })
        }
    })
})

