@extends('layouts.app')
@section('content')
<div class="container text-center">
    <center>Nuevo User</center>
    @include('user.form', ['user'=>$user, 'url'=>'/users', 'method'=>'POST'])
</div>
@endsection
