@extends('layouts.admin')
@section('content')
{!! Form::open(['route' => 'usuario.store',
'method'=>'POST']) !!}

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
@include('usuario.forms.usr')
{!! Form::close() !!}

@STOP