<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', function () {
    return view('paginas.home');
});

Route::get('sobrenos', function () {
    return view('paginas.sobrenos');
});






//Usuario
Route::get('usuarioLogin', function () {
    return view('paginas.usuarioLogin');
});

Route::get('usuarioCadastro', function () {
    return view('paginas.usuarioCadastro');
});

Route::get('usuarioHome', function () {
    return view('paginas.usuarioHome');
});

Route::get('usuarioPerfil', function () {
    return view('paginas.usuarioPerfil');
});

Route::get('usuarioEsqueceuSenha', function () {
    return view('paginas.usuarioEsqueceuSenha');
});

Route::get('usuarioAlterarSenha', function () {
    return view('paginas.usuarioAlterarSenha');
});

Route::get('usuarioSobrenos', function () {
    return view('paginas.usuarioSobrenos');
});

Route::get('usuarioAtividades', function () {
    return view('paginas.usuarioAtividades');
});

Route::get('usuarioRelatorio', function () {
    return view('paginas.usuarioRelatorio');
});

Route::get('usuarioEditarPerfil', function () {
    return view('paginas.usuarioEditarPerfil');
});

Route::get('usuarioAlfabeto', function () {
    return view('paginas.usuarioAlfabeto');
});

Route::get('usuarioNumeros', function () {
    return view('paginas.usuarioNumeros');
});




//Adm
Route::get('homeAdm', function () {
    return view('paginas.admHome');
});

Route::get('loginAdm', function () {
    return view('paginas.admLogin');
});

Route::get('cadastroAdm', function () {
    return view('paginas.admCadastro');
});

Route::get('sobrenosAdm', function () {
    return view('paginas.admSobrenos');
});

Route::get('admEsqueceuSenha', function () {
    return view('paginas.admEsqueceuSenha');
});

Route::get('admAlterarSenha', function () {
    return view('paginas.admAlterarSenha');
});

Route::get('perfilAdm', function () {
    return view('paginas.admPerfil');
});

Route::get('admEditarPerfil', function () {
    return view('paginas.admEditarPerfil');
});


//Letras

Route::get('letraA', function () {
    return view('paginas/Letras.letraA');
});

Route::get('letraB', function () {
    return view('paginas/Letras.letraB');
});

Route::get('letraC', function () {
    return view('paginas/Letras.letraC');
});

Route::get('letraD', function () {
    return view('paginas/Letras.letraD');
});

Route::get('letraE', function () {
    return view('paginas/Letras.letraE');
});

Route::get('letraF', function () {
    return view('paginas/Letras.letraF');
});

Route::get('letraG', function () {
    return view('paginas/Letras.letraG');
});

Route::get('letraH', function () {
    return view('paginas/Letras.letraH');
});

Route::get('letraI', function () {
    return view('paginas/Letras.letraI');
});

Route::get('letraJ', function () {
    return view('paginas/Letras.letraJ');
});

Route::get('letraK', function () {
    return view('paginas/Letras.letraK');
});

Route::get('letraL', function () {
    return view('paginas/Letras.letraL');
});

Route::get('letraM', function () {
    return view('paginas/Letras.letraM');
});

Route::get('letraN', function () {
    return view('paginas/Letras.letraN');
});

Route::get('letraO', function () {
    return view('paginas/Letras.letraO');
});

Route::get('letraP', function () {
    return view('paginas/Letras.letraP');
});

Route::get('letraQ', function () {
    return view('paginas/Letras.letraQ');
});

Route::get('letraR', function () {
    return view('paginas/Letras.letraR');
});

Route::get('letraS', function () {
    return view('paginas/Letras.letraS');
});

Route::get('letraT', function () {
    return view('paginas/Letras.letraT');
});

Route::get('letraU', function () {
    return view('paginas/Letras.letraU');
});

Route::get('letraV', function () {
    return view('paginas/Letras.letraV');
});

Route::get('letraW', function () {
    return view('paginas/Letras.letraW');
});

Route::get('letraX', function () {
    return view('paginas/Letras.letraX');
});

Route::get('letraY', function () {
    return view('paginas/Letras.letraY');
});

Route::get('letraZ', function () {
    return view('paginas/Letras.letraZ');
});