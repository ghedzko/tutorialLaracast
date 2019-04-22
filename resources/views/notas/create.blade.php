@extends('layout')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Crear nueva Nota {{ $hoy }}
      </h1>
    </div>
  </div>


</section>
<section class="hero is-clearfix">
<form method="POST" action="/notas" enctype="multipart/form-data">
        @csrf

        <div class="field">
            <label class="label" for="title">Número de Nota</label>

            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('numero') ? 'is-danger' : '' }}"
                    name="numero"
                    value="{{  $max_nota }}"
                    required
                    tabindex="1" >
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Asunto</label>

            <div class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('asunto') ? 'is-danger' : '' }}"
                    name="asunto"
                    value="{{ old('asunto') }}"
                    required
                    tabindex="2" 
                    select>
            </div>
        </div>
            <div class="select">
              <select name="contacto_id" 
                    class="form-control"
                    value="{{ old('contacto_id') }}"
                    required
                    tabindex="3" >
                @foreach($contactos as $contacto)
                <option value="{{ $contacto->id }}">{{ $contacto->nombre }} </option>
                <!-- <option>{{ $contacto->nombre }}</option> -->
                @endforeach
              </select>
            </div>

        <div class="field">
            <label class="label" for="nombre">Descripción</label>

            <div class="control">
                <textarea
                    name="descripcion"
                    class="textarea {{ $errors->has('nombre') ? 'is-danger' : '' }}"
                    required>
                    {{ old('descripcion') }}
                </textarea>
            </div>
        </div>
        <div class="field">
            <label class="label" for="title">Fecha</label>

            <div class="control">
                <input
                    type="date"
                    dateFormat="DD/MM/YYYY"
                    showTodayButton="true"
                    startDate="{{ today()}}"
                    class="input {{ $errors->has('fecha') ? 'is-danger' : '' }}"
                    name="fecha"
                    value={{ $hoy }}
                    required>
            </div>
        </div>
            <div class="control">
              <input 
                type="file" 
                class="input is-rounded"
                value="{{ old('adjunto') }}" 
                name="adjunto">
            </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Crear Nota</button>
            </div>
            <br>
        </div>

        @include ('errors')
    </form>
</section>


@endsection