<!-- Idprodtipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idprodtipo', 'Idprodtipo:') !!}
    {!! Form::number('idprodtipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Des Producto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des_producto', 'Des Producto:') !!}
    {!! Form::text('des_producto', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Editable Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('editable', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('editable', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('editable', 'Editable', ['class' => 'form-check-label']) !!}
    </div>
</div>
