<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <body style="background: url(/img/fundo-computador.png);
     background-size: cover;">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 0px">
            <div class="card border-0 shadow rounded-3 my-5" style="background-color: rgb(85, 88, 84)">
              <div class="card-body p-4 p-sm-5">
                <img src="/img/Outlook_cid_image0.png" alt="" style="padding: 10px; margin-left: 80px">
                <h5 class="card-title text-center mb-5 fw-light fs-5" style="color: white">EDITAR COMPUTADOR</h5>
                <form method="POST" action="/computador/update/{{ $computador->id }}">
                  @csrf
                  @method('PUT')
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="name@example.com" name="NomeComputador" value="{{ $computador->NomeComputador }}">
                    <label for="floatingInput">Nome Computador</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="int" class="form-control" placeholder="Password" name="PatrimonioComputador" value="{{ $computador->PatrimonioComputador}}">
                    <label for="floatingPassword">Patrimônio</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control"  placeholder="Password" name="ResponsavelComputador" value="{{ $computador->ResponsavelComputador }}">
                    <label for="floatingPassword">Responsável</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Password" name="LocalComputador" value="{{ $computador->LocalComputador }}">
                    <label for="floatingPassword">Setor</label>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Editar
                      </button>
                  </div>
          
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>