function showModal(titulo, imagem){
	// Função pra mudar titulo e imagem:
	var objTitulo = document.getElementById("modalTitulo");
	var objImagem = document.getElementById("modalImagem");
	
	objTitulo.innerText = titulo;
	objImagem.src = imagem;
	
	$('#contact').modal('toggle');
	
	// Retorno padrão
	return false;

}