@extends('layout')

@section('title' , 'Portafolio | ' . $project->title)

@section('contenido')



    <div class="card mx-3 my-3">

            <div class="card-header">
                <div class="row">
                    <div class="col"><h1>{{ $project->title }}</h1></div>
                    <div class="col text-end">

                        <div class="d-flex flex-row-reverse bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <a href="{{ route('project.edit', $project) }}" class="my-2" type="button">
                                    <span class="badge bg-info text-dark">Editar</span>
                                </a> 
                            </div>
                            <div class="p-2 bd-highlight">
                                <form action="{{route('project.destroy', $project)}}" style="margin: 0px;" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="my-2">
                                        <span class="badge bg-danger text-white">Borrar</span>
                                    </button>
                                </form> 
                                                        
                            </div>                    
                        </div>
                        
                                    
                    </div>
                </div>
                
            </div>
            
            
        <div class="card-body">
            <h5>{{ $project->description }}</h5>
            <p>{{ $project->created_at->diffForHumans() }}</p> 
        </div>
         
    </div>

@endsection