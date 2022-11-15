@extends('template.template')

@section('title', 'Culinary - Rumah Hijau')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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
                    <button type="submit"><i class="fa fa-search"></i></button>
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

            <div style="width: 25%; float: left; margin-top: 2%; margin-right: 12%;">
                <a id="myImg" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
            </div>
            
            <div style="width: 25%; float: left; margin-top: 2%; margin-right: 12%;">
                <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
            </div>

            <div style="width: 25%; float: left; margin-top: 2%; margin-bottom: 3%;">
                <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
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

            <div style="width: 25%; float: left; margin-top: 2%; margin-right: 12%;">
                <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
            </div>
            
            <div style="width: 25%; float: left; margin-top: 2%; margin-right: 12%;">
                <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
            </div>

            <div style="width: 25%; float: left; margin-top: 2%; margin-bottom: 3%;">
                <a href="https://www.w3schools.com" target="_blank" style="text-decoration: none; border-style: groove; border-color: green; border-radius: 10px; color:green; padding: 2%;">More</a>
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

<h2>Image Modal</h2>
<p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
<p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>

<img id="myImg" src="gambar/contohgambar.png" alt="Snow" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

</div>
@endsection