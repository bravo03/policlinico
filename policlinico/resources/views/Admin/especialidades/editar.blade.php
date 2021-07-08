@extends('Admin.index')
@section('content')
    <h1 class="text-center">Editar Especialidad</h1>
    <form action="{{ url('especialidad/'.$especialidad->IdEspecialidad) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('Admin.especialidades.formulario')
    </form>
@endsection