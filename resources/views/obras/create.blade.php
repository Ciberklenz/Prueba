@extends('layouts.app')
@section('menus.admin')
@section('title','Crear Obra')

@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{($error)}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['route'=>'obras.store','method'=>'POST']) !!}
    <div class="container-fluid">
        <div class="from--group">

            {!! Form::label('nombre_obra','Nombre Obra') !!}
            {!! Form::text('nombre_obra',null,['class'=>'form-control']) !!}
        </div>


        <div class="from--group">
            {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

        </div>
    </div>



    {!! Form::close() !!}

@endsection