@extends('layout')

    @section('title' , 'Contact')

    @section('content')
    
    <div class="container" style="width: 50%; border: outset; padding: 15px 15px; border-radius: 15px;">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                @endforeach
            </div>
            
        @endif
        <h1>Contact</h1>

        <form action="" method="POST">
            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text"  id="inputGroup-sizing-default">Nombre</span>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Correo</span>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
            </div>
        
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Asunto</span>
                <input type="text" name="subject" value="{{old('subject')}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
            </div>
    
            <div class="input-group">
                <span class="input-group-text">Mensaje</span>
                <textarea class="form-control" name="content" aria-label="With textarea">{{old('content')}}</textarea>
            </div>

            <div class="d-grid gap-2"  style="margin-top:5%; text-align: center;">
                <button class="btn btn-primary">Enviar</button>
            </div>

        
        </form>
        
        
    </div>
    
    @endsection
