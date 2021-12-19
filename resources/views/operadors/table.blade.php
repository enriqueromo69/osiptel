<div class="table-responsive">
    <table class="table" id="operadors-table">
        <thead>
        <tr>
            <th>Des Operador</th>
        <th>Correo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($operadors as $operador)
            <tr>
                <td>{{ $operador->des_operador }}</td>
            <td>{{ $operador->correo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['operadors.destroy', $operador->idoperador], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('operadors.show', [$operador->idoperador]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('operadors.edit', [$operador->idoperador]) }}"
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
