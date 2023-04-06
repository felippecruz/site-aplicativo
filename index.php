<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplicativo de Vendas</title>
    <link rel="shortcut icon" href="favicons/favicon-16x16.png" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Poppins", sans-serif
        }

        body {
            font-size: 16px;
        }

        img {
            margin-bottom: -8px;
        }

        .mySlides {
            display: none;
        }
    </style>
</head>

<body class="w3-content w3-black" style="max-width:1500px;">

    <!----Navbar---->


    <div class="navbar">
        <ul class="navbar-brand" href="#">CodeModeEnterprises</ul>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="members.php" target="_self">Sobre Nós</a>
            </li>
            <!---li>
                    <a href="#"></a>
                </li---->
        </ul>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTATO</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
    </div>

    <?php
    include('header.php')
        ?>

    <!-- The App Section -->
    <div class="w3-padding-64 w3-white">
        <div class="w3-row-padding">
            <div class="w3-col l8 m6">
                <h1 class="w3-jumbo"><b>O Aplicativo</b></h1>
                <h1 class="w3-xxxlarge w3-text-green"><b>Por que baixa-lo?</b></h1>
                <p><span class="w3-xlarge">Take photos like a pro.</span> You should buy this app because lorem ipsum
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <button class="w3-button w3-light-grey w3-padding-large w3-section w3-hide-small"
                    onclick="document.getElementById('download').style.display='block'">
                    <i class="fa fa-download"></i> Instalar Aplicação
                </button>
                <p>Available for <i class="fa fa-android w3-xlarge w3-text-green"></i> <i
                        class="fa fa-apple w3-xlarge"></i> <i class="fa fa-windows w3-xlarge w3-text-blue"></i></p>
            </div>
            <div class="w3-col l4 m6">
                <img src="assets/w3images/phone-1869510_1920 (1).jpg" class="w3-image w3-right w3-hide-small" width="335"
                    height="471">
                <div class="w3-center w3-hide-large w3-hide-medium">
                    <button class="w3-button w3-block w3-padding-large"
                        onclick="document.getElementById('download').style.display='block'">
                        <i class="fa fa-download"></i> Instalar Aplicação
                    </button>
                    <img src="assets/w3images/internet-4463031_1920.jpg" class="w3-image w3-margin-top" width="335"
                        height="471">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="download" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content" style="padding:32px">
            <div class="w3-container w3-white">
                <i onclick="document.getElementById('download').style.display='none'"
                    class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
                <h2 class="w3-wide">DOWNLOAD</h2>
                <p>Baixe o aplicativo na AppStore, Google Play ou Microsoft Store.</p>
                <i class="fa fa-android w3-large"></i> <i class="fa fa-apple w3-large"></i> <i
                    class="fa fa-windows w3-large"></i>
                <p><input class="w3-input w3-border" type="text" placeholder="Insira seu e-mail"></p>
                <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"
                    onclick="document.getElementById('download').style.display='none'"><a href="#" download="app de vendas">Download</a></button>
            </div>
        </div>
    </div>

    <!-- Clarity Section -->
    <div class="w3-padding-64 w3-light-grey">
        <div class="w3-row-padding">
            <div class="w3-col l4 m6">
                <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="w3images/internet-4463031_1920.jpg"
                    alt="App" width="335" height="471">
            </div>
            <div class="w3-col l8 m6">
                <h1 class="w3-jumbo"><b>Clarity</b></h1>
                <h1 class="w3-xxxlarge w3-text-red"><b>Pixels, who?</b></h1>
                <p><span class="w3-xlarge">A revolution in resolution.</span> Sharp and clear photos with the world's
                    best photo engine, incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="w3-container w3-padding-64 w3-dark-grey w3-center">
        <h1 class="w3-jumbo"><b>Caracteristicas</b></h1>

        <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
                <i class="fa fa-bolt w3-text-orange w3-jumbo"></i>
                <p>Rapido</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-heart w3-text-red w3-jumbo"></i>
                <p>Amavel</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-camera w3-text-yellow w3-jumbo"></i>
                <p>Clarity</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-battery-full w3-text-green w3-jumbo"></i>
                <p>Power</p>
            </div>
        </div>

        <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
                <i class="fa fa-diamond w3-text-white w3-jumbo"></i>
                <p>Inteligente</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-cloud w3-text-blue w3-jumbo"></i>
                <p>Nuvem</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-globe w3-text-amber w3-jumbo"></i>
                <p>Global</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-hdd-o w3-text-cyan w3-jumbo"></i>
                <p>Storage</p>
            </div>
        </div>

        <div class="w3-row" style="margin-top:64px">
            <div class="w3-col s3">
                <i class="fa fa-user w3-text-sand w3-jumbo"></i>
                <p>Seguro</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-shield w3-text-orange w3-jumbo"></i>
                <p>Estavel</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-wifi w3-text-grey w3-jumbo"></i>
                <p>Conectado</p>
            </div>
            <div class="w3-col s3">
                <i class="fa fa-image w3-text-pink w3-jumbo"></i>
                <p>HD</p>
            </div>
        </div>
    </div>

    <?php
    include('pricing.php')
        ?>
    <?php
    include('footer.php')
        ?>

    <script>
        // Slideshow
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>

</body>

</html>