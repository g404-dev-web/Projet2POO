<?php

require('objects/manager.php');
require('objects/bdd.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Signika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Signika&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <!-- header -->
    <header>
        <?php include 'partial/header.php' ?>
    </header>
    <!-- header end -->
    <form action="operator.php" method="post" class="form">
        <div class="card-deck mt-3 mx-2">
            <div class="card">
                <button class="card-button" name="location" value="corse" type="submit">
                <div class= "taille mx-auto">
                    <img class="card-img-top" src="img/corse.jpg"  alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Corse</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="martinique" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/martinique.jpeg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Martinique</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="florence" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/florence.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Florence</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content. </p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="barcelone" type="submit">
                    <div class= "taille mx-auto">
                        <img src="img/barcelone.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Barcelone</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content. </p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="dublin" type="submit">
                    <div class= "taille mx-auto">
                        <img src="img/dublin.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Dublin</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content. </p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
        </div>

        <div class="card-deck mt-3 mb-3 mx-2">
            <div class="card">
                <button class="card-button" name="location" value="kabira ishigaki" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/kabira_ishigaki.jpeg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Kabira Ishigaki</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="nice" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/nice.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Nice</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="sicile" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/sicile.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Sicile</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
            <div class="card">
                <button class="card-button" name="location" value="guilin" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/guilin.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Guilin</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>

            <div class="card">
                <button class="card-button" name="location" value="da balaia" type="submit">
                <div class= "taille mx-auto">
                    <img src="img/da_balaia.jpeg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Da Balaia</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="font-weight-bold text-success">OPERATOR</small></p>
                    </div>
                </button>
            </div>
        </div>
    </form>


    <!-- footer -->
    <footer class="">
        
            <?php include 'partial/footer.php' ?>
        
    </footer>



    <!-- footer end -->
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>