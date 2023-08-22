<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Generico | News</title>
        <!--favicon-->
        <link rel="icon" href="assets/img/favicon.ico" type="image/ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="jajajajja"> <!-- uštimaj to na koncu -->
        <meta name="author" content="Matej">
        <meta name="generator" content=""> <!-- ta ni važen -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet"> 
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
            <!-- sredinski del strani -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-1 p-3 bg-black">
                        <!-- levi sidebar -->
                        <?php include 'include/Lsidebar.html';?>
                    </div>

                    <div class="col-sm-10 p-3 bg-black">
                        <h1>News from the provinces</h1>
                        <!-- objave -->
                        <div class="row">
                            <?php require 'include/controller.php'; ?>
                            <?php 
                            $post = new Post;
                            $fetch_post = $post->readAllPost();
                            foreach ($fetch_post as $value):
                            ?>
                            <div class="card-post-preview">
                                <a href="single_post.php?id=
                                         <?php echo $value->id; ?>">
                                    <?php echo $value->title; ?>
                                </a>
                                
                                <a href="single_post.php?id=
                                         <?php echo $value->id; ?>">
                                    <?php echo substr($value->content, 0,100); 
                                    ?>&nbsp;

                                    <button type="button" class="btn btn-wideass">&#8594;</button>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- footer --->
        <?php include 'include/footer.html';?>
    </body>
</html> 