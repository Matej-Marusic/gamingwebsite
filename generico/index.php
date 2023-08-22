<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Generico</title>
        <!--favicon-->
        <link rel="icon" href="assets/img/favicon.ico" type="image/ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="jajajajja"> <!-- uštimaj to na koncu -->
        <meta name="author" content="Matej">
        <meta name="generator" content=""> <!-- ta ni važen -->
        <link href="assets/css/bootstrap.css" rel="stylesheet"> 
        <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- gumb za skočit na vrh strani-->
        <button onclick="topFunction()" id="BtnToTop" title="Go to top">&uarr;</button>
        <script>
            // Get the button
            let mybutton = document.getElementById("BtnToTop");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <!-- header --->
        <?php include 'include/header.html';?>

        <main> 
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 p-3 bg-black">

                        <!-- levi sidebar -->
                        <?php include 'include/Lsidebar.html';?>
                    </div>

                    <!-- sredinski del strani -->
                    <div class="col-sm-10 p-3 bg-black">
                        <h1>Ime_podjetja<br> </h1>

                        <p>
                            When you<br>
                            Yo, this thing is so springly, but if i increase the bongle meter it becomes sproingly. Toan.<br><br>
                        </p>


                        <div class="row p-3 bg-info">
                            <h2 >Ime_igre is out now!</h2>
                            <p>
                                Will you change your ways? Or will you beg for forgiveness to an audience of deaf ears?<br>

                            </p>
                            <!-- carousel -->
                            <!-- slike naj so 16:9 2k rezolucija-->
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-theme="dark">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/houston.png" class="img-fluid" alt="Logo"> 
                                    </div>

                                    <div class="carousel-item">
                                        <img src="assets/img/slika5.png" class="img-fluid" alt="Logo"> 
                                    </div>

                                    <div class="carousel-item">
                                        <img src="assets/img/slika6.png" class="img-fluid" alt="Logo"> 
                                    </div>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                    <span>&#9664;</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                    <span>&#9654;</span>
                                </button>
                            </div>

                        </div>
                        <p>
                            You can get it on <a href="#">scringlo</a> or <a href="#">binglo</a>
                        </p>
                    </div>

                    <div class="col-sm-1 p-3 bg-black"></div>
                </div>
            </div>
        </main>

        <!-- footer --->
        <?php include 'include/footer.html';?>

    </body>
</html> 