<section class="container">
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Acciones</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $value): ?>
				<tr>
					<td><?=$value['nombre']?></td>	
					<td><?=$value['apellido']?></td>
					<td>
					<a href="<?=URL?>/usuarios/update&id=<?=$value['id']?>" class="btn btn-warning btn-sm">Actualizar</a>
					 <a href="<?=URL?>/usuarios/delete&id=<?=$value['id']?>" class="btn btn-danger btn-sm">Eliminar</a>
					 </td>					

				</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</section>