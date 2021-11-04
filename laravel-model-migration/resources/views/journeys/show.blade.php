@extends('layouts.main')

@section('title',$data->location)

@section('content')
    <h1>Pagina Show</h1>
    <ul class="col-10">
        <li>                
            <h2>location: {{$data->location}}</h2>
            <p>Country: {{$data->country}}</p>
            <p>Region: {{$data->region}}</p>
            <p>CIty: {{$data->city}}</p>
        </li>
        <li>
            <h4>data di partenza</h4>
            <p>{{$data->date}}</p>
        </li>
        <li><p>Durata(giorni): {{$data->duration}}</p></li>
        <li>
            <p>Trattamento: {{$data->placement}}</p>
            <p>Trattamento: {{$data->service}}</p>
        </li>
        <li>
            <p>{{$data->description}}</p></p>
        </li>
        <li>
            <p>{{$data->available ? 'Disponibile' : 'Non Disponibile'}}</p>
        </li>
        <li>
            <h3>PRICE: {{$data->price}}</h3>
        </li>
    </ul>
@endsection