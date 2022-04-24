@extends('layout')

@section('title' , 'Portafolio | Editar ')

@section('contenido')

    <div class="container card mt-5 w-50">
        <h1>Editar proyecto</h1>
        <form action="{{ route('project.update' , $project) }}" method="POST">
            @csrf @method('PATCH')

            @if($errors->any())
            
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </div>
            
            @endif
        
            <div class="input-group mb-3">
                <span class="input-group-text"  id="inputGroup-sizing-default">Titulo</span>
                <input type="text" name="title" value="{{ old('title' , $project->title) }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text"  id="inputGroup-sizing-default">URL</span>
                <input type="text" name="url" value="{{ old('url' , $project->url)}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        
        
            <div class="input-group">
                <span class="input-group-text">Descripción</span>
                <textarea class="form-control" name="description" aria-label="With textarea">{{ old('description' , $project->description) }}</textarea>
            </div>
        
            <div class="d-grid gap-2"  style="margin-top:5%; text-align: center;">
                <button class="btn btn-primary">Actualizar</button>
            </div>
        
        
        </form>
    </div>

@endsection