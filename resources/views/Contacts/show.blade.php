@extends('layouts.main');

@section('title', 'Excluir')

@section('content')
<form action="/Contacts/{{$contato->id}}"  method="POST">

    @csrf
    <input type="hidden" name="_method" value="delete" >
    <button type="submit">Excluir</button>

</form>

@endsection