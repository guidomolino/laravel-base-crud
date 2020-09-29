@extends('layouts.main-layout')
@section('config')
  <h1>Configurazioni</h1>
  <ul>
    @foreach ($configurazioni as $configurazione)
      <li>
        {{ $configurazione -> title }}
      </li>
    @endforeach
  </ul>
@endsection
