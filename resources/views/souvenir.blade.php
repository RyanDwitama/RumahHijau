@extends('template.template')

@section('title', 'Souvenir - Rumah Hijau')

@section('content')

{{-- Tulisan Besar Souvenir --}}
<div style="text-align: center; font-size: 250%; font-weight: bold; margin-top: 10%; margin-bottom: 5%; color:#3bb143">Choose The Perfect <b style="color: #FF6700">Souvenir</b><br>for Your Family</div>

{{-- Kotak Gambar dan Deskripsi Souvenir --}}
<div style="width: 100%; margin-left: 6%; margin-bottom: 50%">
    <div class="kotakSouvenir">
        <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 20px 20px 0px 0px">
        <div style="padding: 4%">
            <div style="text-align: justify; margin-bottom: 3%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus perspiciatis quis modi quam repellat totam excepturi laudantium accusantium officiis</div>
            <div class="hargaSouvenir">Rp 30.000,00</div>
            <button class="checkButtonSouvenir" onclick ="openForm()">Check</button>
        </div>
    </div>

    <div class="kotakSouvenir">
        <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 20px 20px 0px 0px">
        <div style="padding: 4%">
            <div style="text-align: justify; margin-bottom: 3%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus perspiciatis quis modi quam repellat totam excepturi laudantium accusantium officiis</div>
            <div class="hargaSouvenir">Rp 30.000,00</div>
            <button class = "checkButtonSouvenir" onclick ="openForm()">Check</button>
        </div>
    </div>

    <div class="kotakSouvenir">
        <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 20px 20px 0px 0px">
        <div style="padding: 4%">
            <div style="text-align: justify; margin-bottom: 3%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus perspiciatis quis modi quam repellat totam excepturi laudantium accusantium officiis</div>
            <div style="text-align: center; color:green; font-weight: bold; float: center">Rp 30.000,00</div>
            <button class = "checkButtonSouvenir" onclick ="openForm()">Check</button>
        </div>
    </div>
</div>

{{-- Untuk Function Button Check Souvenir --}}
<div id ="myOverlay" class ="overlayCulinary">
    <span class ="closebtnCulinary" onclick = "closeForm()" title ="Close"> X </span>

    <div class = "wrapSouvenir">
            <img src="gambar/contohgambar.png" style="margin-left: auto; margin-right: auto; width: 50%; display: block; border-radius: 10px; margin-bottom: 5%">
            <div style="text-align: center; font-weight: bold; color: green; margin-bottom: 3%">Parfume Peony Rose Limited Edition</div>
            <div style="text-align: justify; margin-bottom: 4%">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, consequuntur odio omnis itaque debitis dolorem, eveniet molestias blanditiis eum temporibus suscipit veritatis quibusdam officiis culpa a repudiandae sapiente rem libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. In facere dignissimos deserunt. Id maiores animi delectus deserunt, blanditiis aliquid nam quo ut nulla dolorem laborum commodi totam molestias fugiat nobis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos excepturi at ea illo deserunt non eius illum obcaecati. Veritatis repellat, temporibus reiciendis rem illum accusamus? Architecto voluptatibus saepe ratione neque.</div>
            <div style="text-align: center; color: green; font-weight: bold; float: center">Rp 34.000,00</div>
            <button class="buyNowSouvenir">Buy Now</button>
    </div>
</div>

<script>
    function openForm(){
        document.getElementById("myOverlay").style.display = "block";
    }
</script>

<script>
    function closeForm(){
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
@endsection