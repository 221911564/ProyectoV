@extends('layouts.layout')

    @section('contenido')
	<section id="about">
		<div class="container">
			<div class="row">
				<div>
                    <a href=""><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Agregar Empleado</span></h3></a>
	    		</div>
				<div class="col">
					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">DISATOY'S <span>USUARIOS</span></h2>
				</div>
				@foreach($usus as $usu)
				<div class="fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="media" style="border: 2px solid #28a7e9">
						<div>
							<div class="media-ob pull-left">
							@if($usu->img == null)
								<img src="{{ asset('images/no-user.jpg') }}" class="img-responsive" width="100">
							@else
								<img src="{{ asset('images/'.$usu->img) }}" alt="{{ $usu->img }}" class="img-responsive" width="100">
							@endif
							</div>
							<h3>
								@foreach($tipos as $tipo)
                					@if($tipo->id_tipo == $usu->id_tipo)
                    					{{ $tipo->nombre }}
                					@endif
            					@endforeach
							</h3>
						</div>
						<div class="media-body">
							<p class="media-heading">
								{{$usu->app}} {{$usu->apm}}, {{$usu->nombre}} <br>
                        		    @if($usu->genero == 1)
                        		        Masculino
                        		    @else
                        		        Femenino
                        		    @endif
								<br>

							</p>
						</div>
					</div>
					<br>
				</div>
				@endforeach
			</div>
		</div>
	</section>
    @endsection