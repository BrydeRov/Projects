@extends('layout')

@section('title' , 'Portafolio | ' . $project->title)

@section('content')

    <div class="container">
        
        <di class="row">
            <div class="col"><h1>{{ $project->title }}</h1></div>
            <div class="col text-end">
                
                <a href="{{ route('project.edit', $project) }}" class="my-2" type="button">
                    <span class="badge bg-info text-dark">Editar</span>
                </a>

                <form action="{{route('project.destroy', $project)}}" style="border: none;" method="POST">
                    @csrf @method('DELETE')
                    <button class="my-2">
                        <span class="badge bg-danger text-white">Borrar</span>
                    </button>
                </form>                
            </div>
        </di>
        
        <p>{{ $project->description }}</p>
        <p>{{ $project->created_at->diffForHumans() }}</p>  
    </div>

@endsection