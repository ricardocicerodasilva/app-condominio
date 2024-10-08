@extends('layout')
@section('content')

<body style="background-image: url('assets/fundo.jpg'); background-size: cover; background-position: center; margin: 0; height: 100vh;">

<div class="container mt-5">
        <h2>Cadastrar Morador</h2>
        <form method="post" action="{{route('cadastra-morador')}}">
            @csrf
           
            <div class="form-group">
                <label for="nomeMorador">Nome do Morador:</label>
                <input type="text" class="form-control" id="nomeMorador" name="nomeMorador"  placeholder="Digite o nome do Morador" required>
            </div>
            <div class="form-group">
                <label for="rgMorador">RG do Morador:</label>
                <input type="text" class="form-control" id="rgMorador" name="rgMorador"  placehoder="digite o Rg do Morador"required>
            </div>
            <div class="form-group">
                <label for="cpfMorador">Cpf do Morador:</label>
                <input type="text" class="form-control" id="cpfMorador" name="cpfMorador" placeholder="Digite o cpf do Morador" required>
</div>
            <div class="form-group">
                <label for="aptoMorador">Apartamento do Morador :</label>
                <input type="text" class="form-control" id="aptoMorador" name="aptoMorador" placeholder="Digite o bloco e apartamento  do morador" required>
                </div>
            <div class="form-group">
                <label for="telefoneMorador">telefone do Morador :</label>
                <input type="text" class="form-control" id="telefoneMorador" name="telefoneMorador" placeholder="Digite o telefone do morador" required>
                </div>
                <div class="form-group">
                <label for="emailMorador">email do Morador :</label>
                <input type="text" class="form-control" id="emailMorador" name="emailMorador" placeholder="Digite o email do morador" required>
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary" style="display: block; margin: 0 auto;">Cadastrar Morador</button>

        </form>
    </div>
 
@endsection

 