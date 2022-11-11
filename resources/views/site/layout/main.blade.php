<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Estoque - @yield('titulo')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary" id="navbar-container">
        <div class="container-fluid">  
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <img src="/img/Outlook_cid_image0.png" alt="" id="img-logo">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="links-navbar">
                      
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('site.login') }}">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.register') }}">Cadastrar</a>
                    </li>
                    
                    
                </ul>
                <!--<form class="d-flex" role="search" action="/home" method="GET" name="search">
                    <input id="input-search" class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
                    <button id="button-search" class="btn btn-outline-light" type="submit"><ion-icon name="search-outline"><ion-icon>Procurar</button>
                </form>-->
            </div>
        </div>
    </nav><!-- Fim Navbar -->

  <div class="card" style="background-color: black; width: 500px; height: 200px; border-radius: 20px; margin-top: 30px; margin-left: 100px">
    <h2 style="color: white; padding-left: 50px; padding-top: 30px">Super Controle de Estoque</h2>

    <p style="padding-left: 70px">Sistema desenvolvido para facilitar <br> a sua vida e organização do <br> seu negócio.</p>
  </div>


    
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>