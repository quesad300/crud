@extends('layouts.app')
@section('content')
<div class="container text-center">
    <center>Editar Usuario</center>
    @include('user.form', ['user'=>$user, 'url'=>'/users/'.$user->id, 'method'=>'PUT'])
</div>
@endsection