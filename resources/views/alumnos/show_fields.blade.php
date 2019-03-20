<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $alumnos->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $alumnos->nombre !!}</p>
</div>

<!-- Apellidos Field -->
<div class="form-group">
    {!! Form::label('Apellidos', 'Apellidos:') !!}
    <p>{!! $alumnos->Apellidos !!}</p>
</div>

<!-- Tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{!! $alumnos->tel !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $alumnos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $alumnos->updated_at !!}</p>
</div>

