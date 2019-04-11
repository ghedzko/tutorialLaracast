@extends('layout')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Modificar Nota
      </h1>
    </div>
  </div>
</section>
<section class="hero is-clearfix">
<form method="POST" action="/notas/{{ $nota->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="title">Número de Nota</label>

            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('numero') ? 'is-danger' : '' }}"
                    name="numero"
                    value="{{ $nota->numero}}"
                    required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Asunto</label>

            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('asunto') ? 'is-danger' : '' }}"
                    name="asunto"
                    value="{{ $nota->asunto }}"
                    required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="nombre">Descripción</label>

            <div class="control">
                <textarea
                    name="descripcion"
                    class="textarea {{ $errors->has('descripcion') ? 'is-danger' : '' }}"
                    required>
                    {{ $nota->descripcion }}
                </textarea>
            </div>
        </div>
        <div class="field">
            <label class="label" for="title">Fecha</label>

            <div class="control">
                <input
                    type="date"
                    class="input {{ $errors->has('fecha') ? 'is-danger' : '' }}"
                    name="fecha"
                    value="{{ $nota->fecha }}"
                    required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Actualizar Nota</button>
            </div>
        </div>

        @include ('errors')
    </form>
</section>


@endsection