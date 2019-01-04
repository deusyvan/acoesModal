function editar(id){
	$.ajax({
		url:BASE_URL+"usuarios/editar/" + id,
		type:'POST',
		data:{id:id},
		beforeSend:function(){
			//Antes de enviarmos o html vamos fazer algo antes
			$('#modal').find('.modal-body').html('Carregando ...');
			$('#modal').modal('show');
		}
		success:function(html){
			//Pegando o html para colocar dentro do modal
			$('#modal').find('.modal-body').html(html);
			$('#modal').modal('show');
		}
		
	});
}

function excluir(id){
	$('#modal').modal('show');
}