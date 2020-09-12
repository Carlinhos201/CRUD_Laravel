@extends('layouts.main')

@section('title', 'Editar contato')
    
@section('content')
    
<h1>Editar o contato: {{$contato->name}}</h1>

<form action="/Contacts/{{$contato->id}}" method="POST">
    
    @csrf
    <input type="hidden" name="_method" value="PUT" >

        <div class="form-group">

            <label for="name">Nome completo:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$contato->name}}">
        </div>
        
        <div class="form-group">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="{{$contato->email}}">
        </div>

        <div class="form-group">

            <label for="Phone">N° Celular:</label>
            <input type="text" id="phone" name="phone" class="form-control phone-mask" value="{{$contato->phone}}">
            
        </div>

        <div>
            <button type="submit">Concluir edição</button>
        </div>

</form>

@endsection

