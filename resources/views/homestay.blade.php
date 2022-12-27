@extends('template.template')

@section('title', 'Homestay - Rumah Hijau')

@section('content')
<style>
    .untukBorderHomeStayDetail{
        border-left: 1px solid gray; 
        padding-left: 5%;
    }

    .untukIconHomeStay{
        text-align: center; 
        font-size: 200%;
    }
</style>
    <!-- Kotak 1 Start -->
    <div style="margin-top: 2%; margin-bottom: 2%; padding-left: 10%; padding-right: 10%; display: flex">
        <div style="width : 100%; height: 100%; border: groove 2px; border-radius:35px">
            <div style="display: flex; margin: 1%;">
                <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%;">
                    <li style="list-style: none; color: #25b448; margin-right: 20%;">
                        Location
                    </li>

                    <li style="list-style: none">
                        Jakarta, Indonesia
                    </li>
                </ul>

                <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%;">
                    <li style="list-style: none; margin-right: 20%; color: #25b448;">
                        Check In:
                    </li>

                    <li style="list-style: none">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%">
                    <li style="list-style: none; margin-right: 20%; color: #25b448;">
                        Check Out:
                    </li>

                    <li style="list-style: none">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul style="width : 25%">
                    <li style="list-style: none; margin-left: -60px; color: #25b448; display: flex;">
                        <button type="submit" class="btn btn-primary mb-2" style="width : 200px; margin-top: 20px; margin-left: 50px; background: linear-gradient(to right, #f0572e, #f0312e); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Search </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- <div class="HomestayPage1 HomestayPage1screen">
        <div align="center" class="HomestayPage2 HomestayPage2screen">
            <div class="HomestayPage3 HomestayPage3screen">
                <ul class="HomestayPage4 HomestayPage4screen">
                    <li class="Homestay1Page4">
                        Location
                    </li>
                    
                    <li class="visittest2" style="list-style: none; margin-right: 40px">
                        Jakarta Indonesia
                    </li>
                </ul>

                <ul style="border-right: 1px solid; border-color: #25b448; margin-top: 15px;">
                    <li style="background-color: black; list-style: none; color: #25b448; margin-right: 110px">
                        Check-In
                    </li>

                    <li style=" background-color: red; list-style: none; margin-right: 50px;">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul style="border-right: 1px solid; border-color: #25b448; margin-top: 15px;">
                    <li style="background-color: black; list-style: none; color: #25b448; margin-right: 100px">
                        Check-Out
                    </li>

                    <li style="background-color: red; list-style: none; margin-right: 50px">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul>
                    <li style="list-style: none; margin-left: -60px; color: #25b448; display: flex;">
                        <button type="submit" class="btn btn-primary mb-2" style="margin-top: 20px; margin-left: 50px; background: linear-gradient(to right, #f0572e, #f0312e); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Search </button>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- Kotak 1 End -->

    <!-- Price Range Start -->
    <div style="display: flex" id="homeStay">
        <ul style="width : 25%">
            <li style="list-style: none">
                <P style="color: #25b448">
                    <b>
                        Price Range
                    </b>
                </P>
            
                <div style="width: 100%; display: flex">
                    <input type="text" class="form-control" id="inputPrice1" placeholder="min" style="width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
                    <input type="text" class="form-control" id="inputPrice2" placeholder="max" style="margin-left: 20px; width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
                </div>

                <p style="margin-top: 5%; color: #25b448">
                    <b>
                        Sort by
                    </b>
                </p>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Lower Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        High Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Recomendation
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Most View
                    </p>
                </div>

                <p style="margin-top: 2%; color: #25b448">
                    <b>
                        Facilities
                    </b>
                </p>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Bathub
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Hair dryer
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Washing Machine
                    </p>
                </div>

                <p style="margin-top: 2%; color: #25b448">
                    <b>
                        Room Offers
                    </b>
                </p>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Breakfast included
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Late check-out
                    </p>
                </div>

                <div style="width: 100%; margin-top: -5%; display: flex">
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 2.2%; margin-left: 3%">
                        Early check-in
                    </p>
                </div>
            </li>
        </ul>

        <ul style="width : 75%">
            {{---------------- LOOPING HOMESTAY LIST ----------------}}
            <li style="list-style: none; width: 100%; border: outset 3px; border-radius: 35px; margin-bottom: 5%">
                <div style="width: 100%; height: 100%">
                    <div style="display: flex">

                        {{-- gambar homestay --}}
                        <ul style="width: 45%; padding-left: 1%">
                            <li style="list-style: none;">
                                <img src="gambar/contohgambar.png" alt="" style="width: 100%; padding-top: 5%; padding-left: 2%; padding-bottom: 5%">
                            </li>
                        </ul>

                        {{-- untuk deskripsi homestay --}}
                        <ul style="width: 35%; padding-left: 2%; padding-top: 2%">
                            <li style="list-style: none;">
                                <h5>
                                    Sleepezz Equestrian Park Hotel
                                </h5>
                            </li>
                            <li style="list-style: none;">
                                <h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </h5>
                            </li>
                            <li style="list-style: none;">
                                <h5>
                                    <i class="fa fa-wifi"></i>
                                    <i class="fa fa-cutlery"></i>
                                    <i class="fa fa-bath"></i>
                                    <i class="fa fa-shower"></i>
                                </h5>
                            </li>
                        </ul>
                        
                        {{-- harga dan detail homestay --}}
                        <ul style="width: 20%; margin-right: 2%; padding-top: 17%">
                            <li style="list-style: none;">
                                <h5>
                                    IDR 500.000/night
                                </h5>
                            </li>

                            <li style="list-style: none; display: flex;">
                                <button type="submit" onclick="document.getElementById('homeStayDetail').style.display='block'; document.getElementById('homeStay').style.display='none'" class="btn btn-primary mb-2" style="width: 100%; background: linear-gradient(to right, #27b448, #72b426); border-radius: 15px"> Details </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            {{---------------- LOOPING HOMESTAY LIST END ----------------}}
        </ul>
    </div>

    
    <div id="homeStayDetail" style="padding: 5%; display: none">
        <p style="font-size: 150%; font-weight: bold">Sleepezz Equestrian Park Hotel</p>
        <p style="font-weight: bold"><i class="fa fa-map-marker"></i> Jakarta, Indonesia</p>
        <p style="font-weight: bold">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            &nbsp;&nbsp;&nbsp;8,9
            <i class="fa fa-thumbs-up"></i>
            <div style="text-align: right; translate: 0% -110%">
                <i class="fa fa-heart" style="font-size: 200%"></i>
                <button type="reverse" class="btn btn-primary mb-2" style="background: linear-gradient(to right, #27b448, #72b426); border-radius: 15px; padding: 1%; padding-right: 5%; padding-left: 5%; font-weight: bold; font-size: 125%"> Reverse </button>
            </div>
        </p>
        <div style="width: 100%; margin-top: -7%; margin-bottom: 25%">
            <img src="gambar/contohgambar.png" style="width: 50%; float: left; margin: 1%; border-top-left-radius: 20px; border-bottom-left-radius: 20px">
            <img src="gambar/contohgambar.png" style="width: 22%; float: left; margin: 1%">
            <img src="gambar/contohgambar.png" style="width: 22%; float: left; margin: 1%; border-top-right-radius: 20px">
            <img src="gambar/contohgambar.png" style="width: 22%; float: left; margin: 1%">
            <img src="gambar/contohgambar.png" style="width: 22%; float: left; margin: 1%; border-bottom-right-radius: 20px">
        </div>
        <div style="display: flex; margin-top: 30%">
            <ul style="list-style: none; width: 40%">
                <li>
                    <b>
                        <p style="margin: 1%; font-size: 125%">Entire hotel hosted by Wayang</p>
                        <p style="margin-bottom: 7%">4 guest - 2 bedrooms - 2 beds - 2 baths</p>
                        <p style="font-size: 125%">What this places offers</p>
                        <div style="display: flex; width: 100%; translate: -5% 0%">
                            <div style="width: 20%; text-align:center">
                                <i class="fa fa-wifi" style="font-size: 250%"></i>
                                <p>Wifi</p>
                            </div>
                            <div style="width: 20%; text-align:center">
                                <i class="fa fa-cutlery" style="font-size: 250%"></i>
                                <p>Breakfast</p>
                            </div>
                            <div style="width: 20%; text-align:center">
                                <i class="fa fa-bath" style="font-size: 250%"></i>
                                <p>Bath</p>
                            </div>
                            <div style="width: 20%; text-align:center">
                                <i class="fa fa-shower" style="font-size: 250%"></i>
                                <p>Shower</p>
                            </div>
                            <div style="width: 20%; text-align:center">
                                <i class="fa fa-shower" style="font-size: 250%"></i>
                                <p>Shower</p>
                            </div>
                        </div>
                    </b>
                </li>
            </ul>
            <ul style="list-style: none; width: 60%">
                <table style="width: 100%" cellpadding="10">
                    <tr style="font-size: 150%">
                        <th>Nearby Place</th>
                        <th></th>
                        <th class="untukBorderHomeStayDetail">Popular in the Area</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>Ancol Dreamland</td>
                        <td style="color: gray">5,6 km</td>
                        <td class="untukBorderHomeStayDetail">Ancol Dreamland</td>
                        <td style="color: gray">5,6 km</td>
                    </tr>
                    <tr>
                        <td>Pasang Surut Cafe</td>
                        <td style="color: gray">5,6 km</td>
                        <td class="untukBorderHomeStayDetail">Pasang Surut Cafe</td>
                        <td style="color: gray">5,6 km</td>
                    </tr>
                    <tr>
                        <td>Restaurant Taj Khaleed</td>
                        <td style="color: gray">5,6 km</td>
                        <td class="untukBorderHomeStayDetail">Restaurant Taj Khaleed</td>
                        <td style="color: gray">5,6 km</td>
                    </tr>
                    <tr>
                        <td>Sauna Resort Premium</td>
                        <td style="color: gray">5,6 km</td>
                        <td class="untukBorderHomeStayDetail">Sauna Resort Premium</td>
                        <td style="color: gray">5,6 km</td>
                    </tr>
                </table>
            </ul>
    </div>
    <div>
        <p style="font-weight: bold; font-size: 150%">Location info</p>
        <p style="font-weight: bold"><i class="fa fa-map-marker"></i> Jakarta, Indonesia</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
    </div>

    <div style="display: flex">
        <div style="width: 50%; border: 1px solid green; padding: 2%; margin: 2%">
            <b>Annonymous</b><br>
            <i style="" class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <div style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus harum quasi cupiditate eveniet eos dicta officia qui nemo nostrum, soluta facere sapiente, veniam ipsam consectetur laudantium iste blanditiis at. Eum!</div>
        </div>
        <div style="width: 50%; border: 1px solid green; padding: 2%; margin: 2%">
            <b>Annonymous</b><br>
            <i style="" class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <div style="text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus harum quasi cupiditate eveniet eos dicta officia qui nemo nostrum, soluta facere sapiente, veniam ipsam consectetur laudantium iste blanditiis at. Eum!</div>
        </div>
    </div>
@endsection