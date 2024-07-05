{{-- @dd($prodotti) --}}
@extends('layouts.app')


@section('main')
    
    @foreach ($prodotti as $prodotto)
        <div class="col-4 mb-5" >
                
            <div class="card">
                <div class="prodotto position-relative">
                    <img class="img-prodotto" src="{{ Vite::asset('resources/img/1.webp') }}" alt={{$prodotto['frontImage']}}>
                    <img class="img-prodotto-secondo" src="{{ Vite::asset('resources/img/1b.webp') }}" alt={{$prodotto['backImage']}}>
                    <input class="cuore position-absolute" type="button" value="&hearts;">


                </div>
                <div class="testo-prodotto">
                    <span>{{$prodotto['brand']}}</span>
                    <h3>{{$prodotto['name']}}</h3>
                    <span class="prezzo-scontato" >{{$prodotto['price']}}&euro;</span>  
                    <span class="prezzo-originale">{{$prodotto['price']}}</span>
                </div>
            </div>
        </div>
    @endforeach
            
    




@endsection