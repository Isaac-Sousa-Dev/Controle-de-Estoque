@extends('site.layout.main')

@section('titulo', 'Sobre Notebook')
@section('content')

    <div class="card" id="show-container">
        <div class="card-header">
            {{ $notebook->NomeNotebook }}
        </div>
        <ul class="list-group list-group-flush" id="show-container-ul">
            <li class="list-group-item"><span>Patrimônio: </span>{{ $notebook->PatrimonioNotebook }}</li>
            <li class="list-group-item"><span>Série: </span>{{ $notebook->SerieNotebook }}</li>
            <li class="list-group-item"><span>Local: </span>{{ $notebook->LocalNotebook }}</li>
            <li class="list-group-item"><span>Responsável: </span>{{ $notebook->ResponsavelNotebook }}</li>
        </ul>
        <button class="btn btn-warning" id="show-container-button">Editar</button>
        
    </div>

@endsection