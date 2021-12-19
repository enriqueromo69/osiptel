<div class="table-responsive">
    <table class="table" id="tipoDocs-table">
        <thead>
        <tr>
            <th>Des Doc</th>
        <th>Max Caracter</th>
        <th>Titulo Label</th>
        <th>Desc Persona</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tipoDocs as $tipoDoc)
            <tr>
                <td>{{ $tipoDoc->des_doc }}</td>
            <td>{{ $tipoDoc->max_caracter }}</td>
            <td>{{ $tipoDoc->titulo_label }}</td>
            <td>{{ $tipoDoc->desc_persona }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tipoDocs.destroy', $tipoDoc->idtp_doc], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoDocs.show', [$tipoDoc->idtp_doc]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tipoDocs.edit', [$tipoDoc->idtp_doc]) }}"
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
