<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicons/favicon-16x16.png" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif
        }

        .mySlides {
            display: none
        }
    </style>
    <title>Desenvolvedores</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Navbar -->

    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"
                href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Inicio</a>
            <a href="about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sobre</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Fale Conosco</a>
            <a href="index.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i
                    class="fa fa-close">Sair</i></a>
        </div>
    </div>

    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Fale Conosco</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
    </div>

    <!----Page Content---->

    <div class="w3-content" style="max-width:2000px;margin-top:46px">

        <!-- Automatic Slideshow Images -->
        <div class="mySlides w3-display-container w3-center">
            <img src="assets/w3images/internet-4463031_1920.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="assets/w3images/iphone-410311_1280.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>
        <div class="mySlides w3-display-container w3-center">
            <img src="assets/w3images/mobile-phone-1917737_1920.jpg" style="width:100%">
            <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
            </div>
        </div>

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2 class="w3-wide">Os Criadores</h2>
            <p class="w3-opacity"><i>Amamos Desenvolver</i></p>
            <p class="w3-justify">Somos um jovem grupo de devs que amam criar,testar e implementar sites e aplicativos
                tanto para a web quanto para versões mobile,</p>
            <div class="w3-row w3-padding-32">
                <div class="w3-third">
                    <p>Nicolas</p>
                    <img src="assets/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name"
                        style="width:60%">
                </div>
                <div class="w3-third">
                    <p>Breno</p>
                    <img src="assets/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name"
                        style="width:60%">
                </div>
                <div class="w3-third">
                    <p>Felippe</p>
                    <img src="assets/img/269970301_3101029070212498_3388732059541155046_n.jpg" class="w3-round"
                        alt="Random Name" style="width:60%">
                </div>
            </div>
        </div>

        <!-- Ticket Modal -->
        <div id="ticketModal" class="w3-modal">
            <div class="w3-modal-content w3-animate-top w3-card-4">
                <header class="w3-container w3-teal w3-center w3-padding-32">
                    <span onclick="document.getElementById('ticketModal').style.display='none'"
                        class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
                    <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
                </header>
                <div class="w3-container">
                    <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="How many?">
                    <p><label><i class="fa fa-user"></i> Send To</label></p>
                    <input class="w3-input w3-border" type="text" placeholder="Enter email">
                    <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i
                            class="fa fa-check"></i></button>
                    <button class="w3-button w3-red w3-section"
                        onclick="document.getElementById('ticketModal').style.display='none'">Close <i
                            class="fa fa-remove"></i></button>
                    <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
                </div>
            </div>
        </div>

        <!-- The Contact Section -->
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
            <h2 class="w3-wide w3-center">CONTATO</h2>
            <div class="w3-row w3-padding-32">
                <div class="w3-col m6 w3-large w3-margin-bottom">
                    <i class="fa fa-map-marker" style="width:30px"></i> Guarulhos - SP, BR<br>
                    <i class="fa fa-phone" style="width:30px"></i> Phone: +55 (11)00000-0000<br>
                    <i class="fa fa-envelope" style="width:30px"> </i> Email: suportecodemode@gmail.com<br>
                </div>
                <div class="w3-col m6">
                    <form action="assets/sql/action_page.php" method="post" target="_blank">
                        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Name" required name="Nome">
                            </div>
                            <div class="w3-half">
                                <input class="w3-input w3-border" type="text" placeholder="Email" required email="Email">
                            </div>
                        </div>
                        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Menssagem">
                        <button class="w3-button w3-black w3-section w3-right" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <!----End Page Content---->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Produzido por <a href="#">CodeModeEnterprises</a>
        </p>
    </footer>

    <script>
        // Automatic Slideshow - change image every 4 seconds
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 4000);
        }

        // Used to toggle the menu on small screens when clicking on the menu button
        function myFunction() {
            var x = document.getElementById("navDemo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }
        }

        // When the user clicks anywhere outside of the modal, close it
        var modal = document.getElementById('ticketModal');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>