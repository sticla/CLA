function showModal(titulo, imagem){
	// Fun��o pra mudar titulo e imagem:
	var objTitulo = document.getElementById("modalTitulo");
	var objImagem = document.getElementById("modalImagem");
	
	objTitulo.innerText = titulo;
	objImagem.src = imagem;
	
	$('#contact').modal('toggle');
	
	// Retorno padr�o
	return false;

}