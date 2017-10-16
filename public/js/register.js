
function testaAluno() {
	//Will return true if uncollapsed
var formAlunoAberto = $('#formAluno').hasClass('in');

//Will return true if in the process of collapsing
var formAlunoAbrindo = $('formAluno').hasClass('collapsing');




	if ( (formAlunoAberto || formAlunoAbrindo) ){
		$('#FormAluno').hide();



	}
}