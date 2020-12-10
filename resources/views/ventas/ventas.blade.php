<div>
            <div>
                <h2><b>Empleado: </b> {{ $usuario->app." ".$usuario->apm.", ".$usuario->nombre }}</h2>
                <hr>
                <form action="{{ route('guardarv') }}" method="POST">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <td>Productos: </td>
                            <td>
                                <select name="id_producto">
                                    <option value="">-- Selecciona un Producto --</option>
                                    @foreach($productos as $producto)
                                    <option value="{{ $producto->id_producto }}">{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                @if($errors->first('id_producto')) <i style="color: red;">{{ $errors->first('id_producto') }}</i>@endif
                            </td>
                        </tr>
                        <tr>
                            <td>Cantidad: </td>
                            <td><input type="text" name="cantidad" value="{{ old('cantidad')}}"></td>
                            <td>
                                @if($errors->first('cantidad')) <i style="color: red;">{{ $errors->first('cantidad') }}</i>@endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><input type="submit" value="Vender"></td>
                        </tr>
                    </table>
                </form>
                <hr>
                <?php $i=1 ?>
                @foreach($productos as $prod1)
                @foreach($ventas as $venta)
                @if($venta->id_usuario == $usuario->id_usuario && $venta->id_producto == $prod1->id_producto)
                <?php echo $i++ ?><br>
                    {{$venta->cantidad * $prod1->precio}} <br>
                @endif
                @endforeach
                @endforeach
                
            </div>

    </div>