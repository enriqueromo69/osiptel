<div class="table-responsive">
    <table class="table" id="userclis-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Celular</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userclis as $usercli)
            <tr>
                <td>{{ $usercli->name }}</td>
            <td>{{ $usercli->celular }}</td>
            <td>{{ $usercli->email }}</td>
            <td>{{ $usercli->email_verified_at }}</td>
            <td>{{ $usercli->password }}</td>
            <td>{{ $usercli->remember_token }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['userclis.destroy', $usercli->idusercli], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('userclis.show', [$usercli->idusercli]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('userclis.edit', [$usercli->idusercli]) }}"
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
