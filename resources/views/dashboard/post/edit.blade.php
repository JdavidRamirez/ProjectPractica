@extends('dashboard.master')
@section('content')
<h6>Editar publicación</h6>
   <form action="{{route('post.update' -> id)}}" method="POST">
       @method('PUT')
       @include('dashboard.post._form')
   </form>
@endsection