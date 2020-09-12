@extends('layouts.main')

@section('title', 'Cadastrar contato')
    
@section('content')

    <style>
    .small {
	    color: red;
        }
    </style>

    <h1>Cadastrar novo contato</h1>
    <div class="small"> 
    <small id="phone" class="form-text text-muted" style="font-style: oblique">
                
                Campos com * são obrigatórios
              </small>
    </div>
    

    <form action="/Contacts" method="POST" class="form-group">
    
        @csrf
        <div class="form-group">

            <label for="name">Nome completo*</label>
           
            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
            
            @error('name')
                <p class="alert alert-danger">Nome obrigatório</p>
            @enderror
            
        </div>
        
        <div class="form-group">
            
            <label for="email">Email*</label>
            <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <p class="alert alert-danger">Email obrigatório</p>
            @enderror
        </div>

        <div class="form-group">

            <label for="Phone">N° Celular:</label>
            <input type="text" id="phone" name="phone" class="form-control phone-mask" value="{{old('phone')}}">
            
            
        </div>
        
        <div class="form-group">

            <button type="submit"  class="btn btn-danger">Cadastrar</button>

            
        </div>
    </form>

@endsection