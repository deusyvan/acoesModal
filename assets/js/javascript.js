function editar(id){
	$('#modal').modal('show');
	$.ajax({
		url:BASE_URL+"usuarios/editar/" + id,
		type:'POST',
		data:{id:id},
		success:function(html){
			
		}
		
	});
}

function excluir(){
	$('#modal').modal('show');
}