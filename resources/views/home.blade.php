@extends('layout.main')

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-column ">
        <a class="btn btn-danger p-5 mt-5" href="{{ route('trains') }}" role="button">Clicca qui per visualizzare i
            treni disponibili</a>

    </div>
@endsection
