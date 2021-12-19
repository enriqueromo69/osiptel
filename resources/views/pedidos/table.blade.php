<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
        <tr>
            <th>Des Pedido</th>
        <th>Idoperador</th>
        <th>Idproducto</th>
        <th>Obs Gn</th>
        <th>Idusercli</th>
        <th>Fec Reg</th>
        <th>Solucion</th>
        <th>Estado</th>
        <th>Supervisor</th>
        <th>Altitud</th>
        <th>Latitud</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->des_pedido }}</td>
            <td>{{ $pedido->idoperador }}</td>
            <td>{{ $pedido->idproducto }}</td>
            <td>{{ $pedido->obs_gn }}</td>
            <td>{{ $pedido->idusercli }}</td>
            <td>{{ $pedido->fec_reg }}</td>
            <td>{{ $pedido->solucion }}</td>
            <td>{{ $pedido->estado }}</td>
            <td>{{ $pedido->supervisor }}</td>
            <td>{{ $pedido->altitud }}</td>
            <td>{{ $pedido->latitud }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->idpedido], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedido->idpedido]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pedidos.edit', [$pedido->idpedido]) }}"
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
