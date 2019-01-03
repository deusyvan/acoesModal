<h1>Usuários</h1>
<table border="1" width="500">
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo $usuario['nome']; ?></td>
		<td><?php echo $usuario['email']; ?></td>
		<td><?php echo $usuario['senha']; ?></td>
		<td>
			<a href="javascript:;" onclick="editar('<?php echo $usuario['id']; ?>')">Editar</a>
			<a href="javascript:;" onclick="excluir('<?php echo $usuario['id']; ?>')">Excluir</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<div id="modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">...</div>
		</div>
	</div>
</div>