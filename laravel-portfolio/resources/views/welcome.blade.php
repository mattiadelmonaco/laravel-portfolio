@extends('layouts.app')
@section('content')
    <div class="jumbotron pb-4 bg-light rounded-3">
        <div class="container d-flex align-items-center flex-column">
            <div class="logo_laravel text-center">
                <img src="{{ asset('mdm-backoffice.png') }}" alt="MDM BackOffice Logo" style="width: 200px">
            </div>
            <h1 class="display-5 fw-bold text-center">
                Benvenuto nel tuo Backoffice! <i class="bi bi-box"></i>
            </h1>
            <h2 class="mt-3 mb-4">Alcune scorciatoie utili:</h2>
            <ul class="d-flex gap-4 flex-wrap justify-content-center p-0 pb-5">
                <li class="list-unstyled w-75">
                    <a class="text-decoration-none text-white bg-primary px-3 py-2 rounded text-center d-block fs-5"
                        href="{{ route('projects.index') }}">{{ __('Progetti') }}</a>
                </li>
                <li class="list-unstyled w-75">
                    <a class="text-decoration-none text-white bg-primary px-3 py-2 rounded text-center d-block fs-5"
                        href="{{ route('types.index') }}">{{ __('Tipologie progetti') }}</a>
                </li>
                <li class="list-unstyled w-75">
                    <a class="text-decoration-none text-white bg-primary px-3 py-2 rounded text-center d-block fs-5"
                        href="{{ route('technologies.index') }}">{{ __('Tecnologie conosciute') }}</a>
                </li>
                <li class="list-unstyled w-75">
                    <a class="text-decoration-none text-white bg-primary px-3 py-2 rounded text-center d-block fs-5"
                        href="{{ url('profile') }}">{{ __('Profilo') }}</a>
                </li>
            </ul>

        </div>
    </div>
    @include('partials.footer')
@endsection
