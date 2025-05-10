@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verifica il tuo indirizzo E-Mail') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un link di verifica è stato inviato alla tua mail.') }}
                            </div>
                        @endif

                        {{ __('Prima di procedere verifica il link arrivato nella tua mail.') }}
                        {{ __('Se non hai ricevuto la mail') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('Clicca qui per richiedere un nuovo link di conferma') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
