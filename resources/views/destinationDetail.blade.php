@extends('template.template')

@section('title', 'Detination Detail - Rumah Hijau')

@section('content')

<style>
.buttonDestinationDetail{
    width: 20%; 
    padding: 2%; 
    margin: 2%; 
    border: none; 
    background: linear-gradient(to bottom, green, lime); 
    color: white; 
    border-radius: 10px
}

.buttonDestinationDetail:active, .buttonDestinationDetail:hover{
    width: 20%; 
    padding: 2%; 
    margin: 2%; 
    border: none; 
    background: linear-gradient(to bottom, green, rgb(0, 54, 0)); 
    color: white; 
    border-radius: 10px
}
</style>

<div style="padding: 5%">
    <div style="width: 60%; display:inline-block; box-shadow: 1px 2px 4px 6px gray; padding: 3%; float: left; border-radius: 10px">
        <p style="text-align:center; font-size: 150%; font-weight: bold; color: green">Tour Packages Pulau Pramuka 2D1N Via Kaliadem Muara Angke</p>
        <img src="gambar/contohgambar.png" style="width: 100%">
        <button id="DescriptionButton" class="buttonDestinationDetail" onclick="document.getElementById('Description').style.display='block'; document.getElementById('Rundown').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Price').style.display='none'">Description</button>
        <button class="buttonDestinationDetail" onclick="document.getElementById('Rundown').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Price').style.display='none'">Rundown</button>
        <button class="buttonDestinationDetail" onclick="document.getElementById('Location').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Rundown').style.display='none'; document.getElementById('Price').style.display='none'">Location</button>
        <button class="buttonDestinationDetail" onclick="document.getElementById('Price').style.display='block'; document.getElementById('Description').style.display='none'; document.getElementById('Location').style.display='none'; document.getElementById('Rundown').style.display='none'">Price</button>
        <div id="Description" style="display:none">
            <ul>
                <li>Lewi hejo</li>
                <li>Lewi Liek</li>
                <li>Lewi barong</li>
            </ul>
            <p>Rute:</p>
            <ul>
                <li>Persawahan</li>
                <li>Sungai</li>
            </ul>
            Jarak : 5km (PP)<br><br>

            Tersedia Makan Siang Rp. 40.000,00<br><br>

            Menunya:
            <ul>
                <li>Ayam Goreng</li>
                <li>Tahu Tempe</li>
                <li>Kerupuk</li>
            </ul>
        </div>
        <div id="Rundown" style="display:none">
            Day 1<br>
            Rundown
            <ol>
                <li>Briefing pagi dan pemanasan
                    <br><p style="text-align: justify">Perjalanan akan dimulai dari tempat parkir leuijo. sebelum berangkat akan diinformasikan Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique fuga tempore autem culpa magnam quisquam nulla earum impedit amet nihil alias temporibus, dolor animi sint blanditiis ea consequatur? Harum, esse?</p>
                </li>
                <li>
                    <p style="text-align: justify">Perjalanan akan dimulai dari tempat parkir leuijo. sebelum berangkat akan diinformasikan Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique fuga tempore autem culpa magnam quisquam nulla earum impedit amet nihil alias temporibus, dolor animi sint blanditiis ea consequatur? Harum, esse?</p>
                </li>
                <li>
                    <p style="text-align: justify">Perjalanan akan dimulai dari tempat parkir leuijo. sebelum berangkat akan diinformasikan Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique fuga tempore autem culpa magnam quisquam nulla earum impedit amet nihil alias temporibus, dolor animi sint blanditiis ea consequatur? Harum, esse?</p>
                </li>
            </ol>
        </div>
        <div id="Location" style="display:none">
            <img src="gambar/contohgambar.png" style="width: 100%">
        </div>
        <div id="Price" style="display:none">
            <table>
                <tr>
                    <th>Jumlah Peserta Tour</th>
                    <th>Harga/pax</th>
                </tr>
                <tr>
                    <td>2-3</td>
                    <td>Rp. 448.000,00</td>
                </tr>
                <tr>
                    <td>2-3</td>
                    <td>Rp. 448.000,00</td>
                </tr>
                <tr>
                    <td>2-3</td>
                    <td>Rp. 448.000,00</td>
                </tr>
                <tr>
                    <td>2-3</td>
                    <td>Rp. 448.000,00</td>
                </tr>
                <tr>
                    <td>2-3</td>
                    <td>Rp. 448.000,00</td>
                </tr>
            </table>
        </div>
    </div>
<style>
    table{
        width: 100%;
    }
    th, td{
        border: 1px solid gray;
        padding: 1%;
    }
    td{
        text-align: center;
    }
    tr:nth-child(odd) {
    background-color: #dddddd;
    }
</style>
    <div style="width: 35%; display:inline-block; padding:5%; margin-top: -2%">
        <p style="font-weight: bold; color: green">Form Reverse Destination</p>
        <p style="margin-bottom: 1%">Full Name</p>
        <input type="text" id="name" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Contact WA</p>
        <input type="number" id="number" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Number of Participants</p>
        <input type="number" id="participant" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Choice of Tour Packages</p>
        <input type="text" id="package" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Date Choice</p>
        <input type="date" id="date" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 40px; font-size: 25px; border-radius: 10px">
        <p style="margin-bottom: 1%">Note</p>
        <input type="text" id="note" style="width: 100%; box-shadow:1px 6px 8px gray; border: none; background-color: #C0C0C0; margin-bottom: 3%; height: 160px; font-size: 25px; border-radius: 10px">
        <button style="background: linear-gradient(to bottom, red, orange); border: none; padding: 3%; padding-left: 10%; padding-right: 10%; float: right; border-radius: 15px; margin-top: 20%; margin-bottom: 75%; color: white">Reverse Now</button>
    </div>
</div>

<script>
    // Supaya saat halaman pertama dibuka, button deskripsi aktif
    document.getElementById('DescriptionButton').click();
</script>

@endsection