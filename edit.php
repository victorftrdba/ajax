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

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <form id="userFormUpdate" method="POST" class="d-flex flex-column">
                    <label for="title"> ID
                        <input type="text" value="<?php echo $_GET['id'] ?>" name="id" id="id" class="form-control"
                            required />
                    </label>
                    <label for="title"> Título
                        <input type="text" name="title" value="<?php echo $_GET['title'] ?>" id="title"
                            class="form-control" required />
                    </label>
                    <label for="body"> Descrição
                        <textarea type="text" name="body" id="body" class="form-control"
                            required><?php echo trim($_GET['body']) ?></textarea>
                    </label>
                    <input type="submit" class="btn btn-primary mt-5" id="submit" />
                </form>
                <a href="show.php">Acessar posts</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {

        $(document).on('submit', '#userFormUpdate', function(e) {
            e.preventDefault();

            let id = $('#id').val();

            $.ajax({
                method: "POST",
                url: "update.php?id=" + id,
                data: $(this).serialize(),
                success: function(response) {
                    $('#title').val('');
                    $('#body').val('');
                }
            });
        });
    });
    </script>
</body>

</html>