@extends("layouts.app")

@section("main-content")
   
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
                            <p class="card-text">Costo : {{$comic["description"]}}</p>
                        </div>
                    </div>
                @endforeach
            
           
         </div> 
        <div class="text-center">
            <button class="btn btn-primary px-4">LOAD MORE</button>
        </div>
    </div>
</div>

@endsection