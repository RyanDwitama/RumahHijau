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

.wrap{
    width:80%;
    margin:auto;
    background:#fff;
    border-radius: 3%;
    padding-top: 2%;
    margin-top: 5%;
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

.openbtn{
    background:#f1f1f1;
    border:none;
    padding:10px 15px;
    font-size:20px;
    cursor:pointer;
    float:right;
}

.overlay{
    height:100%;
    width:100%;
    display:none;
    position:fixed;
    z-index:1;
    top:0;
    left:0;
    background:rgba(0,0,0,0.8);
}

.closebtn{
    position:absolute;
    top:0%;
    right:10%;
    font-size:60px;
    cursor:pointer;
    color: red;
}

.rating{
    position: absolute;
    top: 14%;
    right: 15%;
}

</style>



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
                    <button type="search"><i class="fa fa-search" style="font-size: 225%"></i></button>
                </form>
            </div>
          </h3>

          <br>  <br>  <br>
          <img src="gambar/contohgambar.png" width="90%" style="border-radius: 30px;">
          
          <br>  <br>

        <div style="width: 90%">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; margin-right: 12%; border-radius: 30px;">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; margin-right: 12%; border-radius: 30px;">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; border-radius: 30px;">  
            
            <div style="width: 25%; margin-right: 12%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; margin-right: 12%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%; margin-right: 12%">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>
            
            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%; margin-right: 12%;">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>

            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>
        </div>

        <div style="width: 90%">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; margin-right: 12%; border-radius: 30px;">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; margin-right: 12%; border-radius: 30px;">
            <img src="gambar/contohgambar.png" width="25%" style="float: left; border-radius: 30px;">  
            
            <div style="width: 25%; margin-right: 12%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; margin-right: 12%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; float: left;">
                <b style="font-size: 100%;">Roasted Arparagus with Pamersan</b>
            </div>

            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%; margin-right: 12%;">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>
            
            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%; margin-right: 12%;">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>

            <div style="width: 25%; float: left; margin-top: 1%; margin-bottom: 1%">
                <button class = "openbtn" onclick ="openForm()" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 1%; float:left; margin-bottom: 4%">More</button>
            </div>
        </div>

        
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
 
<!-------------------------------------popup gambar-------------------------->


<div id ="myOverlay" class ="overlay">

    <span class ="closebtn" onclick = "closeForm()" title ="Close"> X </span>
    <span class ="rating" title="Rating">
        <div style="font-size: 200%">
            Ini Rating <i class="fa fa-thumbs-up"></i>
        </div>
    </span>

    <div class = "wrap">
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
                <a href="https://fontawesome.com/v4/icons/"><button type="button" style="margin-right: 2%">Order Food</button></a>
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

@endsection