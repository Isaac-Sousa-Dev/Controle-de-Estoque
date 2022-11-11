<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <body style="background: url(/img/controle-de-estoque.jpg);
     background-size: cover;">
      <div class="btn-voltar-login" style="padding-left: 30px; padding-top: 15px; ">
        <a class="link-voltar-login" href="/home" style="width: 50px"><ion-icon class="icon-link-index" name="arrow-back-outline" style="color: white;"></ion-icon></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 30px">
            <div class="card border-0 shadow rounded-3 my-5" style="background-color: rgb(171, 190, 157)">
              <div class="card-body p-4 p-sm-5">
                <img src="/img/Outlook_cid_image0.png" alt="" style="padding: 10px; margin-left: 80px">
                <h5 class="card-title text-center mb-5 fw-light fs-5" style="color: rgb(13, 13, 13)">FAÇA SEU CADASTRO</h5>
                <form method="POST">
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="e-mail" required>
                    <label for="floatingInput">Novo Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" required>
                    <label for="floatingPassword">Nova Senha</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" required>
                    <label for="floatingPassword">Confirmar Senha</label>
                  </div>

                  <div class="d-grid">
                    <button class="btn btn-dark btn-login text-uppercase fw-bold" type="submit">Sig
                      In</button>
                  </div>
          
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>