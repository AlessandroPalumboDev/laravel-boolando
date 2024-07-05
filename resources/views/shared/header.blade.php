<header>
    <div class="container">
        <div class="row-header d-flex a-items-center">
            <div class="col25">
                <a class="selezione" href="{{route('home')}}">Home</a>
                <a class="selezione" href="{{route('products')}}">Prodotti</a>
                <a class="selezione" href="{{route('about')}}">About Us</a>
            </div>
            <div class="col50 txt-a-center">
                <a href="{{route('home')}}"><img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="logo"></a>                
            </div>
            <div class="col25 txt-a-right">
                <a class="selezione" href="#"><i class="fa-regular fa-user"></i></a>
                <a class="selezione" href="#"><i class="fa-regular fa-heart"></i></a>
                <a class="selezione" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
            </div>
        </div>
    </div>
</header>