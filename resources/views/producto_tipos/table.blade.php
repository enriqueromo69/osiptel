<div class="table-responsive">
    <table class="table" id="productoTipos-table">
        <thead>
        <tr>
            <th>Des Tipoprod</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productoTipos as $productoTipo)
            <tr>
                <td>{{ $productoTipo->des_tipoprod }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['productoTipos.destroy', $productoTipo->idprodtipo], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('productoTipos.show', [$productoTipo->idprodtipo]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('productoTipos.edit', [$productoTipo->idprodtipo]) }}"
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
