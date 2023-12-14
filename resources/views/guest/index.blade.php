@extends('layout.app')

 @section('content')

 <div class="container">
    <h1>In Partenza</h1>
    <div class="row">
        @foreach($trains->filter(function($train) {
            return $train->data_di_partenza == date('Y-m-d');
        }) as $train)
            <div class="col-md-4">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <p class="card-text">Parte da: {{ $train->stazione_di_partenza }}</p>
                        <p class="card-text">Arriva a: {{ $train->stazione_di_arrivo }}</p>
                        <p class="card-text">Data di partenza: {{ $train->data_di_partenza }}</p>
                        <p class="card-text">Data di arrivo: {{ $train->data_di_arrivo }}</p>
                        <p class="card-text">Partenza: {{ $train->orario_di_arrivo }}</p>
                        <p class="card-text">Arrivo: {{ $train->orario_di_partenza }}</p>
                        <p class="card-text">Carrozze: {{ $train->numero_carrozze }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


 <div class="container">
   <h1>Tutti i treni:</h1> 
    <div class="row">
        @foreach($trains as $train)
            <div class="col-md-4">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <p class="card-text">Parte da: {{ $train->stazione_di_partenza }}</p>
                        <p class="card-text">Arriva a: {{ $train->stazione_di_arrivo }}</p>
                        <p class="card-text">Data: {{ $train->data_di_partenza }}</p>
                        <p class="card-text">Partenza: {{ $train->orario_di_arrivo }}</p>
                        <p class="card-text">Arrivo: {{ $train->orario_di_partenza }}</p>
                        <p class="card-text">Carrozze: {{ $train->numero_carrozze }}</p>
                        @if($train->cancellato && $train->in_orario)
                            <p class="card-text text-danger">Cancellato</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

 @endsection