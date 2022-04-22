@extends('layout')

    @section('title' , 'Crear Proyecto')

    @section('content')

        <div class="container card mt-5 w-50">
            <h1>Crear nuevo proyecto</h1>
            <form action="{{ route('project.store') }}" method="POST">
                @csrf

                @include('partials.validations-errors')
            
                <div class="input-group mb-3">
                    <span class="input-group-text"  id="inputGroup-sizing-default">Titulo</span>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"  id="inputGroup-sizing-default">URL</span>
                    <input type="text" name="url" value="{{old('url')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            
            
                <div class="input-group">
                    <span class="input-group-text">Descripción</span>
                    <textarea class="form-control" name="description" aria-label="With textarea">{{old('description')}}</textarea>
                </div>
            
                <div class="d-grid gap-2"  style="margin-top:5%; text-align: center;">
                    <button class="btn btn-primary">Crear</button>
                </div>
            
            
            </form>
        </div>

    @endsection