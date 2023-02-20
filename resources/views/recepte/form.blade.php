<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('titol') }}
            {{ Form::text('titol', $recepte->titol, ['class' => 'form-control' . ($errors->has('titol') ? ' is-invalid' : ''), 'placeholder' => 'Titol']) }}
            {!! $errors->first('titol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temps_cocció') }}
            {{ Form::text('temps_cocció', $recepte->temps_cocció, ['class' => 'form-control' . ($errors->has('temps_cocció') ? ' is-invalid' : ''), 'placeholder' => 'Temps Cocció']) }}
            {!! $errors->first('temps_cocció', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fotografia') }}
            {{ Form::text('fotografia', $recepte->fotografia, ['class' => 'form-control' . ($errors->has('fotografia') ? ' is-invalid' : ''), 'placeholder' => 'Fotografia']) }}
            {!! $errors->first('fotografia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredients') }}
            {{ Form::text('ingredients', $recepte->ingredients, ['class' => 'form-control' . ($errors->has('ingredients') ? ' is-invalid' : ''), 'placeholder' => 'Ingredients']) }}
            {!! $errors->first('ingredients', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passos') }}
            {{ Form::text('passos', $recepte->passos, ['class' => 'form-control' . ($errors->has('passos') ? ' is-invalid' : ''), 'placeholder' => 'Passos']) }}
            {!! $errors->first('passos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $recepte->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>