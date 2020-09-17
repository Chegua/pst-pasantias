<?php $rutaForm = ($edit) ? URL.'/usuarios/update' : URL.'/usuarios/create' ; ?>
<section class="container">
	<form action="<?=$rutaForm?>" method="post">
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-4">
					<?php if ($edit): ?>
						<input name="id" type="hidden" value="<?=$user->id?>">
					<?php endif ?>
					<div class="from-group">
						<label for="">Nombre: </label>
						<input value="<?=$nombreVal = ($edit) ? $user->nombre : ''?>" name="nombre" type="text" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="from-group">
						<label for="">Apellido: </label>
						<input value="<?=$nombreVal = ($edit) ? $user->apellido : ''?>" name="apellido" type="text" class="form-control">
					</div>
				</div>

				<br><br>
				<div class="col-md-4">
						<button type="submit" class="btn btn-primary btn-block">Enviar</button>
				</div>
			</div>

			<div class="col-md-4">
				<?php if (isset($respuesta)): ?>
					<p><?=$respuesta?></p>					
				<?php endif ?>

			</div>

		</div>

	</form>


</section>