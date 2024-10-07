<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\condominio;
use Illuminate\Support\Facades\Redirect;

class CondominioController extends Controller
{
    //para mostrara a tela administrativa

    public function MostrarHome(){
        return View ('homeadm');
    }


// para mostrar tela de cadastro de condominio

public function MostrarCadastroMorador(){
    return View ('cadastra-morador');
}

// para salvar os registros na tabela condominio


public function CadastrarMorador(Request $request){
    $registros = $request->validate([
        'nomeMorador'=>'string|required',
        'cpfMorador'=>'string|required',
        'rgMorador'=>'string|required',
        'aptoMorador'=>'string|required',
        'telefoneMorador'=>'string|required',
        'emailMorador'=>'string|required',
    ]);
    condominio::create($registros);
    return Redirect::route('home-adm');
}

// para apagar os registros da tabela de eventos
public function destroy(condominio $id){
    $id->delete();
    return Redirect::route('home-adm');
    }
    //para alterar os registroa na tabela decondominio

    public function Update(condominio $id, Request $request){
        $registros = $request->validate([
           'nomeMorador'=>'string|required',
        'cpfMorador'=>'string|required',
        'rgMorador'=>'string|required',
        'aptoMorador'=>'string|required',
        'telefoneMorador'=>'string|required',
        'emailMorador'=>'string|required',
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect::route('home-adm');

    }
    // para mostrar somente oscondominio por codigo
    public function MostrarMoradorCodigo(Eventos $id){
        return View('altera-morador',['registrosMorador'=>$id]);
    }

    //para buscar os condominio por nome
    public function MostraMoradorNome(Request $request){
        $registros =condominio::query();
        $registros->when($request->nomeEvento,function($query,$valor){
            $query->where('nomeMorador','like','%'.$valor.'%');
        });
        $todosRegistros=$registros->get();
        return View ('listaMorador',['registrosMorador'=>$todosRegistros]);

    }

}