@extends ('layouts.template')
@section('titre','FormLogin')


 @section('contenu')  
    <html><p>Connexion :</p><br></html>

 {!! Form::open(['url' =>'users']) !!}
    {!! Form::label('username','Username : ') !!} 
    {!! Form::text('username') !!}
    {!! Form::label('password','Password : ') !!} 
    {!! Form::password('password') !!}
    {!! Form::submit('Soumettre') !!}
    {!! Form::close() !!}

    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>     
        @endforeach 
    </ul>
@endsection