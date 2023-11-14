<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEFSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


</head>
<body>
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center animate__animated animate__fadeInDown Cont-Image">
                    <img class="imagen" src="images/Imagen.png" alt="">
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center animate__animated animate__fadeIn Cont-Text">
                    <h3 class="h1 Welcome">Bienvenido</h3>
                    <br>
                    <h3 class="h1 Iniciar">Iniciar Sesion</h3>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="text" placeholder="Correo electronico" name="email" class="User-input">
                        <br>
                        <br>
                        <input type="password" placeholder="Contraseña" name="password" class="Password-input">
                        <a class="rec" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto boton">
                            <button class="btn btn-lg btn-danger rounded-pill" type="submit">Iniciar sesion</button>
                        </div>
                    </form>
                    <a class="C-acount" href="{{ route('register') }}">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
