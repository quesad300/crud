@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Pais</td>
                <td>Acciones</td>
            </tr>       
        </thead>
        <tbody>
            
            @foreach($users as $user)
                <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->sexo}}</td>
                <td>{{$user->pais}}</td>
                <td>
                    <a href="{{url('/users/'.$user->id)}}" class="btn">Ver</a>
                    <a href="{{url('/users/'.$user->id.'/edit')}}" class="btn">Editar</a>
                    @include('user.delete', ['user'=>$user]);
                </td>
                </tr>
            @endforeach
            
        </tbody>    
    </table>
</div>
<div class="text-center">
    <a href="{{ url('/users/create')}}" class="btn btn-primary">Agregar</a>
</div>


@endsection