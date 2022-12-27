@extends('template.template')

@section('title', 'Culinary - Rumah Hijau')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

<style>

body{
    background-size:cover;
    font-family:Arial;
}

form{
    margin:2%;
}

input{
    width:100%;
    padding:10px;
    box-sizing:border-box;
    margin-bottom: 10px;
    border:none;
    outline:none;
    border:1px solid gray;
    font-size:15px;
}
</style>

<!-------------------------- Sort-Start -------------------------------->
<div style="margin-left: 5px; margin-top: 100px">  
  <ul style="display: flex">
      <li style="list-style: none">
          <P style="color: #25b448">
              <b>
                  Price Range
              </b>
          </P>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="text" class="form-control" id="inputPrice1" placeholder="min" style="width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
              <input type="text" class="form-control" id="inputPrice2" placeholder="max" style="margin-left: 20px; width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
          </div>
          
          <p style="margin-top: 20px; color: #25b448">
              <b>
                  Sort by
              </b>
          </p>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice1" placeholder="min" style="width: 15px;" name="sortBy">
              <p style="margin-top: 6px; margin-left: 10px">
                  Lower Price
              </p>
          </div>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice2" placeholder="min" style="width: 15px;" name="sortBy">
              <p style="margin-top: 6px; margin-left: 10px">
                  High Price
              </p>
          </div>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice3" placeholder="min" style="width: 15px;" name="sortBy">
              <p style="margin-top: 6px; margin-left: 10px">
                  Recomendation
              </p>
          </div>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice4" placeholder="min" style="width: 15px;" name="sortBy">
              <p style="margin-top: 6px; margin-left: 10px">
                  Most View
              </p>
          </div>

          <p style="margin-top: 10px; color: #25b448">
              <b>
                  Type
              </b>
          </p>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice5" placeholder="min" style="width: 15px;" name="type">
              <p style="margin-top: 6px; margin-left: 10px">
                  Side dishes
              </p>
          </div>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice6" placeholder="min" style="width: 15px;" name="type">
              <p style="margin-top: 6px; margin-left: 10px">
                  Dessert
              </p>
          </div>

          <div style="width: 100%; margin-top: 0px; display: flex">
              <input type="radio" class="form-control" id="inputPrice7" placeholder="min" style="width: 15px;" name="type">
              <p style="margin-top: 6px; margin-left: 10px">
                  Main Course
              </p>
          </div>
      </li>

<!-------------------------- Sort-End -------------------------------->

<!-------------------------- Menu-Start -------------------------------->
      <li style="list-style: none; margin-left: 200px">
          <h3>
            <div style="width: 50%; float: left;">
                <b style="color: #25b448">
                    What's
                </b>
                <b style="color: #094222">
                    NEW!
                </b>
            </div>
            <div style="width: 40%; float: left;">
                <form class="example" action="/action_page.php" style="margin:auto;">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search" style="font-size: 225%"></i></button>
                </form>
            </div>
          </h3>

          <br>  <br>  <br>
          <img src="gambar/contohgambar.png" width="90%" style="border-radius: 30px;">
          
          <br>  <br>

        <div style="width: 90%; display:inline-block">
            {{---------------- LOOPING CULINARY LIST ----------------}}
            <div style="width: 30%; margin: 1%; display:inline-block">
                <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 10px">
                <p style="font-weight: bold">Roasted Asparagus with Pamersan</p>
                <button class = "openbtnCulinary" onclick ="openForm()">More</button>
            </div>
            {{---------------- LOOPING CULINARY END ----------------}}
            <div style="width: 30%; margin: 1%; display:inline-block">
                <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 10px">
                <p style="font-weight: bold">Roasted Asparagus with Pamersan</p>
                <button class = "openbtnCulinary" onclick ="openForm()">More</button>
            </div>
            <div style="width: 30%; margin: 1%; display:inline-block">
                <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 10px">
                <p style="font-weight: bold">Roasted Asparagus with Pamersan</p>
                <button class = "openbtnCulinary" onclick ="openForm()">More</button>
            </div>
            <div style="width: 30%; margin: 1%; display:inline-block">
                <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 10px">
                <p style="font-weight: bold">Roasted Asparagus with Pamersan</p>
                <button class = "openbtnCulinary" onclick ="openForm()">More</button>
            </div>
            <div style="width: 30%; margin: 1%; display:inline-block">
                <img src="gambar/contohgambar.png" style="width: 100%; border-radius: 10px">
                <p style="font-weight: bold">Roasted Asparagus with Pamersan</p>
                <button class = "openbtnCulinary" onclick ="openForm()">More</button>
            </div>
        </div>
