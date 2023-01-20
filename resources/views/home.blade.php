@extends("layouts.app")
@section("main-content")
<div class="jumbo">
</div>
<div class="d-flex flex-wrap py-4">
    <div class="my-comic">
        @foreach ($comicsList as $comic )
            <div class="my-card">
                <img class="my-card-img " src="{{$comic["thumb"]}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$comic["series"]}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$comic["type"]}}</h6>
                    <p class="card-text">Costo :{{$comic["price"]}}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center ">
        <button class="btn btn-primary px-4">LOAD MORE</button>
    </div>
</div>
<div class="bg-dark"> 
    <div class="my-banner" >
        <ul class=" my-banner-ul list-unstyled py-3 ">
            <li >
                <div class="">
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" >
                    <h5>DIGITAL COMICS</h5>
                </div>
                <div class="">
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" >
                    <h5>DC MERCHANDISE</h5>
                </div>
                <div class="">
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" >
                    <h5>SUBSCRIPTION</h5>
                </div>
                <div class="">
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" >
                    <h5>COMIC SHOP LOCATION</h5>
                </div>
                <div class="">
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" >
                    <h5>DC POWER VISA</h5>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection