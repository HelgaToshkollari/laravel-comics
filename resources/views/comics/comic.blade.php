@extends("layouts.app")

@section("main-content")
   
    <div class="row d-flex flex-wrap py-4">
        <div class="col">
            <div class="my-comic">
                @foreach ($comicsList as $comic )
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{$comic["thumb"]}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic["series"]}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$comic["type"]}}</h6>
                        <p class="card-text">Costo :{{$comic["price"]}}</p>
                        <p class="card-text">Costo :{{$comic["description"]}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>

@endsection