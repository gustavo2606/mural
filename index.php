<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>mural</title>
</head>

<body>
    <?php
    $servidor = 'localhost';
    $bd = 'bd_mural';
    $usuario = 'root';
    $senha = '';

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

    if (!$conexao) {
        die("deu ruim" . mysqli_connect_error());
    }
    ?>

    <img src="img/logo01.png" alt="" class="logo01">
    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Login</h2>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary "   style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"> Entrar</button>
                </div>
            </form>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
            </script>

</body>

</html>