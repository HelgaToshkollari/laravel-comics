@extends("layouts.app")

@section("main-content")
<div class="jumbo">
</div>
<div class="blue-banner">
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="single-comic-container">
                <img class="card-img"src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" >
                <div class="comic-book">
                    COMIC BOOK
                </div>
                
                <div class="view-gallery">
                    VIEW GALLERY
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center py-3">
        <div class="col-sm-9 d-flex">
            <div>
                <h2 class="">Action Comics #1000: The Deluxe Edition</h2>
                
                <div class="p-2 my-bg-green text-white d-flex justify-content-between ">                         
                    <h6>U.S. Price: $19.99</h6> 
                    <h6>AVAILABLE</h6>
                    <h6>Check Availability</h6>
                </div>
                <p>
                    The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                </p> 
            </div>
            <div class="px-4">

                <img class="size-sm"src="{{ Vite::asset('resources/img/adv.jpg') }}" >
            </div>
        
        </div>
       
    </div>

</div>
<div class="row justify-content-center my-grey-bg">

    <div class="col-sm-8 p-4 d-flex ">

        <div class="col-sm-6 p-2">

            <h4>Talent</h4>

           <div class="hr-line"></div>

            <div class="d-flex justify-content-between ">
                <p>Art by:</p>
                <p class="text-primary">
                    José Luis García-López
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>Written by:</p>
                <p class="text-primary">
                    Brad Meltzer
                </p>
            </div>

            <div class="hr-line"></div>

        </div>

        <div class="col-sm-6 p-2">

            <h4>Specs</h4>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>Series:</p>
                <p class="text-primary">
                    Action Comics
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>U.S. Price:</p>
                <p>
                    $19.99
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between ">
                <p>On Sale Date:</p>
                <p>
                    2018-10-02
                </p>
            </div>

            <div class="hr-line"></div>

        </div>

    </div>
    <div class="container"> 
        <div class="my-banner" >
            <ul class="my-banner-ul list-unstyled py-3 ">
                <li> 
                    <h5>DIGITAL COMICS</h5>
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" >
                    
                </li>
                <li>
                    <h5>DC MERCHANDISE</h5>               
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" >
                       
                </li>
                <li>
                    <h5>SUBSCRIPTION</h5>                
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" >
                             
                </li>
                <li>
                    <h5>COMIC SHOP LOCATION</h5>
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" >
                    
                </li>
                <li>
                    <h5>DC POWER VISA</h5>               
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" >
                            
                </li>
            </ul>
        </div>
    </div>

</div>

@endsection