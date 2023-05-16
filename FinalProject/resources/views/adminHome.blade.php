@extends('layouts.index')
@section('title', 'Admin Home')
@extends('layouts.nav')
@section('content')

    <div class="container-fluid">
        <!--Esto sirve para utilizar los parametros que pasemos desde php si quisieramos usar algun parametro en
                    nuestro componente blade hay que añadirle en el componente : antes de la variable--->
        {{-- @php
            $color = 'primary';
        @endphp
        <x-alert :color="$color" class="mb-5">
            Esto es una prueba
        </x-alert>

        <x-alert color="warning" class="pt-5">
            Esto es una prueba
        </x-alert> --}}


        <div>@livewire('show-employee')</div>
    </div>

    </div>

@endsection
@extends('layouts.footer')
