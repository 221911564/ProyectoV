@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
		<div class="container">
			<div class="row">
				<div>
                    <a href="{{ route('nuevo') }}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Agregar Empleado</span></h3></a>
	    		</div>
				<div class="col">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">DISATOY'S <span>USUARIOS</span></h2>
				</div>
				<div class="col" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="col-md-12" style="border: 2px solid #28a7e9">
						<div class="col-md-2">
							<h3>Imagen</h3>
						</div>
						<div class="col-md-3">
							<h3>Cargo</h3>
						</div>
						<div class="col-md-4">
							<h3>Correo</h3>
						</div>
						<div class="col-md-1">
							<h3>Estatus</h3>
						</div>
						<div class="col-md-2">
							<h3>Acciones</h3>
						</div>
					</div>
				</div>
				@foreach($usus as $usu)
				<div class="col" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="col-md-12" style="border: 2px solid #28a7e9">
					<div></div>
						<div class="col-md-2">
							@if($usu->img == null)
								<img src="{{ asset('images/no-user.jpg') }}" class="img-responsive" width="100">
							@else
								<img src="{{ asset('images/'.$usu->img) }}" alt="{{ $usu->img }}" class="img-responsive" width="100">
							@endif
						</div>
						<div class="col-md-3">
							<h3>
								@foreach($tipos as $tipo)
                					@if($tipo->id_tipo == $usu->id_tipo)
                    					{{ $tipo->nombre }}
                					@endif
            					@endforeach
							</h3>
							<p>
								{{ $usu->app }} {{ $usu->apm }}, {{ $usu->nombre }} <br>
								@if($usu->genero == 2)
									Femenino
								@else
									Masculino
								@endif
								<br>
								Celular: {{ $usu->celular }}
						</p>
						</div>
						<div class="col-md-4">
							<h3>{{ $usu->correo }}</h3>
						</div>
						<div class="col-md-1">
							<h3>
							@if($usu->activo == 1)
								Activo
							@else
								Inactivo
							@endif
							</h3>
						</div>
						<div class="col-md-2">
							<h4><a href="{{ route('editar', ['id' => $usu->id_usuario]) }}">Editar</a></h4>
                                <form action="{{ route('borraru', ['id' => $usu->id_usuario]) }}" method="GET" name="borrar">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
					                <input type="submit" class="form-control" value="Borrar">
				                </form>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
    @endsection