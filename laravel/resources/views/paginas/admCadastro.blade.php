<x-layout titulo="Cadastro de Administrador">    

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg" style="background-color: #BDBDBD; padding-top: 20px; padding-bottom: 20px;">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    <!-- LOGO (Imagem responsiva) -->
    <a class="navbar-brand" href="/homeAdm">
      <img src="{{ URL::to('/assets/img/logo_gimo.png') }}" alt="Logo" style="width: 100px; height: auto;">
    </a>

    <!-- BOTÃO ADMINISTRADOR -->
    <form class="d-flex" role="search">
      <a class="btn ms-2"
        style="background-color: white; border: 0px solid black; border-radius: 30px; padding: 6px 18px; font-size: 20px; width: 190px; text-align: center; color: #000000;">ADMINISTRADOR</a>
    </form>

  </div>
</nav>

<!-- Título Cadastro -->
<br>
<h2 class="card-title" style="text-align: center;">Cadastro</h2>
<br>

<div class="card" style="width: 50%; border-color: #BDBDBD; border-width: 2px; margin: auto; border-radius: 30px; text-align: center;">
  <div class="card-body">

    <form action="/loginAdm" method="GET"> {{-- Altere a rota se necessário --}}
    
      <!-- Input Nome -->  
      <h3 style="text-align: center;">Nome:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="nome">Nome</label>
      </div>
      <br>

      <!-- Input Sobrenome -->
      <h3 style="text-align: center;">Sobrenome:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite o sobrenome" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="sobrenome">Sobrenome</label>
      </div>
      <br>

      <!-- Input E-mail -->
      <h3 style="text-align: center;">E-mail:</h3>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="email">E-mail</label>
      </div>
      <br>

      <!-- Input Senha -->
      <h3 style="text-align: center;">Senha:</h3>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="senha" name="senha" placeholder="Digite a senha" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="senha">Senha</label>
      </div>
      <br>

      <!-- Input Idade -->
      <h3 style="text-align: center;">Idade:</h3>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="idade" name="idade" placeholder="Digite a idade" required style="border-style: solid; border-color: #000000; border-width: 2px; border-radius: 26px;">
        <label for="idade">Idade</label>
      </div>
      <br>

      <!-- Botão Cadastrar -->
      <div>
        <button type="submit" class="btn btn-primary" style="background-color: white; color: #000000; border-color: #000000; border-radius: 30px; border-width: 2px; font-weight: bold; font-size: 18px; margin: auto; width: 20%;">Cadastrar</button>
      </div>
      <br>

    </form>

  </div>
</div> 

</x-layout>
