<!-- Des Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des_pedido', 'Des Pedido:') !!}
    {!! Form::text('des_pedido', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Idoperador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idoperador', 'Idoperador:') !!}
    {!! Form::number('idoperador', null, ['class' => 'form-control']) !!}
</div>

<!-- Idproducto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idproducto', 'Idproducto:') !!}
    {!! Form::number('idproducto', null, ['class' => 'form-control']) !!}
</div>

<!-- Obs Gn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('obs_gn', 'Obs Gn:') !!}
    {!! Form::text('obs_gn', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Idusercli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idusercli', 'Idusercli:') !!}
    {!! Form::number('idusercli', null, ['class' => 'form-control']) !!}
</div>

<!-- Fec Reg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fec_reg', 'Fec Reg:') !!}
    {!! Form::text('fec_reg', null, ['class' => 'form-control','id'=>'fec_reg']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fec_reg').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Solucion Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('solucion', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('solucion', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('solucion', 'Solucion', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Estado Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('estado', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('estado', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('estado', 'Estado', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Supervisor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor', 'Supervisor:') !!}
    {!! Form::text('supervisor', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Altitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altitud', 'Altitud:') !!}
    {!! Form::text('altitud', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Latitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('latitud', 'Latitud:') !!}
    {!! Form::text('latitud', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>