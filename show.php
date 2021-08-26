<?php
session_start();
if(!$_SESSION) {
    header("Location: login.php");
}
session_regenerate_id();
?>

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
    <?php    
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
    $stmt = $pdo->prepare("SELECT * FROM teste");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    } catch (Exception $e) {
        "Erro: ".$e->getMessage();
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php 
                    echo"Bem-vindo <b>" . $_SESSION['user'] . "</b>!";
                ?>
                <a href="logout.php">Sair</a>
                <p class="fw-bold fs-1">Lista</p>
                <?php foreach($result as $items) { ?>
                <hr>
                <ul class="list-unstyled" id="lista">
                    <li class="mb-4"><strong>Título: </strong><?php echo $items->title ?></li>
                    <li class="mb-4"><strong>Descrição: </strong><?php echo $items->body ?></li>
                    <li>
                        <form method="GET" id="deleteData" class="mb-4">
                            <input type="text" name="id" value="<?php echo $items->id ?>" hidden />
                            <input type="submit" value="Deletar" />
                        </form>
                        <a
                            href="edit.php?id=<?php echo $items->id ?>&title=<?php echo $items->title ?>&body=<?php echo trim($items->body) ?>">Editar</a>
                    </li>
                </ul>
                <?php } ?>
                <a href="index.php">Acessar criação de posts</a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script>
    $(document).on('submit', '#deleteData', function(e) {
        e.preventDefault();

        let id = $("#id").val();

        $.ajax({
            method: 'GET',
            url: 'delete.php?id=' + id,
            data: $(this).serialize(),
            success: function(response) {
                console.log("Excluído com sucesso!");
            }
        })
    })
    </script>
</body>

</html>