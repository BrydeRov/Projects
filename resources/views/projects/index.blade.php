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
 
    <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse ($projects as $project)
                
        <div class="card" style="width: 18rem;">
           
                @if ($project->image)
                    <img class="img-thumbnail rounded float-start" src="/storage/{{$project->image}}" alt="{{$project->title}}">                    
                @endif 
                <div class="card-body">
                
                <h5 class="card-title">
                    <a class="d-flex justify-content-between align-items-center text-primary" href="{{ route('project.show', $project) }}" style="text-decoration: none;">
                        {{ $project->title }}
                    </a>
                </h5>
                <p class="card-description">{{ $project->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
           
        </div>                

        @empty
        <li>No hay proyectos por mostrar</li>
        @endforelse
    </div>



    {{$projects->links()}}




</div>


@endsection
