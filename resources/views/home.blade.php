@extends('adminlte::page')

@section('title', 'Mi blog')

@section('content_header')
    <h1>Admin - blog</h1>
@stop

@section('content')
    <p>Bienvenido al panel de Administrador.</p>
@stop


<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Hola mundo') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->
