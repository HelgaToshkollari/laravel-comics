@extends("layouts.app")
@section("main-content")
<div class="jumbo">
</div>
<div class="my-bg-cards">
    <div class="container py-5">
        <div class="d-flex flex-wrap ">
            @foreach ($comicsList as $comic )
                <div class="card-container">
                    <div class="card-image">
                        <img class="card-img" src="{{$comic["thumb"]}}" alt="Card image cap">
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title">{{$comic["series"]}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$comic["type"]}}</h6>
                        <p class="card-text">Costo : {{$comic["price"]}}</p>
                    </div>
                </div>
            @endforeach
        </div> 
        <div class="text-center">
            <button class="btn btn-primary px-4">LOAD MORE</button>
        </div>
    </div>
</div>
<div class="my-blue-bg"> 
    <div class="my-banner" >
        <ul class="my-banner-ul list-unstyled py-3 ">
            <li>  
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" >
                <h5>DIGITAL COMICS</h5>
            </li>
            <li>              
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" >
                <h5>DC MERCHANDISE</h5>    
            </li>
            <li>               
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" >
                <h5>SUBSCRIPTION</h5>          
            </li>
            <li>
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" >
                <h5>COMIC SHOP LOCATION</h5>
            </li>
            <li>              
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" >
                <h5>DC POWER VISA</h5>         
            </li>
        </ul>
    </div>
</div>
@endsection