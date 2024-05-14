@extends('layout.main')

@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Compagnia</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Carrozze</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->company_name }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->car_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="container">
        {{ $trains->links() }}
    </div>
@endsection
