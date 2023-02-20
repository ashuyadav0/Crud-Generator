<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $categoria->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imatge') }}
            {{ Form::text('imatge', $categoria->imatge, ['class' => 'form-control' . ($errors->has('imatge') ? ' is-invalid' : ''), 'placeholder' => 'Imatge']) }}
            {!! $errors->first('imatge', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('disponible') }}
            {{ Form::text('disponible', $categoria->disponible, ['class' => 'form-control' . ($errors->has('disponible') ? ' is-invalid' : ''), 'placeholder' => 'Disponible']) }}
            {!! $errors->first('disponible', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>