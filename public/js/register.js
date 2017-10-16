// function testaAluno() {
// 	//Will return true if uncollapsed
// var formAlunoAberto = $('#formAluno').hasClass('in');

// //Will return true if in the process of collapsing
// var formAlunoAbrindo = $('formAluno').hasClass('collapsing');




// 	if ( (formAlunoAberto || formAlunoAbrindo) ){
// 		$('#FormAluno').hide();



// 	}
// }


$('#btn-professor, #btn-aluno').click(function () {
   if (this.id == 'btn-professor' ) {
   	// $('#formAluno').css('display', 'none');
   	$('#FormProfessor').show();
   	$('#formAluno').hide();

   }
   if (this.id == 'btn-aluno') {
   	$('#formAluno').show();
   	$('#FormProfessor').hide();
   }
   // alert("eaeaerara");
});

$('#btn-professor, #btn-aluno').click(function () {
	if (this.id == 'btn-professor' && 	$('#FormProfessor').hasClass('in')) {
		$('#FormProfessor').hide();
	}
	if (this.id == 'btn-aluno' && 	$('#formAluno').hasClass('in')) {
		$('#formAluno').hide();
	}
});


// initialize with defaults
$("#input-id").fileinput();
 
// with plugin options
$("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});

