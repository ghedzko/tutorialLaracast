@extends('layout')

@section('content')
<section class="hero is-primary">
	<div id="navbarMenuHeroB" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Examples
            </a>
            <a class="navbar-item">
              Documentation
            </a>
            <span class="navbar-item">
              <a class="button is-info is-inverted">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </div>
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Crear nueva Nota {{ $hoy }}
      </h1>
    </div>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth is-inverted">
      <div class="container">
        <ul>
          <li class="is-active">
            <a>Overview</a>
          </li>
          <li>
            <a>Modifiers</a>
          </li>
          <li>
            <a>Grid</a>
          </li>
          <li>
            <a>Elements</a>
          </li>
          <li>
            <a>Components</a>
          </li>
          <li>
            <a>Layout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>
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
                    value="{{ old('numero') }}"
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
                    value="{{ old('asunto') }}"
                    required>
            </div>
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