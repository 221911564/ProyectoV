@extends('layouts.layo')

    @section('contenido')
	<section id="contact">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>DISATOY'S</span> COMPRAS</h2>
                </div>
                @if (count(Cart::getContent()))
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" style="border: 2px solid #28a7e9">ID</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Nombre</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Precio</th>
                            <th scope="col" style="border: 2px solid #28a7e9">Cantidad</th>
                            <th scope="col" style="border: 2px solid #28a7e9"></th>
                        </tr>
                    </thead>
                    @foreach (Cart::getContent() as $item)
                    <tbody>
                    <tr>
                            <td style="border: 2px solid #28a7e9">{{$item->id}}</td>
                            <td style="border: 2px solid #28a7e9">{{$item->name}}</td>    
                            <td style="border: 2px solid #28a7e9">{{$item->price}}</td>
                            <td style="border: 2px solid #28a7e9">{{$item->quantity}}</td>
                            <td style="border: 2px solid #28a7e9">
                                <form action="{{route('cart.removeitem')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-link btn-sm text-danger">Cancelar</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                @else
                  <p>Carrito vacio</p>
                @endif
	    	</div>
	    </div>
	</section>
    @endsection