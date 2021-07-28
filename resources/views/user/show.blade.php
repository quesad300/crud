@extends('layouts.app')
@section('content')
<div class="container text-center">
    <center>Usuario</center>
    @include('user.user', ['user'=>$user])
</div>
@endsection