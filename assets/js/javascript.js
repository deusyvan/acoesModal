function editar(id){
	$('#modal').modal('show');
	$.ajax({
		url:BASE_URL+"usuarios/editar/" + id,
		type:'POST',
		data:{id:id},
		beforeSend:function(){
			//Antes de enviarmos o html vamos fazer algo antes
			$('#modal').find('.modal-body').html('Carregando ...');
		}
		success:function(html){
			//Pegando o html para colocar dentro do modal
		}
		
	});
}

function excluir(){
	$('#modal').modal('show');
}