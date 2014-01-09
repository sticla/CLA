<script type="text/javascript">
function showModal(titulo, imagem){
	// Fun��o pra mudar titulo e imagem:
	var objTitulo = document.getElementById("modalTitulo");
	var objImagem = document.getElementById("modalImagem");
	
	objTitulo.innerText = titulo;
	var x = 'valor';
	objImagem.src = imagem;

	$('.modal .hdrtitle').html(titulo);
	$('#modalIMagem').attr('src',imagem)
	
	$('#contact').modal('toggle');
	
	// Retorno padr�o
	//return false;

}
</script>


<div class="row clearfix">

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Igua�ba</h3>
			</div>
			<div class="panel-body">

				<a href="#" onclick="showModal('Opera��o Igua�ba', '<?php echo base_url('imagem/cla/operacaoiguaiba.jpg')?>')"><img
					style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaoiguaiba.jpg')?>"
					class="figure img-rounded"></a> No dia 08 de dezembro de 2012 foi
				lan�ado o foguete de sondagem VS30/Orion.

			</div>

		</div>
	</div>

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Salina</h3>
			</div>
			<div class="panel-body">
			
			<a href="#" onclick="showModal('Opera��o Salina', '<?php echo base_url('imagem/cla/operacaosalina.jpg')?>')"><img
					style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaosalina.jpg')?>"
					class="figure img-rounded"></a> Concluida em 09 de Julho de 2012 a
				montagem completa do Ve�culo Lan�ador de Sat�lite (VLS-1) na nova
				Torre M�vel de Integra��o (TMI) do CLA.

			</div>

		</div>
	</div>
	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Maracati</h3>
			</div>
			<br>
			<a href="#" onclick="showModal('Opera��o Maracati', '<?php echo base_url('imagem/cla/operacaomaracati.jpg')?>')"><img
					style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaomaracati.jpg')?>"
					class="figure img-rounded"></a> De 16 de Novembro a 15 de Dezembro de
				2012 onde foram lan�ados os foguetes Orion V03 e VSB-30.<br><br>
			

		</div>
	</div>
</div>





<div class="row clearfix">

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Fogtrein I</h3>
			</div>
			<div class="panel-body">Foi realizado com sucesso o lan�amento do
				primeiro Foguete de Treinamento B�sico (FTB) no Centro de Lan�amento
				de Alc�ntara (CLA). A opera��o ocorreu 15h18min do dia 10 de Agosto
				de 2009.</div>
		</div>
	</div>

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Cum� II</h3>
			</div>
			<div class="panel-body">
				<img style="float: left;"
					src="<?php echo base_url('imagem/cla/principal_r4_c3_f2.gif')?>"
					class="figure img-rounded"> A opera��o cum� II foi realizana do
				per�odo de 26 de junho a 17 de julho no CLA obtento total sucesso.

			</div>

		</div>
	</div>
	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Almenara</h3>
			</div>
			<div class="panel-body">
				<img style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaolalmenara.jpg')?>"
					class="figure img-rounded"> 02 de Novembro de 1997 foi lan�ado o
				VLS-PT1, a bordo o Sat�lite SCD-2A.
			</div>

		</div>
	</div>
</div>



<div class="row clearfix">

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Livramento</h3>
			</div>
			<div class="panel-body">
				<img style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaolivramento.jpg')?>"
					class="figure img-rounded"> 21 de Mar�o de 1998. Levando
				Experimento da FOKKIR SPACE - Holandesa.
			</div>
		</div>
	</div>

	<div class="col-md-4 column">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title" align="center">Opera��o Brasil</h3>
			</div>
			<div class="panel-body">
				<img style="float: left;"
					src="<?php echo base_url('imagem/cla/dop_operacaobrasil.jpg')?>"
					class="figure img-rounded"> 02 de Novembro de 1997 foi lan�ado o
				VLS-PT1, a bordo o Sat�lite SCD-2A.

			</div>

		</div>
	</div>

	
	<div aria-hidden="true" style="display: none;" class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<!-- Aqui acrescenta um id pro titulo -->
					<h3 id="modalTitulo" class="hdrtitle">This is the header</h3>
				</div>
				<div class="modal-body">
					<!-- Aqui acrescenta um id pra imagem -->
				<img id="modalImagem" style="float: left;"  class="figure img-rounded">
				</div>
				<div class="modal-footer">
					<a class="btn btn-primary" data-dismiss="modal">Fechar</a>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	

</div>


