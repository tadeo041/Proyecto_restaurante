<!--x-guest-layout-->
@extends('layouts.master')  <!--a donde va la seccion este caso al archivo master-->
@section('register')<!--nombre la seccion-->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="container2">
                <div class="row aling-items-center">
                    <div class="col-md-6 d-flex align-items-center justify-content-center  animate__animated animate__fadeInDown">
                        <img src="images/Platillo1.jpg" alt="imagen de la experiencia del registro" class="exp-re">

                    </div>

                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center animate__animated animate__flipInX ">
                        <!--logo de chefsi-->
                        <img class="imagen2" src="images/Imagen.png" alt="">
                        <!-- Name -->
                            <H1 class="H4 Regist">Registrate</H1>
                        <div class="">
                            <x-input-label for="name" :value="__('')" />
                            <input id="name" class="block mt-1 w-full Input-name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nombre" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('')" />
                            <x-text-input id="email" class="block mt-1 w-full Input-email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Correo electronico" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('')" />

                            <x-text-input id="password" class="block mt-1 w-full Input-pass"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password"
                                            placeholder="Contraseña" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full Input-Cpass"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirrmar contraseña" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <!--boton-->
                            <x-primary-button class="ms-4 flex-column btn btn-lg btn-danger Reg">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection <!--final de la seccion-->
<!--/x-guest-layout-->
