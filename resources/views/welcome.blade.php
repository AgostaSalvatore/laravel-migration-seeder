@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    
<div class="container-fluid">
    <h1 class="text-center mb-5">
        Lista Treni
    </h1>
</div>

<ul>
    @foreach ($trains as $train)
        <div class="card">
            <div class="card-top d-flex justify-content-around">
                <div class="card-top-left">
                    <h2>
                        Azienda: 
                        {{$train -> company}}
                    </h2>
                </div>
                <div class="card-top-right">
                    <h2>
                        ID treno: 
                        {{$train -> id}}
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <p>
                    Stazione di partenza: 
                    {{$train -> departure_station}}
                </p>
                <p>
                    Stazione di arrivo: 
                    {{$train -> arrival_station}}
                </p>
                <p>
                    Orario di partenza: 
                    {{$train -> departure_time}}
                </p>
                <p>
                    Orario di arrivo: 
                    {{$train -> arrival_time}}
                </p>
                <p>
                    Codice treno: 
                    {{$train -> train_code}}
                </p>
                <p>
                    Carrozze: 
                    {{$train -> total_carriages}}
                </p>
                <p>
                    @if ($train -> on_time_or_not == 0)
                        In orario
                    @else
                        Non in orario
                    @endif
                </p>
                <p>
                    @if ($train -> cancelled_or_not == 0)
                        Non cancellato
                    @else
                        Cancellato
                    @endif
                </p>
            </div>
        </div>
    @endforeach
</ul>

@endsection
