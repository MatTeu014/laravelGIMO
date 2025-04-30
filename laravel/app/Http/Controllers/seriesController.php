<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seriesModel;

class seriesController extends Controller{
    
    public function seriesCadastrar(Request $request){

        $nome = $request->input('nome');

        // Verifica se o e-mail já está cadastrado
        $nomeExistente = seriesModel::where('nome', $nome)->first();
        if ($nomeExistente) {
            return redirect('escolaCadastroSeries')->with('failed', 'Série já cadastrada!');
        }
        
        $escolas = session('id');

        // Inserir Dados
        $model = new seriesModel();
        $model->nome = $request->input('nome');
        $model->idEscolaFK = $escolas;
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('escolaCadastroSeries')->with('success', 'Série cadastrada com sucesso!');
    }

}//fim da classe