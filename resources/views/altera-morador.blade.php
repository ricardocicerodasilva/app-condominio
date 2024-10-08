@extends('layout')
@section('content')
<body style="background-image: url('assets/fundo.jpg'); background-size: cover; background-position: center; margin: 0; height: 100vh;">

<div class="container mt-5">
        <h2>Alterar registros do Morador</h2>
        <form method="post" action="{{route('altera-morador',$registrosMorador->idMorador)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nomeMorador">Nome do Morador:</label>
                <input type="text" class="form-control" id="nomeMorador" name="nomeMorador" value="{{($registrosMorador->nomeMorador)}}" placeholder="Digite o nome do Morador" required>
            </div>
            <div class="form-group">
                <label for="rgMorador">RG do Morador:</label>
                <input type="text" class="form-control" id="rgMorador" name="rgMorador" value="{{($registrosMorador->rgMorador)}}" placehoder="digite o Rg do Morador"required>
            </div>
            <div class="form-group">
                <label for="cpfMorador">Cpf do Morador:</label>
                <input type="text" class="form-control" id="cpfMorador" name="cpfMorador" value="{{($registrosMorador->cpfMorador)}}"placeholder="Digite o cpf do Morador" required>
</div>
            <div class="form-group">
                <label for="aptoMorador">Apartamento do Morador :</label>
                <input type="text" class="form-control" id="aptoMorador" name="aptoMorador" value="{{($registrosMorador->aptoMorador)}}"placeholder="Digite o bloco e apartamento  do morador" required>
                </div>
            <div class="form-group">
                <label for="telefoneMorador">telefone do Morador :</label>
                <input type="text" class="form-control" id="telefoneMorador" name="telefoneMorador" value="{{($registrosMorador->telefoneMorador)}}"placeholder="Digite o telefone do morador" required>
                </div>
                <div class="form-group">
                <label for="emailMorador">email do Morador :</label>
                <input type="text" class="form-control" id="emailMorador" name="emailMorador" value="{{($registrosMorador->emailMorador)}}"placeholder="Digite o email do morador" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Alterar Morador</button>
        </form>
    </div>
 
@endsection

 