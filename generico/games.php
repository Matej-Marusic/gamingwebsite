<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Generico | Games</title>
        <!--favicon-->
        <link rel="icon" href="assets/img/favicon.ico" type="image/ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="jajajajja"> <!-- uštimaj to na koncu -->
        <meta name="author" content="Matej">
        <meta name="generator" content=""> <!-- ta ni važen -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet"> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- header --->
        <?php include 'include/header.html';?>

        <main>
            <!-- sredinski del strani -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-1 p-3 bg-black">
                        <!-- levi sidebar -->
                        <?php include 'include/Lsidebar.html';?>
                    </div>

                    <!-- primer kart + transitions na mouseover -->
                    <!-- slike kart naj so zaenkrat 400 x 300px -->
                    <div class="col-sm-10 p-3 bg-black">
                        <h1>Games</h1>
                        
                    </div>
                    <div class="col-sm-1 p-3 bg-black"></div>
                </div>
            </div>
            <div class="container-fluid">
                <?php include 'include/gamecard1.html';?>
            </div>
        </main>


        <!-- footer --->
        <?php include 'include/footer.html';?>

    </body>
</html> 