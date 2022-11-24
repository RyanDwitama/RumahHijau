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
    </div> -->
    <!-- Kotak Contoh 1 End -->

    <!-- Kotak 1 Start -->
    <div style="margin-top: 50px; margin-bottom: 50px; padding-left: 150px; padding-right: 100px; display: flex;">
        <div style="width : 100%; height: 100%; border: groove 2px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px;">
            <div style="display: flex; margin-top: 10px;">
                <ul style="width : 25%; height: 25%; border-right: 1px solid; border-color: #25b448; margin-top: 15px;">
                    <li style="list-style: none; color: #25b448; margin-right: 100px;">
                        Location
                    </li>

                    <li style="list-style: none; margin-right: 40px">
                        Jakarta, Indonesia
                    </li>
                </ul>

                <ul style="width : 25%; height: 25%; border-right: 1px solid; border-color: #25b448; margin-top: 15px;">
                    <li style="list-style: none; margin-right: 40px; color: #25b448;">
                        Check In:
                    </li>

                    <li style="list-style: none; margin-right: 50px;">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul style="width : 25%; height: 25%; border-right: 1px solid; border-color: #25b448; margin-top: 15px;">
                    <li style="list-style: none; margin-right: 40px; color: #25b448;">
                        Check Out:
                    </li>

                    <li style="list-style: none; margin-right: 50px;">
                        <form action="/action_page.php">
                            <input type="date" id="birthday" name="birthday" style="border: solid 0px;">   
                        </form>
                    </li>
                </ul>

                <ul style="width : 25%; height: 25%;">
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
    <div style="display: flex;">
        <ul style="width : 25%; height: 25%;">
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
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Lower Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        High Price
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Recomendation
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="sort_by" id="inputPrice1" placeholder="min" style="width: 15px;">
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
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Bathub
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Hair dryer
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="facilities" id="inputPrice1" placeholder="min" style="width: 15px;">
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
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Breakfast included
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Late check-out
                    </p>
                </div>

                <div style="width: 100%; margin-top: -20px; display: flex">
                    <input type="radio" class="form-control" name="room_offers" id="inputPrice1" placeholder="min" style="width: 15px;">
                    <p style="margin-top: 6px; margin-left: 10px">
                        Early check-in
                    </p>
                </div>
            </li>
        </ul>

        <ul style="width : 75%; height: 75%;">
            <li style="list-style: none; width: 100%; height: 100%; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">
                <div style="width: 100%; height: 100%">
                    <div style="display: flex">
                        <ul style="width: 45%; padding-left: 10px">
                            <li style="list-style: none;">
                                <img src="gambar/contohgambar.png" alt="" style="width: 100%; padding-top: 25px; padding-left: 10px; padding-bottom: 25px">
                            </li>
                        </ul>

                        <ul style="width: 35%; padding-left: 10px; padding-top: 50px">
                            <li style="list-style: none;">
                                <h5>
                                    Sleepezz Equestrian Park Hotel
                                </h5>
                            </li>

                            <li style="list-style: none;">
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" style="width: 7%; height: 7%">
                                    <path d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160c0-35.3-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64s64-28.7 64-64z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 7%; height: 7%"">
                                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM192 256h48c17.7 0 32-14.3 32-32s-14.3-32-32-32H192v64zm48 64H192v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 168c0-22.1 17.9-40 40-40h72c53 0 96 43 96 96s-43 96-96 96z"/>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 7%; height: 7%"" >
                                    <path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/>
                                </svg> -->
                            </li>
                        </ul>

                        <ul style="width: 20%; padding-left: 1px; padding-top: 170px">
                            <li style="list-style: none;">
                                <h5>
                                    IDR 500.000/night
                                </h5>
                            </li>

                            <li style="list-style: none; margin-left: -57px; display: flex;">
                                <button type="submit" class="btn btn-primary mb-2" style="width: 200px; margin-left: 40px; background: linear-gradient(to right, #27b448, #72b426); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Details </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li style="list-style: none; width: 100%; height: 100%; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">
                <div style="width: 100%; height: 100%">
                    <div style="display: flex">
                        <ul style="width: 45%; padding-left: 10px">
                            <li style="list-style: none;">
                                <img src="gambar/contohgambar.png" alt="" style="width: 100%; padding-top: 25px; padding-left: 10px; padding-bottom: 25px">
                            </li>
                        </ul>

                        <ul style="width: 35%; padding-left: 10px; padding-top: 50px">
                            <li style="list-style: none;">
                                <h5>
                                    Resort Nusa Dua Homestay
                                </h5>
                            </li>

                            <li style="list-style: none;">
                                
                            </li>
                        </ul>

                        <ul style="width: 20%; padding-left: 1px; padding-top: 170px">
                            <li style="list-style: none;">
                                <h5>
                                    IDR 900.000/night
                                </h5>
                            </li>

                            <li style="list-style: none; margin-left: -60px; display: flex;">
                                <button type="submit" class="btn btn-primary mb-2" style="width: 200px; margin-left: 40px; background: linear-gradient(to right, #27b448, #72b426); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Details </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li style="list-style: none; width: 100%; height: 100%; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">
                <div style="width: 100%; height: 100%">
                    <div style="display: flex">
                        <ul style="width: 45%; padding-left: 10px">
                            <li style="list-style: none;">
                                <img src="gambar/contohgambar.png" alt="" style="width: 100%; padding-top: 25px; padding-left: 10px; padding-bottom: 25px">
                            </li>
                        </ul>

                        <ul style="width: 35%; padding-left: 10px; padding-top: 50px">
                            <li style="list-style: none;">
                                <h5>
                                    Batavia Land Of Beach Hotel
                                </h5>
                            </li>

                            <li style="list-style: none;">
                                
                            </li>
                        </ul>

                        <ul style="width: 20%; padding-left: 1px; padding-top: 170px">
                            <li style="list-style: none;">
                                <h5>
                                    IDR 875.000/night
                                </h5>
                            </li>

                            <li style="list-style: none; margin-left: -60px; display: flex;">
                                <button type="submit" class="btn btn-primary mb-2" style="width: 200px; margin-left: 40px; background: linear-gradient(to right, #27b448, #72b426); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Details </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li style="list-style: none; width: 100%; height: 100%; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">
                <div style="width: 100%; height: 100%">
                    <div style="display: flex">
                        <ul style="width: 45%; padding-left: 10px">
                            <li style="list-style: none;">
                                <img src="gambar/contohgambar.png" alt="" style="width: 100%; padding-top: 25px; padding-left: 10px; padding-bottom: 25px">
                            </li>
                        </ul>

                        <ul style="width: 35%; padding-left: 10px; padding-top: 50px">
                            <li style="list-style: none;">
                                <h5>
                                    BnB AiryRoom Super Premium
                                </h5>
                            </li>

                            <li style="list-style: none;">
                                
                            </li>
                        </ul>

                        <ul style="width: 20%; padding-left: 1px; padding-top: 170px">
                            <li style="list-style: none;">
                                <h5>
                                    IDR 995.000/night
                                </h5>
                            </li>

                            <li style="list-style: none; margin-left: -60px; display: flex;">
                                <button type="submit" class="btn btn-primary mb-2" style="width: 200px; margin-left: 40px; background: linear-gradient(to right, #27b448, #72b426); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px"> Details </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- <div style="border: solid 1px; margin-left: 5px">
        <ul style="display: flex">
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

            <div style="">
                <div style="width: 100%; height: 100%; list-style: none; margin-left: 100px;">
                    <li align="center" style="width: 950px; height: 250px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                    </li>

                    <li align="center" style="width: 950px; height: 250px; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                    </li>

                    <li align="center" style="width: 950px; height: 250px; margin-top: 50px; border: outset 3px; border-top-left-radius: 35px; border-top-right-radius: 35px; border-bottom-right-radius: 35px; border-bottom-left-radius: 35px">

                    </li>
                </div> 
            </div>
        </ul>
    </div> -->
    <!-- Prince Range End -->
@endsection