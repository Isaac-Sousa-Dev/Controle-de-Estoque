<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Todos - Notebooks</title>
</head>
<body style="background: url(/img/fundo-computador.png);
background-size: cover;">
    
    <div class="btn-voltar-index">
        <a class="link-voltar-index" href="{{ route('app.dashboard') }}"><ion-icon class="icon-link-index" name="arrow-back-outline"></ion-icon></a>
    </div>
    <div class="container">
        <div class="title-index">
            <h1 class="h1-index">TODOS NOTEBOOKS</h1>
        </div>
        <div class="btn-create-index" style="">
            <a href="{{ route('app.create.notebook') }}" class="btn btn-success"><ion-icon name="add-outline" class="icon-create-index"></ion-icon></a>
        </div>
        <table class="table table-hover">
            <thead class="thead-index">
                <tr>
                    <th class="th-index">id</th>
                    <th class="th-index">Nome</th>
                    <th class="th-index">Patrimonio</th>
                    <th class="th-index">Serie</th>
                    <th class="th-index">Local</th>
                    <th class="th-index">Responssavel</th>
                    <th class="th-action-index">Ações</th>
                </tr>
            </thead>
            <tbody class="tbody-index">
                @foreach ($notebooks as $notebook)
                    <tr>
                        <td>{{ $notebook->id }} </td>
                        <td>{{ $notebook->NomeNotebook }}</td>
                        <td>{{ $notebook->PatrimonioNotebook }}</td>
                        <td>{{ $notebook->SerieNotebook }}</td>
                        <td>{{ $notebook->LocalNotebook }}</td>
                        <td>{{ $notebook->ResponsavelNotebook }}</td>
                        <td>
                            <div>
                                <div class="btn-group">
                                     <a class="btn btn-warning" href="/app/system/notebook/edit{{ $notebook->id }}"><ion-icon name="create-outline"><ion-icon>Editar</a>
                                </div>
                                <div class="btn-group">
                                     <form action="/app/system/notebook/delete{{ $notebook->id }}" method="POST">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn btn-danger delete-btn" onclick="DeletarComputador()"><ion-icon name="trash-outline"><ion-icon>Deletar</button>
                                     </form>
                                </div>
                                <div class="btn-group">
                                     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><ion-icon name="information-outline"></ion-icon></button>
                                </div>
                            </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(32, 31, 31)">
              <button style="color: white" type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">{{ $notebook->NomeNotebook }}</h4>
            </div>
            <div class="modal-body">
                
                    <p class="p-modal-index"><span class="span-modal-index">Patrimônio: {{ $notebook->PatrimonioNotebook }}</span></p>
                    <p class="p-modal-index"><span class="span-modal-index">Local: {{ $notebook->LocalNotebook }}</span></p>
                    <p class="p-modal-index"><span class="span-modal-index">Responsável: {{ $notebook->ResponsavelNotebook }}</span></p>
                    <p class="p-modal-index"><span class="span-modal-index">Data e Hora: {{ $notebook->created_at }}</span></p>
                    <p class="p-modal-index"><span class="span-modal-index">Última atualização: {{ $notebook->updated_at }}</span></p>
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html> 