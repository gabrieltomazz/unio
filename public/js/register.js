$( "#botaoAluno" ).click(function() {
  $("#formProf").hide();
  $("#formAlun").show();
});

$("#botaoProf" ).click(function() {
  $("#formProf").show();
  $("#formAlun").hide();
});