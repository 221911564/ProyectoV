@extends('layouts.layou')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
                <div class="col-md-12">
			    	<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Ventas</span>
			    	</h2>
			    </div><br>
                <h3><b>Empleado: </b> {{ $usuario->app." ".$usuario->apm.", ".$usuario->nombre }}</h><hr>
                <form action="{{ route('guardarv') }}" method="POST">
                    {{ csrf_field() }}
                    <table class="table">
                        <tbody style="border: 2px solid #28a7e9">
                            <tr>
                                <td>Productos: </td>
                                <td>
                                    <select class="form-control" name="id_producto">
                                        <option style="color: black;" value="">Selecciona un Producto</option>
                                        @foreach($productos as $producto)
                                        <option style="color: black;" value="{{ $producto->id_producto }}">{{ $producto->nombre }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    @if($errors->first('id_producto')) <i>{{ $errors->first('id_producto') }}</i>@endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cantidad: </td>
                                <td><input type="text" name="cantidad" value="{{ old('cantidad') }}" class="form-control"></td>
                                <td>
                                    @if($errors->first('cantidad')) <i>{{ $errors->first('cantidad') }}</i>@endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"><input type="submit" value="Vender"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
	    	</div>
	    </div>
        <br><br><br><br><br>
    </section>
    @endsection