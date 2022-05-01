@extends('layout')

    @section('title' , 'Contact')

    @section('contenido')
    
    <div class="container mt-4" style="width: 50%; border: outset; padding: 15px 15px; border-radius: 15px;">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                @endforeach
            </div>
            
        @endif
        <h1>Contact</h1>

        @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>            
        @endif

        <form action="" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input type="text" 
                name="name" 
                value="{{old('name')}}" 
                class="form-control" 
                aria-label="Sizing example input" 
                aria-describedby="inputGroup-sizing-default"  
                id="validationCustom01"/>
                <label for="floatingInput">Nombre</label>
            </div>

            
            
            <div class="form-floating mb-3">
                <input type="email" 
                name="email" 
                value="{{old('email')}}" 
                class="form-control" 
                aria-label="Sizing example input" 
                aria-describedby="inputGroup-sizing-default"  
                id="validationCustom01"/>
                <label for="floatingInput">Correo</label>
            </div>
        
            <div class="form-floating mb-3">
                <input type="text" 
                name="subject" 
                value="{{old('subject')}}" 
                class="form-control" 
                aria-label="Sizing example input" 
                aria-describedby="inputGroup-sizing-default" 
                id="validationCustom01"/>
                <label for="floatingInput">Asunto</label>
            </div>


            <div class="form-floating">
                <textarea 
                    class="form-control" 
                    id="floatingTextarea2"                         
                    name="content"
                    style="height: 100px">

                    {{old('content')}}
                </textarea>
                <label for="floatingTextarea2">Mensaje</label>
            </div>
    
           

            <div class="d-grid gap-2"  style="margin-top:5%; text-align: center;">
                <button class="btn btn-primary">Enviar</button>
            </div>

        
        </form>
        
        
    </div>
    
    @endsection
