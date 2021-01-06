@extends('masterin')
    @section('contenido')
        <h1>Logeado</h1>
        @foreach($user as $u)
        <p> hola: {{$u->nom_user}} </p> 
        @endforeach
@stop