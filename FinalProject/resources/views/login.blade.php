@extends('layouts.index')
@section('title', 'Reg')
@section('content')
    @extends('layouts.nav')
    <div class="container">
        <section class="h-100 gradient-form d-flex justify-content-center">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="text-black">
                            <div class="row g-0 d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center ">
                                            <img src="{{ URL::asset('logos/logo.jpg') }}" style="width: 185px;"
                                                alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Iniciar sesión</h4>
                                        </div>

                                        <form method="post" action="{{ route('loginSession') }}">
                                            @csrf
                                            <p>Por favor, ingrese a su cuenta</p>
                                            <label class="form-label" for="email">Email</label>
                                            <div class="form-outline mb-4">
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="email" name="email"
                                                        class="form-control" />
                                                    @error('email')
                                                        <span class="text-danger"><small>{{ $message }}</small></span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control" />
                                                @error('password')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror

                                            </div>
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember">
                                                <label class="form-check-label" for="remember">
                                                    Mantener sesion iniciada
                                                </label>
                                            </div>
                                            <div class="text-center pt-1  pb-1 ">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Login</button>
                                            </div>
                                            <div class="text-center mb-5">
                                                <a class="text-muted" href="#!">He olvidado mi contraseña</a>

                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">¿No tienes cuenta?</p>
                                                <a class="btn btn-outline-danger"
                                                    href="{{ route('register') }}">Registrate</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
@extends('layouts.footer')
