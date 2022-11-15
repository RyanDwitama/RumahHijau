@extends('template.template')

@section('title', 'Homestay - Rumah Hijau')

@section('content')

    <!-- Kotak Contoh 1 Start -->
    <!-- <div class="HomestayPage1">
        <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Card title
                    </h5>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
        </div>
    </div> -->; 
    <!-- Kotak Contoh 1 End -->

    <div style="padding-left:30%; padding-top:5%">
        <p style="width:20%; float:left; border-right: 2px solid gray">Location</p>
        <p style="width:20%; float:left; border-right: 2px solid gray; padding-left: 3%">Check-in:</p>
        <p style="width:20%; float:left; margin-right: 0%; padding-left: 3%">Check-out:</p>

        <p style="width: 10%; float: left; padding-top:3%">search</p>

        <p style="width:20%; float:left; border-right: 2px solid gray">Location</p>
        <p style="width:20%; float:left; border-right: 2px solid gray; padding-left: 3%">Check-in</p>
        <p style="width:20%; float:left; padding-left: 3%">Check-out</p>

    </div

    <!-- Price Range Start -->
    <div style="margin-left: 5px; padding-top: 10%">  
        <ul style="display: flex">
        <!-- <ul style="display: flex"> -->
            <li style="list-style: none">
                <P style="color: #25b448">
                    <b>
                        Price Range
                    </b>
                </P>

                <div style="width: 100%; margin-top: -10px; display: flex">
                    <input type="text" class="form-control" id="inputPrice1" placeholder="min" style="width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
                    <input type="text" class="form-control" id="inputPrice2" placeholder="max" style="margin-left: 20px; width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
                </div>
                
                <p style="margin-top: 10px; color: #25b448">
                    <b>
                        Sort by
                    </b>
                </p>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Lower Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        High Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Recomendation
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Most View
                    </p>
                </div>

                <p style="margin-top: 10px; color: #25b448">
                    <b>
                        Facilities
                    </b>
                </p>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Bathub
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Hair dryer
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Washing Machine
                    </p>
                </div>

                <p style="margin-top: 10px; color: #25b448">
                    <b>
                        Room Offers
                    </b>
                </p>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Breakfast included
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Late check-out
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Early check-in
                    </p>
                </div>
            </li>

            <li style="list-style: none; margin-left: 100px;">
                <div align="center" style="width: 950px; height: 250px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                </div>

                <div align="center" style="width: 950px; height: 250px; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                </div>

                <div align="center" style="width: 950px; height: 250px; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                </div>
            </li>
        </ul>
    </div>
    <!-- Prince Range End -->
@endsection