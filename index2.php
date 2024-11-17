<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body style="background-image: url(img/1.png); background-size:1300px;background-repeat:no-repeat;">
    <header>
    </header>
    <main>
        <div style="margin-left: 350px; margin-top: 200px; border: 2px solid black; width:310px; text-align: center;height:250px; border-radius: 20px; background-color:cadetblue">
            <form name="login">
                <div class="mb-3">
                    <label for="" class="form-label">USUARIO</label>
                    <input
                        type="text"
                        name="usuario"
                        id=""
                        class="form-control"
                        placeholder=""
                        style="width: 250px;margin-left: 20px;"
                        value="" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CLAVE</label>
                    <input
                        type="text"
                        name="password"
                        id=""
                        class="form-control"
                        placeholder=""
                        style="width: 250px;margin-left: 20px;"
                        value="" />
                </div>
                <button value="entrar" type="button" class="btn btn-danger" onclick="Login()">ENTRAR</button>
                <button type="reset" class="btn btn-danger">BORRAR</button><br>
                <a href="">Olvido su clave</a>
            </form>
        </div>

        <script>
            function Login() {
                var usuario = document.login.usuario.value;
                var password = document.login.password.value;
                if (usuario == "carlos" && password == "1234") {
                    window.location = "inicio.php";
                }
                if (usuario == "carlos1" && password == "1234") {
                    window.location = "inicio.php";
                }
            }
        </script>

    </main>
    <footer>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>