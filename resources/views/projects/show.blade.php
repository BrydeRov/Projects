@extends('layout')

@section('title' , 'Portafolio | ' . $project->title)

@section('contenido')

    <div class="card m-4">
        <div class="card-header">
            <div class="container">
                <div class="row">
                  <div class="col">
                    <h1>{{ $project->title }}</h1>
                  </div>
                  <div class="col col-lg-2 text-end">
                      @auth
                        <div class="row">
                            <div class="col">
                                <a href="{{ route('project.edit', $project) }}" class="my-2" type="button">
                                    <span class="badge bg-info text-dark">Editar</span>
                                </a> 
                            </div>
                            <div class="col">
                                <form action="{{route('project.destroy', $project)}}" style="margin: 0px; border:none;" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="my-2">
                                        <span class="badge bg-danger text-white">Borrar</span>
                                    </button>
                                </form> 
                            </div>
                        </div>                      
                     @endauth
                  </div>
                                  
                </div>
              </div>
        </div>
        <div class="card-body">
            <p>{{ $project->description }}</p>
            <p>{{ $project->created_at->diffForHumans() }}</p>
        </div>
    </div>



@endsection