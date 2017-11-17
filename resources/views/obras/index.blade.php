@extends('layouts.app')

@section('title','LISTA DE OBRAS')

@section('content')
    <table class="table table-striped">
        <thead>
        <button href="{{route('obras.create')}}" type="button" class="btn btn-success" data-toggle="modal"
                data-target=".bs-example-modal-lg">Crear Obra
        </button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                </div>
            </div>
        </div>


        <th> ID</th>
        <th> Nombre Obra</th>


        </thead>
        <tbody>
        @foreach($obras as $obra)
            <tr>
                <td>{{$obra->id}}</td>
                <td>{{$obra->nombre_obra}}</td>


                <td><a href="{{route('obras.destroy',$obra->id)}}"
                       onclick="return confirm('¿Seguro de Eliminar esa obra?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove-circle" aria-hidden="true">
                            </span> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$obras->render()}}

@endsection