<div class="table-responsive">
    <table class="table" id="productos-table">
        <thead>
        <tr>
            <th>Idprodtipo</th>
        <th>Des Producto</th>
        <th>Editable</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->idprodtipo }}</td>
            <td>{{ $producto->des_producto }}</td>
            <td>{{ $producto->editable }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productos.destroy', $producto->idproducto], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productos.show', [$producto->idproducto]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productos.edit', [$producto->idproducto]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
