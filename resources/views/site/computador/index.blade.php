<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Todos - Computadores</title>
</head>

<body style="background: url(/img/fundo-computador.png);
background-size: cover;">

    <div class="btn-voltar-index">
        <a class="link-voltar-index" href="{{ route('app.dashboard') }}"><ion-icon class="icon-link-index" name="arrow-back-outline"></ion-icon></a>
    </div>
    <div class="container">
        <div class="title-index">
            <h1 class="h1-index">TODOS COMPUTADORES</h1>
        </div>
        <div class="btn-create-index" style="">
            <a href="{{ route('app.create.computador') }}" class="btn btn-success"><ion-icon name="add-outline" class="icon-create-index"></ion-icon></a>
        </div>
        <table class="table table-hover">
            <thead class="thead-index">
                <tr>
                    <th class="th-index">id</th>
                    <th class="th-index">Nome</th>
                    <th class="th-index">Patrimonio</th>
                    <th class="th-index">Local</th>
                    <th class="th-index">Responsavel</th>
                    <th class="th-action-index">Ações</th>
                </tr>
            </thead>
            <tbody class="tbody-index">
                @foreach ($computadors as $computador)
                    <tr>
                        <td>{{ $computador->id }} </td>
                        <td>{{ $computador->NomeComputador }}</td>
                        <td>{{ $computador->PatrimonioComputador }}</td>
                        <td>{{ $computador->LocalComputador }}</td>
                        <td>{{ $computador->ResponsavelComputador }}</td>
                        <td>
                           <div>
                               <div class="btn-group">
                                    <a class="btn btn-warning" href="/app/system/computador/edit{{ $computador->id }}"><ion-icon name="create-outline"><ion-icon>Editar</a>
                               </div>
                               <div class="btn-group">
                                    <form action="/app/system/computador/delete{{ $computador->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-btn" onclick="DeletarComputador()"><ion-icon name="trash-outline"><ion-icon>Deletar</button>
                                    </form>
                               </div>
                               <div class="btn-group">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="informacao({{ $computador }})"><ion-icon name="information-outline"></ion-icon></button>
                               </div>
                           </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: rgb(32, 31, 31)">
            <button style="color: white" type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{{ $computador->NomeComputador }}</h4>
        </div>
        <div class="modal-body">
            
                <p class="p-modal-index"><span class="span-modal-index">Patrimônio: {{ $computador->PatrimonioComputador }}</span></p>
                <p class="p-modal-index"><span class="span-modal-index">Local: {{ $computador->LocalComputador }}</span></p>
                <p class="p-modal-index"><span class="span-modal-index">Responsável: {{ $computador->ResponsavelComputador }}</span></p>
                <p class="p-modal-index"><span class="span-modal-index">Data e Hora: {{ $computador->created_at }}</span></p>
                <p class="p-modal-index"><span class="span-modal-index">Última atualização: {{ $computador->updated_at }}</span></p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
{{-- 
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Nome Computador</label>
                        <input type="text" id="NomeComputador" class="form-control" placeholder="name@example.com" name="NomeComputador">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="floatingPassword">Patrimônio</label>
                        <input type="int" id="PatrimonioComputador" class="form-control" placeholder="Password" name="PatrimonioComputador">
                    </div>

                    <div class="form-floating mb-3">
                        <label for="floatingPassword">Responsável</label>
                        <input type="text" id="ResponsavelComputador" class="form-control" placeholder="Password" name="ResponsavelComputador"> 
                    </div>

                    <div class="form-floating mb-3">
                        <label for="floatingPassword">Setor</label>
                        <input type="text" id="LocalComputador" class="form-control" placeholder="Password" name="LocalComputador">  
                    </div>
                    <br>
                    <div class="d-grid">
                        <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Editar
                        </button>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
--}}
    

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<script type="text/javascript">

    function informacao(data) {
      //let dataJson = JSON.parse( data)
      console.log(data)
      /*document.getElementById('NomeComputador') 
      document.querySelector("[id='NomeComputador']").value = dataJson.NomeComputador;
      document.querySelector("[id='PatrimonioComputador']").value = dataJson.PatrimonioComputador;
      document.querySelector("[id='ResponsavelComputador']").value = dataJson.ResponsavelComputador;
      document.querySelector("[id='LocalComputador']").value = dataJson.LocalComputador;*/
        
    }
</script>

