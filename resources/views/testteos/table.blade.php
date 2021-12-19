<div class="table-responsive">
    <table class="table" id="testteos-table">
        <thead>
        <tr>
            <th>Detalle</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($testteos as $testteo)
            <tr>
                <td>{{ $testteo->detalle }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['testteos.destroy', $testteo->idtest], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('testteos.show', [$testteo->idtest]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('testteos.edit', [$testteo->idtest]) }}"
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
