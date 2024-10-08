@extends('layout')
@section('content')
<body style="background-image: url('assets/fundo.jpg'); background-size: cover; background-position: center; margin: 0; height: 100vh;">

<h1 class="text-center"></h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('lista-morador') }}">
                @csrf
                <div class="mb-3 text-center">
                    <label for="inputMorador" class="form-label fw-bolder">Digite o Morador</label>
                    <input type="text" class="form-control" id="inputMorador" name="morador" required>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Rg</th>
                        <th scope="col">Apartamento</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($registrosMorador as $morador) <!-- Use a variável 'morador' -->
                    <tr>
                        <th scope="row">{{ $morador->idMorador }}</th>
                        <td>{{ $morador->nomeMorador }}</td>
                        <td>{{ $morador->cpfMorador }}</td>
                        <td>{{ $morador->rgMorador }}</td>
                        <td>{{ $morador->aptoMorador }}</td>
                        <td>{{ $morador->telefoneMorador }}</td>
                        <td>{{ $morador->emailMorador }}</td>
                        <td>
                            <a href="{{ route('show-altera-morador', $morador->idMorador) }}"> <!-- Corrigido para usar 'morador' -->
                                <button type="button" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5"/>
                                    </svg>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('apaga-morador', $morador->idMorador) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
