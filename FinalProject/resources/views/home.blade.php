@extends('layouts.index')

@section('title', 'Home')

@section('content')
    @extends('layouts.nav')
    <div class="container-fluid">
        <div id="imagenInicio" class="row">
            <div class="col padre text-center">
                <img class="img-fluid" src="{{ URL::asset('images/imagenInicio1.png') }}" alt="ImageStart">
                <h1 class="card-title h1">La solución para la limpieza de cualquier superficie</h1>
            </div>
        </div>

    </div>
@endsection


@extends('layouts.footer')
