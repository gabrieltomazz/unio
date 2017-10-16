
function testaAluno() {
	//Will return true if uncollapsed
formAlunoAberto = $('#formAlunoAberto').hasClass('in');

//Will return true if in the process of collapsing
formAlunoAbrindo = $('#collapseDiv').hasClass('collapsing');




	if ( (formAlunoAberto || formAlunoAbrindo) ){
		$('#FormAluno').hide();



	}
}