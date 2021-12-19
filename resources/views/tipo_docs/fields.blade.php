<!-- Des Doc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('des_doc', 'Des Doc:') !!}
    {!! Form::text('des_doc', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Max Caracter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('max_caracter', 'Max Caracter:') !!}
    {!! Form::number('max_caracter', null, ['class' => 'form-control']) !!}
</div>

<!-- Titulo Label Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo_label', 'Titulo Label:') !!}
    {!! Form::text('titulo_label', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Desc Persona Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_persona', 'Desc Persona:') !!}
    {!! Form::text('desc_persona', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>