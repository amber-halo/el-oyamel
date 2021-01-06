@extends('welcome1')

@section('cuerpo')
    Hola mundo!
    <a href="{{ route('usuarios.modificar') }}"></a>
@endsection