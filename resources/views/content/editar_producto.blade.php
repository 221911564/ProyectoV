@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div class="col-md-12">
				<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Edita tu <span> producto</span>
				</h2>
			</div>
			<div class="align-self-xl-center" data-wow-offset="50" data-wow-delay="0.9s">
                <form action="{{ route('salvarp', ['id' => $prod->id_producto]) }}" method="POST" name="editar" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
					<label>NOMBRE</label>
					<input type="text" name="nombre" value="{{ $prod->nombre }}" class="form-control">
					<label>PRECIO</label>
					<input type="text" name="precio" value="{{ $prod->precio }}" class="form-control"><br>
                    <label>IMAGEN</label>
					<input type="file" name="img1" class="form-control">
                    <input type="text" name="img2" value="{{ $prod->img }}" class="form-control"><br>
					<label>TAMAÑO:</label><br>
					Grande<input type="radio" name="tamaño" value = "1">
					Mediano<input type="radio" name="tamaño" value = "2">
					Pequeño<input type="radio" name="tamaño" value = "3">
					<br><br>
					<input type="submit" class="form-control" value="GUARDAR">
				</form>
			</div>	
		</div>
    </section>
	@endsection