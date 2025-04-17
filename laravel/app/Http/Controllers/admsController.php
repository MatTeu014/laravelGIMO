<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admsModel;

class admsController extends Controller{
    
    public function index(){
        
        $dados=admsModel::all(); //todos os dados do banco
        return view('')->With('dados',$dados);

    }

    public function admsCadastrar(Request $request){

        $email = $request->input('email');

        // Verifica se o e-mail já está cadastrado
        $emailExistente = admsModel::where('email', $email)->first();
        if ($emailExistente) {
            return redirect('admCadastro')->with('failed', 'E-mail já cadastrado! Use outro E-mail');
        }
    
        // Inserir Dados
        $model = new admsModel();
        $model->nome = $request->input('nome');
        $model->sobrenome = $request->input('sobrenome');
        $model->email = $email;
        $model->senha = $request->input('senha');
        $model->idade = $request->input('idade');
        $model->situacao = "Ativo";
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('admCadastro')->with('success', 'Administrador cadastrado com sucesso!');
    }

    public function admsLogin(Request $request){
        $email = $request->input('email');
        $senha = $request->input('senha');
        
        // Buscar o funcionário pelo nome
     
        
        // Verificar se o funcionário existe e a senha está correta
        if ($adms=admsModel::where('email', $email)->where('senha', $senha)->first()) {
    
            // Armazenar os dados do funcionário na sessão
            session(['adms' => $adms]);
    
            // Redirecionar para a página homeLogado
            return redirect('admHome');
        } else {
            // Login falhou
            return redirect('admLogin')->with('failed', 'E-mail ou senha inválido');
        }

    }

    public function admsPerfil(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('adms')) {
            return redirect()->route('admPerfil'); // Redireciona se não estiver logado
        }
        
        $adms = session('adms'); // Recupera os dados do funcionário da sessão
        return view('paginas.admPerfil', compact('adms')); // Passa os dados para a view
    }

    public function admsConsultar(){
        $ids = usuariosModel::all();
        return view('', compact('ids'));
    }//fim do consultar
    
    public function admsEditar($id){
        $dado = usuariosModel::findOrFail($id);
        return view('', compact('dado'));
    }//fim do editar

    public function admsAtualizar(Request $request, $id){
        usuariosModel::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do atualizar

    public function admsExcluir(Request $request,$id){
        usuariosModel::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }

}//fim da classe