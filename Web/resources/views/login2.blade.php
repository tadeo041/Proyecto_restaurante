@extends('layouts.master')<!--enlace al archivo master-->
@section('login')<!--nombre la seccion-->
<section>
        <div class="container1">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center animate__animated animate__fadeInDown Cont-Image">
                    <img class="experience" src="images/Platillo1.jpg" alt=""><!--Esta es la imagen del platillo-->
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center animate__animated animate__fadeIn Cont-Text">
                    <img class="imagen" src="images/Imagen.png" alt=""> <!--este es el logo de chefsi-->

                        <h3 class="h1 Welcome">Bienvenido</h3>
                    <br>
                        <h3 class="h1 Iniciar">Iniciar Sesion</h3>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="inputs">
                            <input type="text" placeholder="Correo electronico" name="email" class="User-input">

                            <br>
                            <br>

                            <input type="password" placeholder="Contraseña" name="password" class="Password-input">
                        </div>

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
@endsection<!--final de la seccion-->

