@extends('layout.main')

@section('title')
    Home
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column mt-5">
        <a class="btn btn-danger p-5 mt-5 fw-bold fs-2 " href="{{ route('trains') }}" role="button">VISUALIZZA
            TRENI DISPONIBILI</a>

    </div>
@endsection
