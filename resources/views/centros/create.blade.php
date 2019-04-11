@extends('layout')

@section('content')
    <h1 class="title">Crear un nuevo Centro de Formación Profesional</h1>

    <form method="POST" action="/centros">
        @csrf

        <div class="field">
            <label class="label" for="title">Número de Centro</label>

            <div class="control">
                <input
                    type="number"
                    class="input {{ $errors->has('numero') ? 'is-danger' : '' }}"
                    name="numero"
                    value="{{ old('numero') }}"
                    required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="nombre">Nombre del Centro</label>

            <div class="control">
                <textarea
                    name="nombre"
                    class="textarea {{ $errors->has('nombre') ? 'is-danger' : '' }}"
                    required>
                    {{ old('nombre') }}
                </textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Crear Centro</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection