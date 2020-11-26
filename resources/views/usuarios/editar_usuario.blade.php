@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Edita el <span> producto</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="{{ route('salvaru', ['id' => $usu->id_usuario]) }}" method="POST" name="editar" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                    <label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ $usu->nombre }}" class="form-control">
                    <label>APELLIDO PATERNO</label>
					<input type="text" name="app" value="{{ $usu->app }}" class="form-control">
                    <label>APELLIDO MATERNO</label>
					<input type="text" name="apm" value="{{ $usu->apm }}" class="form-control">
                    <label>FECHA DE NACIMIENTO</label>
					<input type="date" name="fn" value="{{ $usu->fn }}" class="form-control">
                    <label>GENERO:</label><br>
					@if($usu->genero == 2)
						Femenino<input type="radio" name="tamaño" value = "2" checked>
						Masculino<input type="radio" name="tamaño" value = "1">
						<br><br>
					@elseif($usu->genero == 1)
                        Femenino<input type="radio" name="tamaño" value = "2">
						Masculino<input type="radio" name="tamaño" value = "1" checked>
                        <br><br>
                    @endif
                    <label>CELULAR</label>
					<input type="text" name="celular" value="{{ $usu->celular }}" class="form-control">
                    <label>CORREO</label>
					<input type="email" name="correo" value="{{ $usu->correo }}" class="form-control">
                    <label>CONTRASEÑA</label>
					<input type="password" name="contrasena" value="{{ $usu->contrasena }}" class="form-control">
                    <label>IMAGEN</label>
					<input type="file" name="img1" class="form-control">
                    <input type="text" name="img2" value="{{ $usu->img }}" class="form-control"><br>
					<label>USUARIO:</label><br>
					@if($usu->id_tipo == 1)
						Administrador <input type="radio" name="id_tipo" value = "1" checked>
						Empleado<input type="radio" name="tamaño" value = "2">
						<br><br>
                    @elseif($usu->id_tipo == 2)
						Administrador <input type="radio" name="id_tipo" value = "1">
						Empleado<input type="radio" name="tamaño" value = "2" checked>
					@endif
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>	
		</div>
    </section>
	@endsection