<div class="table-responsive">
    <table class="table" id="pddetalles-table">
        <thead>
        <tr>
            <th>Idpedido</th>
        <th>Descripcion</th>
        <th>Archivo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pddetalles as $pddetalle)
            <tr>
                <td>{{ $pddetalle->idpedido }}</td>
            <td>{{ $pddetalle->descripcion }}</td>
            <td>{{ $pddetalle->archivo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pddetalles.destroy', $pddetalle->idpddetalle], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pddetalles.show', [$pddetalle->idpddetalle]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pddetalles.edit', [$pddetalle->idpddetalle]) }}"
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
