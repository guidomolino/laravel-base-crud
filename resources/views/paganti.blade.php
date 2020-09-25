@extends('layouts.main-layout')
@section('content')
  <ul>
    <h1>Lista utenti paganti:</h1>
    @foreach ($paganti as $pagante)
      <li>
        {{ $pagante -> name }}
        {{ $pagante -> lastname }}
      </li>
    @endforeach
  </ul>
@endsection
