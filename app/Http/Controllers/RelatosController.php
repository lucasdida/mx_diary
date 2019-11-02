<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relatos;

class RelatosController extends Controller
{

    public function index()
    {
        return view('cadastrar_relatos');
    }

    public function store(Request $request)
    {

        $relato = new Relatos();

        $relato->nome = $request->input('nome');
        $relato->sobrenome = $request->input('sobrenome');
        $relato->dt_nascimento = $request->input('dt_nascimento');
        $relato->telefone = $request->input('telefone');
        $relato->cep = $request->input('cep');
        $relato->uf = $request->input('uf');
        $relato->logradouro = $request->input('logradouro');
        $relato->nr_logradouro = $request->input('nr_logradouro');
        $relato->bairro = $request->input('bairro');
        $relato->localidade = $request->input('localidade');
        $relato->biografia = $request->input('biografia');
    
        $relato->save();
    }


    public function show()
    {
        $relatos = Relatos::all();
        return view('relatos', compact('relatos'));
    }

  
    public function edit($id)
    {
        $relato = Relatos::find($id);
        if(isset($relato)) {
            return view('editarrelato', compact('relato'));
        }
        return redirect('/relatos');
    }

 
    public function update(Request $request, $id)
    {
        $relato = Relatos::find($id);
        if(isset($relato)) {
            $relato->nome = $request->input('nome');
            $relato->sobrenome = $request->input('sobrenome');
            $relato->dt_nascimento = $request->input('dt_nascimento');
            $relato->telefone = $request->input('telefone');
            $relato->cep = $request->input('cep');
            $relato->uf = $request->input('uf');
            $relato->logradouro = $request->input('logradouro');
            $relato->nr_logradouro = $request->input('nr_logradouro');
            $relato->bairro = $request->input('bairro');
            $relato->localidade = $request->input('localidade');
            $relato->biografia = $request->input('biografia');

            $relato->save();
        }
        return redirect('/relatos');
    }

    public function destroy($id)
    {
        $relato = Relatos::find($id);
        if (isset($relato)) {
            $relato->delete();
            return redirect('/relatos');
        }
        
        return redirect('/relatos');
    }
}
