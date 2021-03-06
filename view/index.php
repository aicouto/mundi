<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Mundi</title>
    <script src="/v2/api.js"></script>
    <script src="/js/main.js"></script>
  </head>
  <body onload="initialize()">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-1">
                <div id="earth_div">
                </div>
            </div>
            <div class="col-md-3">
                <form method="post" action="marcador" class="form">
                    <label for="nome">Nome</label><br>
                    <input class="form-control" type="text" name="nome" id="nome"><br>
                    <label for="lat">Latitude</label><br>
                    <input class="form-control" type="text" name="lat" id="lat"><br>
                    <label for="lon">Longitude</label><br>
                    <input class="form-control" type="text" name="lon" id="lon"><br><br>
                    <button class="btn btn-primary" type="submit">
                        Adicionar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
