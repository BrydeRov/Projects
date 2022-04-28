@extends('layout')

@section('title' , 'Portafolio | ' . $project->title)

@section('contenido')

<<<<<<< HEAD


    <div class="card mx-3 my-3">

            <div class="card-header">
                <div class="row">
                    <div class="col"><h1>{{ $project->title }}</h1></div>
                    <div class="col text-end">

                        <div class="d-flex flex-row-reverse bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
=======
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
>>>>>>> 5ea8c604f56110e29512c2e393aff38c23e76006
                                <a href="{{ route('project.edit', $project) }}" class="my-2" type="button">
                                    <span class="badge bg-info text-dark">Editar</span>
                                </a> 
                            </div>
<<<<<<< HEAD
                            <div class="p-2 bd-highlight">
                                <form action="{{route('project.destroy', $project)}}" style="margin: 0px;" method="POST">
=======
                            <div class="col">
                                <form action="{{route('project.destroy', $project)}}" style="margin: 0px; border:none;" method="POST">
>>>>>>> 5ea8c604f56110e29512c2e393aff38c23e76006
                                    @csrf @method('DELETE')
                                    <button class="my-2">
                                        <span class="badge bg-danger text-white">Borrar</span>
                                    </button>
                                </form> 
<<<<<<< HEAD
                                                        
                            </div>                    
                        </div>
                        
                                    
                    </div>
                </div>
                
            </div>
            
            
        <div class="card-body">
            <h5>{{ $project->description }}</h5>
            <p>{{ $project->created_at->diffForHumans() }}</p> 
        </div>
         
=======
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
>>>>>>> 5ea8c604f56110e29512c2e393aff38c23e76006
    </div>



@endsection