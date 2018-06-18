<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="jumbotron">
	<div class="container">
		<h1> versão do codeigniter: <?php echo CI_VERSION?></h1>
		<p>Contents ...</p>
		<p>
		<button class="btn" id="btn">teste</button>
		</p>
		<input type="text" value="" class="form-control demo">
		<div id="res"></div>
		<a class="banco" href="#" id="1" value="Computador">1</a>
		<a class="banco" href="#" id="2" value="Notebook">2</a>
		<a class="banco" href="#" id="3" value="Bicicleta">3</a>
		<a class="banco" href="#" id="4" value="Carro">4</a>
	</div>
</div>





<script>
jQuery(document).ready(function() {
	$(".banco").click(function(){
		$("#res").append("<span class='param'>"+$( this ).attr('value')+"</span> <button id="+$( this ).attr('id')+" class='btn del btn-xs btn-danger'>remover</button><br>");
	});

	$(".del").click(function(e){
		e.preventDefault();
		alert('o');
		$(this).remove();
	});

	$("#btn").on('click', function(e){
		e.preventDefault();
		alertify.error('atualizado com sucesso!');
	});
});
</script>