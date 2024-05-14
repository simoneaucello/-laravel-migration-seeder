@extends('layout.main')

@section('content')
    <table class="table container my-5">
        <thead>
            <tr>
                <th scope="col" class="bg-danger">#</th>
                <th scope="col" class="bg-danger">Compagnia</th>
                <th scope="col" class="bg-danger">Stazione di partenza</th>
                <th scope="col" class="bg-danger">Stazione di arrivo</th>
                <th scope="col" class="bg-danger">Orario di partenza</th>
                <th scope="col" class="bg-danger">Orario di arrivo</th>
                <th scope="col" class="bg-danger">Codice treno</th>
                <th scope="col" class="bg-danger">Carrozze</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row" class="bg-dark text-white">{{ $train->id }}</th>
                    <td class="bg-primary text-white">{{ $train->company_name }}</td>
                    <td class="bg-warning">{{ $train->departure_station }}</td>
                    <td class="bg-warning">{{ $train->arrival_station }}</td>
                    <td class="bg-success text-white">{{ $train->departure_time }}</td>
                    <td class="bg-success text-white">{{ $train->arrival_time }}</td>
                    <td class="bg-warning">{{ $train->train_code }}</td>
                    <td class="bg-dark text-white">{{ $train->car_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        {{ $trains->links() }}
    </div>
@endsection
