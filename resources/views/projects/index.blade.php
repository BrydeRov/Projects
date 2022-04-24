@extends('layout')

    @section('title' , 'Portfolio')

    @section('contenido')

    


       <div class="card mx-5 my-3">
           <div class="card-header">
               <div class="row">
                   <div class="col"><h1>Proyectos</h1></div>
                   <div class="col text-end justify-content-center">
                    <a href="{{ route('project.create') }}" 
                        type="button" 
                        class="btn btn-info" 
                        style="text-decoration: none">
                        Crear Proyecto
                    </a>
                   </div>
               </div>

           </div>
        
           <div class="list-group">
            @isset($projects)
                
             @foreach ($projects as $project)
                    <button type="button" class="list-group-item list-group-item-action">
                        <a href="{{ route('project.show', $project) }}" style="text-decoration: none;">{{ $project->title }}</a>
                    </button>
                @endforeach
    

                @else
                    <h2>No hay proyectos para mostrar</h2>
             @endisset
             {{$projects->links()}}
            
             
            </div>

                
       </div>



    @endsection
