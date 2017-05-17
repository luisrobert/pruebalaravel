@extends('layouts.admin')
@section('content')
{!! Form::model($user,
['route' => ['usuario.update',$user->id],
'method'=>'PUT']) !!}

{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
@include('usuario.forms.usr')
{!! Form::close() !!}
@stop