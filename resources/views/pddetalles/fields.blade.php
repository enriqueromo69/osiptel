<!-- Idpedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idpedido', 'Idpedido:') !!}
    {!! Form::number('idpedido', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Archivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('archivo', 'Archivo:') !!}
    {!! Form::text('archivo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>