@extends('layouts.layout')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div>
                    <a href="{{ route('editarper')}}"><h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Editar Perfil</span></h3></a>
	    		</div>
                <div class="col-md-12">
			    	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Perfil</span>
			    	</h2>
			    </div>
                <br>
                <table class="table">
                    <tbody  style="border: 2px solid #28a7e9">
                        <tr>
                            <td class="col-md-2" style="border: 2px solid #28a7e9">
                                <img src="{{ asset('images/'.$usu->img) }}" alt="{{ $usu->img }}"  width="150">
                            </td>
                            <td class="col-md-5">
                            <h4><b>Clave: </b>{{($usu->clave)}}</h4><br>
                            <h4><b>Nombre: </b>{{($usu->nombre)}}</h4><br>
                            </td>
                            <td class="col-md-5">
                            <h4><b>Precio: $</b>{{($usu->precio)}}</h4><br>
                                <h4><b>Tamaño: </b>
                                    @if($usu->genero == 1)
                                        Grande
                                    @elseif($usu->genero == 2)
                                        Mediano
                                    @endif
                                </h4><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
	    	</div>
	    </div>
        <br><br><br><br><br>
    </section>
    @endsection