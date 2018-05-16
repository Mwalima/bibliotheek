<div class="container">
    {!! Form::open(['route'=>'insertboek.store']) !!}

    <div class="form-group {{ $errors->has('auteur') ? 'has-error' : '' }}">
        {!! Form::label('auteur:') !!}
        {!! Form::text('auteur', old('auteur'), ['class'=>'form-control', 'placeholder'=>'Enter auteur']) !!}
        <span class="text-danger">{{ $errors->first('auteur') }}</span>
    </div>

    <div class="form-group {{ $errors->has('titel') ? 'has-error' : '' }}">
        {!! Form::label('titel:') !!}
        {!! Form::text('titel', old('titel'), ['class'=>'form-control', 'placeholder'=>'Enter titel']) !!}
        <span class="text-danger">{{ $errors->first('titel') }}</span>
    </div>

    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
        {!! Form::label('Omschrijving:') !!}
        {!! Form::textarea('omschrijving', old('omschrijving'), ['class'=>'form-control', 'placeholder'=>'Enter omschrijving']) !!}
        <span class="text-danger">{{ $errors->first('omschrijving') }}</span>
    </div>

        <div class="form-group {{ $errors->has('afbeelding') ? 'has-error' : '' }}">
            {!! Form::label('afbeelding:') !!}
            {!! Form::file('afbeelding', old('afbeelding'), ['class'=>'form-control', 'placeholder'=>'Enter auteur']) !!}

            {{Form::submit('Save', ['class' => 'btn btn-success'])}}
            <span class="text-danger">{{ $errors->first('save') }}</span>
        </div>
    {!! Form::close() !!}
    </div>
</div>