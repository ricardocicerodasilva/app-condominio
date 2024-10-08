<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;
use Illuminate\Support\Facades\Redirect;

class CondominioController extends Controller
{
    //para mostrara a tela administrativa

    public function MostrarHome(){
        return view ('homeadm');
    }


// para mostrar tela de cadastro de condominio

public function MostrarCadastroMorador(){
    return view ('cadastra-morador');
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
    Condominio::create($registros);
    return Redirect::route('home-adm');
}

// para apagar os registros da tabela de eventos
public function destroy(Condominio $id){
    $id->delete();
    return Redirect::route('home-adm');
    }
    //para alterar os registroa na tabela decondominio

    public function Update(Condominio $id, Request $request){
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
    // para mostrar somente os moradores por codigo
    public function MostrarMoradorCodigo(Condominio $id){
        return view('altera-morador',['registrosMorador'=>$id]);
    }

    public function MostraMoradorNome(Request $request) {
        $registros = Condominio::query();
        
        if ($request->filled('morador')) {
            $registros->where('nomeMorador', 'like', '%' . $request->morador . '%');
        }
        
        $todosRegistros = $registros->get();
        return view('lista-morador', ['registrosMorador' => $todosRegistros]);
    }
    
    }
    

    