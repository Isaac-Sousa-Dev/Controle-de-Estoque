@extends('site.layout.main')

@section('titulo', 'Equipamentos')
@section('content')

<div class="">
  <div class="card-group">
    <div class="card text-center" id="cadastro-container">
      <div class="card-header">
        Cadastro
      </div>
      <div class="card-body">
        <h5 class="card-title">Equipamentos</h5>
        <p class="card-text">Escolha o equipamento que você deseja cadastrar.</p>
        <a href="/monitor/create" class="btn btn-success">Monitor</a>
        <a href="/computador/create" class="btn btn-success">Computador</a>
        <a href="/notebook/create" class="btn btn-success">Notebook</a>
      </div>
      <div class="card-footer text-muted">
        6 days set
      </div>
    </div>
    <div class="card text-center" id="cadastro-container">
      <div class="card-header">
        Cadastro
      </div>
      <div class="card-body">
        <h5 class="card-title">Periféricos</h5>
        <p class="card-text">Escolha o periférico que você deseja cadastrar.</p>
        <a href="#" class="btn btn-success">Teclado</a>
        <a href="#" class="btn btn-success">Toner</a>
        <a href="#" class="btn btn-success">Mouse</a>
      </div>
      <div class="card-footer text-muted">
      6 days set
      </div>
    </div>
    <div class="card text-center" id="cadastro-container">
      <div class="card-header">
        Mapeamento
      </div>
      <div class="card-body">
        <h5 class="card-title">Impressoras</h5>
        <p class="card-text">Mapeamento e cadastro de Impressoras.</p>
        <a href="#" class="btn btn-success">Cadastrar</a>
        <a href="#" class="btn btn-success">Localizar</a>
      </div>
      <div class="card-footer text-muted">
        6 days set
      </div>
  </div>
  </div>
</div>

@endsection