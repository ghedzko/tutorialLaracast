@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar su dirección de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo enlace de verificación ha sido enviado a su correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar verificar su correo electrónico para checkear el enlace de verificación.') }}
                    {{ __('Si no recibe el email') }}, <a href="{{ route('verification.resend') }}">{{ __('haga clic aquí') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
