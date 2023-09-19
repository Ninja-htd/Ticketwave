@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifier votre email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyer à votre email.') }}
                        </div>
                    @endif

                    {{ __('Avant procceder veuillez consulter le lien dans votre email.') }}
                    {{ __('Si vous n'avez pas réçu d'email ') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Ciquez ici pour une autre demande') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
