@extends('site.layout.main')

@section('titulo', 'Sobre Monitor')
@section('content')

    <div class="card" id="show-container">
        <div class="card-header">
            {{ $monitor->NomeMonitor }}
        </div>
        <ul class="list-group list-group-flush" id="show-container-ul">
            <li class="list-group-item"><span>Patrimônio: </span>{{ $monitor->PatrimonioMonitor }}</li>
            <li class="list-group-item"><span>Série: </span>{{ $monitor->SerieMonitor }}</li>
            <li class="list-group-item"><span>Local: </span>{{ $monitor->LocalMonitor }}</li>
            <li class="list-group-item"><span>Responsável: </span>{{ $monitor->ResponsavelMonitor }}</li>
        </ul>
        <button class="btn btn-warning" id="show-container-button">Editar</button>
        
    </div>

@endsection