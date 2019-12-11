function printData(database) {
  
  var target = $(".container");
  var template = $("#template").html();
  var compiled = Handlebars.compile(template);

  for (var i=0;i<database.length;i++) {
    var album = database[i];

    var compiledAlbum = compiled(album);
    target.append(compiledAlbum);
  }
}
function getData() {
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(prendiIdati) {
        printData(prendiIdati);
    },
    error: function(error) {
      console.log("error", error);
    }
  });
}
function init() {
  getData();
}
$(document).ready(init);
