
$(document).ready(function(){
	
	$("#FormProfessor").hide();
 	$("#formAluno").show();

 	$( "#btn-aluno" ).click(function() {
 		$("#FormProfessor").hide();
 		$("#formAluno").show();
	});


	$("#btn-professor" ).click(function() {
  		$("#FormProfessor").show();
  		$("#formAluno").hide();
  		console.log("teste")
	});


});