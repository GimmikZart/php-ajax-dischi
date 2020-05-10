

$(document).ready(function(){

  $.ajax({
    url: "database.php",
    method: "GET",
    success: function(data){

      var template = Handlebars.compile($("#entry-template").html());

      for (var i = 0; i < data.length; i++){
        var album = data[i];

        var context = {
            poster: album.poster,
            title: album.title,
            artista: album.author,
            anno: album.year
        };

        var generato = template(context);

        $(".section").append(generato);
      }
    },

    error: function(error){
      alert("ERRORE: " + error);
    }
  });
});
