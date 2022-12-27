<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="boostrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Header  -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="gambar/contohgambar.png" style="width:12%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                 
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active" style="margin-left:-6%">
                        <a class="nav-link font-weight-bold text-success" href="/"> Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item font-weight-bold">
                        <a class="nav-link font-weight-bold text-success" href="/homestay"> Homestay</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/culinary">Culinary</a>
                    </li>
                        
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/destination">Destination</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/souvenir">Souvenir</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/promo">Promo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-success" href="/contactUs">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Footer  -->
    <footer style="background: linear-gradient(rgb(42 180 70), rgb(98 180 38))">
        <div style="max-width: 100%; margin: auto; display: flex">
            <ul>
                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: 2%">
                        <b>
                        Office Address
                        </b>
                    </div>

                    <p style="color: white;">
                        Pulau Pramuka, Pulau Panggang, Kepulauan Seribu Utara, Kab. Administrasi Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14530
                    </p>
                </li>
                    
                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: -1%">
                        <b>
                        Email
                        </b>
                    </div>

                    <p style="color: white">
                    rumahliterasihijau@gmail.com
                    </p>
                </li>

                <li style="list-style: none;">
                    <div style="font-size: 100%; margin-bottom: 1%; margin-top: -1%">
                        <b>
                        Contact Person
                        </b>
                    </div>

                    <p style="color: white">
                        081202938495
                    </p>
                </li>
            </ul>
                
            <ul>
                <li style="list-style: none;">
                    <P style="margin-bottom: 1%; margin-top: 4%; color: white; text-align: center">
                        <b>
                            SIGN UP AND SAVE
                        </b>
                    </P>
                </li>

                <li style="list-style: none;">
                    <P style="margin-bottom: 1%; margin-top: 1.5%; color: white; text-align: center">
                        Subscribe to get special offers, free giveaway, and once in a lifetime deals
                    </P>
                </li>

                <div style="width: 100%; margin-top: 4%">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" style="width: 100%; background: #094222; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px">
                </div>

                <div style="margin-top: 2%">
                    <button type="submit" class="btn btn-primary mb-2" style="background: linear-gradient(to right, #f0572e, #f0312e); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px">Subscribe</button>
                </div>
            </ul>
        </div>

        <p style="color: white; border-top: 1% solid; text-align: center">
            ©2022 Powered by Rumah Lestari Hijau. All Right Reserved.
        </p>
    <footer>
</body>
</html>