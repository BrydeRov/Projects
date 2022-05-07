@extends('layout')

    @section('title' , 'Crear Proyecto')

    @section('contenido')

        <div class="container border mt-5 justify-content-center align-items-center" style=" border-radius: 15px;">
            <h1 class="my-4">Crear nuevo proyecto</h1>
            <form action="{{ route('project.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                @csrf

                @include('partials.validations-errors')

                <div class="mb-3">
                    <label for="formFile" class="form-label">Imagen del proyecto</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
            
                <div class="form-floating mb-3">
                    <input type="text" 
                    name="title" 
                    value="{{old('title')}}" 
                    class="form-control" 
                    aria-label="Sizing example input" 
                    aria-describedby="inputGroup-sizing-default" 
                    placeholder="name@example.com" 
                    id="validationCustom01"/>
                    <label for="floatingInput">Titulo</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="category_id" id="" class="form-control">
                        <option disabled value="" selected>Escoger Categoria...</option>
                            @foreach($categories as $id => $title)
                                <option value="{{$id}}">{{ $title }}</option>
                            @endforeach
                    </select>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" 
                    name="url" 
                    value="{{old('url')}}" 
                    class="form-control" 
                    aria-label="Sizing example input" 
                    aria-describedby="inputGroup-sizing-default" 
                    placeholder="name@example.com" />
                    <label for="floatingInput">URL</label>
                </div>


                <div class="form-floating">
                    <textarea 
                        class="form-control" 
                        id="floatingTextarea2"                         
                        name="description"
                        style="height: 100px">

                        {{old('description')}}
                    </textarea>
                    <label for="floatingTextarea2">Descripción</label>
                </div>

                <div class="d-grid gap-2 mb-2"  style="margin-top:5%; text-align: center;">
                    <button class="btn btn-primary">Crear</button>
                </div>
            
            
            </form>
        </div>

    @endsection