@extends('layouts.main')

@section('title', 'Listagem de contatos')

@section('content')
    <h1>Lista de contatos cadastradas</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Celular</th>
            </tr>
        </thead>

        <tbody>
            
                @foreach ($contato as $contato) <!-- Aqui está listando os dados cadastrados em uma tabela, usando foreach-->
                <tr>
                <td>{{$contato->id}}</td>
                <td>{{$contato->name}}</td>
                <td>{{$contato->email}}</td>
                <td>{{$contato->phone}}</td>
                <td><a href="/Contacts/{{$contato->id}}/edit"><button class="btn btn-primary" type="submit">Editar</button></a></td>
                <td><a href="/Contacts/{{$contato->id}}"><button class="btn btn-danger " type="submit">Excluir</button></a></td>
                <td></td>

                </tr>
                @endforeach
                
            
        </tbody>
    </table>


    <p><a href="/Contacts/create">Cadastrar nova categoria</a></p>
@endsection

@section('scripts')

    
    <script src="/js/magica.js"></script>
@endsection
