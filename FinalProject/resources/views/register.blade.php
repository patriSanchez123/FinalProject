@extends('layouts.index')
@section('title', 'Register')
@extends('layouts.nav')
@section('content')
    <div class="container">
<!--COMPROBAR SI EXIST--->

        @if(isset($alert)  && $alert)
        <x-alert color="warning" class="pt-5">
            El dni ingresado no se encuentra registrado en nuestra base de datos
        </x-alert>
        @endif
        <section class="h-100 gradient-form d-flex justify-content-center">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div>
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="{{ URL::asset('logos/logo.jpg') }}" style="width: 185px;"
                                                alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">Registro de usuario</h4>
                                        </div>

                                        <form method="post" action="{{ route('validate.register') }}" novalidate >
                                            {{-- Security token so that the user cannot modify the form data --}}
                                            @csrf
                                            <p>Por favor,ingrese sus datos</p>

                                            {{-- condition in the value for when the form is validated and checks if the ID exists in the database, the form data is filled in again in case of a form error --}}
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="name">Nombre de usuario</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    placeholder="Nombre" value="@if(isset($alert)){{$request->name}}@else{{old('name')}}@endif" />
                                                @error('name')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="dni">Dni</label>
                                                <input type="text" id="dni" name="dni" class="form-control"
                                                    placeholder="Dni" value="@if(isset($alert)){{$request->dni}}@else{{old('dni')}}@endif" />
                                                @error('dni')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                                @if(isset($alert)  && $alert)
                                                <span class="text-danger"><small>El dni ingresado no se encuentra en los datos de la empresa</small></span>
                                                @endif
                                            </div>


                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="example@example.com" value="@if(isset($alert)){{$request->email}}@else{{old('email')}} @endif" />
                                                @error('email')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>

                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="pass">Contraseña</label>
                                                <input type="password" id="password" name="password"
                                                placeholder="********"
                                                    class="form-control"/>
                                                @error('password')
                                                    <span class="text-danger"><small>{{ $message }}</small></span>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label for="password-confirm"
                                                    class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation"
                                                    placeholder="********" autocomplete="new-password">
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                    type="submit">Registrarse</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-primary px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Atención</h4>
                                        <p class="small mb-0">Para poder registrarse tiene que estar dado de alta en la empresa, si tiene algun tipo de problema
                                                llame al administrador de la misma.

                                        </p>
                                    </div>
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
