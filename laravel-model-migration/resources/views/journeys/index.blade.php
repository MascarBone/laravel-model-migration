@extends('layouts.main')

@section('title','Home')

@section('content')
<div class="container">
    @forelse ($data as $item)
        <div class="row">
            <div class="col-2 d-flex justify-content-center align-items-center">
                <a href="{{route('show',['id'=>$loop->iteration])}}"><button>SELEZIONA</button></a>
            </div>
            <ul class="col-10">
                <li>                
                    <h2>location: {{$item->location}}</h2>
                    <p>Country: {{$item->country}}</p>
                    <p>Region: {{$item->region}}</p>
                    <p>CIty: {{$item->city}}</p>
                </li>
                <li>
                    <h4>data di partenza</h4>
                    <p>{{$item->date}}</p>
                </li>
                <li><p>Durata(giorni): {{$item->duration}}</p></li>
                <li>
                    <p>Trattamento: {{$item->placement}}</p>
                    <p>Trattamento: {{$item->service}}</p>
                </li>
                <li>
                    <p>{{$item->description}}</p></p>
                </li>
                <li>
                    <p>{{$item->available ? 'Disponibile' : 'Non Disponibile'}}</p>
                </li>
                <li>
                    <h3>PRICE: {{$item->price}}</h3>
                </li>
            </ul>
    </div>
    
    <hr>

    @empty
        <p>no journeys available</p>

    @endforelse

</div>
@endsection