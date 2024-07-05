{{-- @dd($prodotti) --}}
@extends('layouts.app')


@section('main')
    
    @foreach ($prodotti as $prodotto)
        <div class="col-4 mb-5" >
                
            <div class="card">
                <div class="prodotto position-relative">
                    <img class="img-prodotto" src="{{ Vite::asset("resources/img/".$prodotto["frontImage"]) }}" alt={{$prodotto['frontImage']}}>
                    <img class="img-prodotto-secondo" src="{{ Vite::asset("resources/img/".$prodotto["backImage"]) }}" alt={{$prodotto['backImage']}}>
                    <input class="cuore position-absolute" type="button" value="&hearts;">
                    <div class="etichette">
                        @foreach ($prodotto["badges"] as $badge)
                            @if ($badge['type'] === 'tag')
                                <span class='sostenibilità'>
                                    {{ $badge['value'] }}
                                </span>
                            @elseif ($badge['type'] === 'discount')
                                <span class='percentuale-sconto'>
                                    {{ $badge['value'] }}
                                </span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="testo-prodotto m-2">
                    <span>{{$prodotto['brand']}}</span>
                    <h3>{{$prodotto['name']}}</h3>
                    <span class="prezzo-scontato" >{{$prodotto['price']}}&euro;</span>  
                    <span class="prezzo-originale">{{$prodotto['price']}}&euro;</span>
                </div>
            </div>
        </div>
    @endforeach
            
    




@endsection