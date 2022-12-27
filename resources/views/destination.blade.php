@extends('template.template')

@section('title', 'Destination - Rumah Hijau')

@section('content')

<style>
.destinasiCheckDetail{
    font-weight: bold; 
    color:white; 
    background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); 
    width: 100%; 
    padding: 5%;
}

.destinasiCheckDetail:hover{
    font-weight: bold; 
    color:white; 
    background: linear-gradient(to right, red, orange); 
    width: 100%; 
    padding: 5%;
}
</style>

<div style="text-align: center; font-weight: bold; padding: 2%; padding-left: 20%; padding-right: 20%">
    <p style="color:rgb(17, 187, 17); font-size: 200%">Special Event</p>
    <p style="color:rgb(0, 87, 0); font-size: 150%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quis amet animihic eveniet </p>
</div>

<div id="carousel">
    {{---------------- LOOPING SPECIAL EVENT LIST ----------------}}
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
    {{---------------- LOOPING SPECIAL EVENT LIST END ----------------}}
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
    <div class="destinasiSlide">
        <img src="gambar/contohgambar.png" class="destinasiImage">
        <a href="#">
            <button style="border: 1px solid white; color: white; background-color: transparent; translate: -160% 0%; font-size: 100%; padding: 4%; padding-left: 10%; padding-right: 10%; border-radius: 10px">View Detail</button>
        </a>
        <label style="background-color: green; padding: 2%; padding-left: 5%; padding-right: 5%; translate: -450% -400%">Hot Offer</label>
        <label style="translate: -625% 600%"><i class="fa fa-map-marker" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;Jakarta</label>
        <label style="translate: -550% 600%"><i class="fa fa-arrows-alt" style="font-size: 150%"></i>&nbsp;&nbsp;&nbsp;10 pax</label>
    </div>
</div>

<div style="text-align:center; font-weight: bold">
    <p style="color: green; font-size: 250%; margin-top: 5%">Open Trip <u>KEPULAUAN SERIBU</u></p>
    <p style="color: rgb(0, 59, 0); font-size: 200%">Lestari Liveboard, Your second home at sea</p>
</div>

<div style="padding: 5%; padding-left: 7%">
    {{---------------- LOOPING OPEN TRIP LIST ----------------}}
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
    {{---------------- LOOPING OPEN TRIP LIST END ----------------}}
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
    <div style="width: 30%; box-shadow: 1px 8px 8px 4px gray; padding: 1%; display: inline-block; margin: 1%">
        <p style="text-align: center; font-weight: bold; color: green">Lestari Liveboard, Your second home</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <p style="text-align: justify; padding: 3%; padding-top: 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab minima magni animi iusto doloribus eaque esse, tenetur odit accusamus ex totam tempore nemo porro iste? Architecto error dignissimos facere mollitia!</p>
        <a href="http://localhost:8000/destinationDetail"><button class="destinasiCheckDetail">Check Detail</button></a>
    </div>
</div>

<script>
const carousel = document.querySelector('#carousel');
let isDown = false;
let startX;
let scrollLeft;

carousel.addEventListener('mousedown', (e) => {
    isDown = true;
    carousel.classList.add('active');
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});
carousel.addEventListener('mouseleave', () => {
    isDown = false;
    carousel.classList.remove('active');
});
carousel.addEventListener('mouseup', () => {
    isDown = false;
    carousel.classList.remove('active');
});
carousel.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 2;
    carousel.scrollLeft = scrollLeft - walk;
});
</script>

@endsection