<!-------------------------- Menu-End -------------------------------->
        
          <!------------------------------------------------------------------------------------------------------>
          <!-- <b style="float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-bottom: 20px; margin-top: 5px;">More</a>
        
          <img src="Asset/HomeStay.jpg" width="600px" style="width: 25%; float: left; margin-right: 50px; border-radius: 30px;" height="180px">
          <img src="Asset/HomeStay.jpg" width="600px" style="width: 25%; float: left; margin-right: 50px; border-radius: 30px;" height="180px">
          <img src="Asset/HomeStay.jpg" width="600px" style="width: 25%; float: left; border-radius: 30px;" height="180px">
          
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-bottom: 20px; margin-top: 5px;">More</a>

          <img src="gambar/HomeStay.jpg" width="600px" style="width: 25%; float: left; margin-right: 50px; border-radius: 30px;" height="180px">
          <img src="Asset/HomeStay.jpg" width="600px" style="width: 25%; float: left; margin-right: 50px; border-radius: 30px;" height="180px">
          <img src="Asset/HomeStay.jpg" width="600px" style="width: 25%; float: left; border-radius: 30px;" height="180px">
          
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          <b style="width: 25%; float: left; margin-right: 50px; font-size: 20px;">Roasted Arparagus with Pamersan</b>
          
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-right: 210px; margin-bottom: 20px; margin-top: 5px;">More</a>
          <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; width: 7%; float: left; margin-right: 50px; font-size: 15px; color:green; padding-left: 10px; margin-bottom: 20px; margin-top: 5px;">More</a> -->
        </li>
  </ul>
 
<!------------------------------------- Popup-Gambar-Start -------------------------->
<div id ="myOverlay" class ="overlayCulinary">

    <span class ="closebtnCulinary" onclick = "closeForm()" title ="Close"> X </span>
    <span class ="ratingCulinary" title="Rating">
        <div style="font-size: 200%">
            Ini Rating <i class="fa fa-thumbs-up"></i>
        </div>
    </span>

    <div class = "wrapCulinary">
        <form>
            <div style="text-align: center">
                <b style="color:black; font-size: 200%">Menu Description</b>
            </div>

            <img src="gambar/contohgambar.png" style="width:30%; margin-top: 3%; margin-left: 5%; border-radius: 10%; float: left">
            <div style="margin-left: 50%; margin-top: 3%; margin-right: 10%; font-size: 120%; text-align: center"><b>Roasted Asparagus with Parmesan</b></div>
            <div style="margin-left: 50%; margin-top: 1%; margin-right: 10%; font-size: 120%; text-align: justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quisquam reprehenderit dolorem provident cupiditate perspiciatis magni voluptatibus libero. Eaque incidunt illo quibusdam commodi est cum quae doloribus rerum nobis cumque!</div>

            <div style="margin-top: 5%; margin-left: 10%"><b>Annonymous</b></div>
            <i style="margin-left: 10%" class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
            <div style="margin-top: 1%; margin-left: 10%; margin-right: 50%; text-align: justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus harum quasi cupiditate eveniet eos dicta officia qui nemo nostrum, soluta facere sapiente, veniam ipsam consectetur laudantium iste blanditiis at. Eum!</div>

            <div style="text-align: right">
                <a href="https://fontawesome.com/v4/icons/"><button type="button" style="margin-right: 2%; margin-bottom: 3%">Order Food</button></a>
                <div style="float: left; margin-left: 78%">Rp. 34.000,00</div>
            </div>
        </form>
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
<!------------------------------------- Popup-Gambar-End -------------------------->
@endsection