@extends('layout')

@section('title' , 'Portfolio')

@section('contenido')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Proyectos</h1>

        @auth
        <a href="{{ route('project.create') }}" type="button" class="btn btn-info" style="text-decoration: none">
            Crear Proyecto
        </a>
        @endauth
    </div>


    <ul class="list-group">
        @forelse ($projects as $project)
        <li class="list-group-item border-0 mb-3 shadow-sm">
            <a class="d-flex justify-content-between align-items-center text-secondary" href="{{ route('project.show', $project) }}" style="text-decoration: none;">
                <span class="">{{ $project->title }}</span>
                <span>{{ $project->created_at->format('d/m/Y') }}</span>
                
            </a>
        </li>
        @empty
        <li>No hay proyectos por mostrar</li>
        @endforelse
    </ul>


    {{$projects->links()}}




</div>


@endsection
