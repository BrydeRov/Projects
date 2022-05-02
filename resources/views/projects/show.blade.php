@extends('layout')

@section('title' , 'Portafolio | ' . $project->title)

@section('contenido')

<div class="d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
           
        @if ($project->image)
            <img class="img-thumbnail rounded float-start" src="/storage/{{$project->image}}" alt="{{$project->title}}">                    
        @endif 
        <div class="card-body">
            
            <div class="row">
                <div class="col align-items-center">
                    <h5 class="card-title">
                        {{ $project->title }}
                    </h5>
                </div>
                <div class="col align-items-center text-end">
                        
                    @auth                       
                        <div class="btn-group btn-group-sm mt-2 text-end" role="group" aria-label="...">
                            <a class="btn btn-primary" type="button" href="{{ route('project.edit', $project) }}">
                                <span class="text-white">Editar</span>
                            </a>
                        <button class="btn btn-danger" type="button">
                            <form action="{{route('project.destroy', $project)}}" style="margin: 0px; border:none;" method="POST">
                                @csrf @method('DELETE')                
                                    <span class="text-white">Borrar</span>            
                            </form>  
                        </button>
                        </div>                                    
                    @endauth
    
                </div>
            </div>
            
            <h6 class="mt-3">Descripción del proyecto</h6><br>
            <p class="card-description">{{ $project->description }}</p>
    
        </div>
    </div>
</div>






@endsection