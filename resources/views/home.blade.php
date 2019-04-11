@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página de Inicio</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <div class="card-content">


                            </div>
                        </div>
                    @endif

                    ¡Has ingresado correctamente {{ auth()->user()->name}}!
                    <nav class="level">
                                    <div>
                                      <p class="heading">Notas de Entrada</p>

                                        <img class="" src="{{asset('incoming_mail.png')}}" alt="">

                                    </div>
                                </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
