<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body class="bg-dark">
    <div class="container" style="padding-top:120px;">
        <div class="row justify-content-center">
            <div class="col-4 pt-5 bg-light rounded shadow p-5">
                <form action="valida-login.php" method="POST" class="d-flex flex-column mb-3">
                    <div class="fs-2 text-center fw-bold text-dark mb-4">LOGIN</div>
                    <?php if(isset($_GET['logoffSucesso'])) { ?>
                    <div class="bg-danger rounded p-2 text-center text-white">
                        <strong>Você deslogou com sucesso!</strong>
                    </div>
                    <?php } ?>
                    <label for="user"> User
                        <input type="text" name="user" id="user" class="form-control" />
                    </label>
                    <label for="password"> Password
                        <input type="password" name="password" id="password" class="form-control" />
                    </label>
                    <input type="submit" class="btn btn-primary mt-5 fw-bold" id="submit" />
                </form>
                <a href="registro.php" class="btn btn-primary w-100 fw-bold">Registrar</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>