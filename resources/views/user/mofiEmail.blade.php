@extends('layouts.app')


@section('content')

    <form method="post" action="{{route('NewMail')}}">
        @csrf
    <p>votre adresse e-mail actuelle est:  {{$mail->email}}</p>
    <p>Entrez votre nouvelle adresse mail: <input type="email" id="email" name="email"/></p>
    <input type="submit" value="Envoyer" />
</form>

@endsection