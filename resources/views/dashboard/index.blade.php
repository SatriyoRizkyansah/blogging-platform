@extends('dashboard\layouts\main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-itens-center pt-3 pb-2 mb-3 border-bottom min-vh-100">
  <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>
    
@endsection