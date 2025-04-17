<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuariosModel;


class usuariosController extends Controller{
    
    public function index(){
        
        $dados=usuariosModel::all(); //todos os dados do banco
        return view('paginas.index')->With('dados',$dados);

    }

    public function usuariosCadastrar(Request $request){

        $email = $request->input('email');

        // Verifica se o e-mail já está cadastrado
        $emailExistente = usuariosModel::where('email', $email)->first();
        if ($emailExistente) {
            return redirect('usuarioCadastro')->with('failed', 'E-mail já cadastrado! Use outro E-mail');
        }

        // Inserir Dados
        $model = new usuariosModel();
        $model->nome = $request->input('nome');
        $model->sobrenome = $request->input('sobrenome');
        $model->email = $email;
        $model->senha = $request->input('senha');
        $model->idade = $request->input('idade');
        $model->escola = $request->input('escola');
        $model->serie = $request->input('serie');
        $model->perfil = $request->input('perfil');
        $model->situacao = "Ativo";
    
        // Guardar os dados no banco
        $model->save();
    
        return redirect('usuarioCadastro')->with('success', 'Usuário cadastrado com sucesso!');
    }//fim  
    
    
    public function consultar(){
        $ids = usuariosModel::all();
        return view('paginas.consultar', compact('ids'));
    }//fim do consultar
    
    public function editar($id){
        $dado = usuariosModel::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do editar

    public function atualizar(Request $request, $id){
        usuariosModel::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do atualizar

    public function excluir(Request $request,$id){
        usuariosModel::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }

    // Processa o login manualmente
    public function usuariosLogin(Request $request){
        $email = $request->input('email');
        $senha = $request->input('senha');
        
        // Buscar o funcionário pelo nome
     
        
        // Verificar se o funcionário existe e a senha está correta
        if ($usuarios=usuariosModel::where('email', $email)->where('senha', $senha)->first()) {
    
            // Armazenar os dados do funcionário na sessão
            session(['usuarios' => $usuarios]);
    
            // Redirecionar para a página homeLogado
            return redirect('usuarioHome');
        } else {
            // Login falhou
            return redirect('usuarioLogin')->with('failed', 'E-mail ou senha inválido');
        }

    }


    public function usuarioPerfil(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {
            return redirect()->route('usuarioPerfil'); // Redireciona se não estiver logado
        }
        
        $usuarios = session('usuarios'); // Recupera os dados do funcionário da sessão
        return view('paginas.usuarioPerfil', compact('usuarios')); // Passa os dados para a view
    }

    public function usuarioEditar(){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {
        }

        // Recupera o funcionário da sessão
        $usuarios = session('usuarios');

        // Exibe o formulário de edição, passando os dados do funcionário
        return view('paginas.usuarioEditarPerfil', compact('usuarios'));
    }

    public function usuarioAtualizar(Request $request){
        // Verifica se o funcionário está logado na sessão
        if (!session()->has('usuarios')) {

        }

        // Validação dos dados recebidos
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string',
            'email' => 'required|string',
            'senha' => 'required|string',
            'idade' => 'required|string',
            'escola' => 'required|string',
            'serie' => 'required|string',
            'perfil' => 'required|string',
        ]);

        // Recupera os dados do funcionário da sessão
        $usuarios = session('usuarios');

        // Atualiza as informações do funcionário
        $usuarios->update([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'senha' => $request->senha,
            'idade' => $request->idade,
            'escola' => $request->escola,
            'serie' => $request->serie,
            'perfil' => $request->perfil,
        ]);

        // Atualiza a sessão com os novos dados do funcionário
        session(['usuarios' => $usuarios]);

        // Redireciona para a página de homeLogado ou outra página que desejar
        return redirect()->route('usuarioperfil');
    }

    
}//fim da classe