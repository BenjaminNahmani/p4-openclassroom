$(function(){
  $("#delete").click(function () {
      var id=$(this).attr("data")
      var response=confirm("Êtes-vous sur de vouloir supprimer ce commentaire ?")
      if(response)
      {
          $.get("billet?id="+id,function(res){
              console.log(res)
          })
      }
  })
})
