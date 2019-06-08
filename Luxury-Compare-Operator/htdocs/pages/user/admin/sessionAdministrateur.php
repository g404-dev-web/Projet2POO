<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ComparOperator</title>

    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/header.css">
    <link rel="stylesheet" href="../../../assets/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php require('../../../assets/bdd/bdd.php'); ?>
  


</head>

<body>



    <?php
    // Les objets //
    include('../../../assets/objets/Manager.php');
    include('../../../assets/objets/Destination.php');
    include('../../../assets/objets/TourOperator.php');
    include('../../../assets/objets/Review.php');


    $manager = new Manager($db);
    $tourOps = $manager->getAllOperator();
    $destinations = $manager->getAllDestination();

    ?>
    <div class="header">

        <a href="index.php" class="logo"><img id="logo" src="../../../assets/images/logo.png" alt="logo"></a>


        <div class="header-right">
            <h1>Compare Operator </h1>
            <a href="../index.php">Accueil</a>
            <a href="#messages">Messages</a>
            <a href="#profil">Profil</a>
            <a href="#"></a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="recherche" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Rechercher</button>
            </form>

        </div>
    </div>

    <div style="padding-left:20px">

    </div>

    <h1>Session Administrateur</h1>

    <?php
    if (isset($_GET['success'])) {
        if ($_GET['success'] == 1) {
            echo "Création de Tour Opérateur réussi";
        } else if ($_GET['success'] == 2) {
            echo "Création de destination Réussi";
        } else if ($_GET['success'] == 3) {
            echo "Mise à jour Premium Réussi";
        };
    }


    ?>


<br><br>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="http://www.explora5terre.it/wp-content/uploads/2016/06/logo_fc.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Créer un Tour Opérateur</h5>
                <form action="traitements/createTo.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nom Opérateur</label>

                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom opérateur">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link</label>

                        <input name="link" type="url" class="form-control" id="exampleFormControlInput1" placeholder="link">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Étoiles</label>
                        <select name="grade" class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, possimus!
                        Blanditiis corrupti at a nam voluptates voluptatibus nulla architecto. Possimus aperiam odio magni
                        veritatis assumenda quasi necessitatibus quo libero deleniti?</p>
                    <button class="btn btn-warning" type="submit">Créer</button>
                    <div class='card_circle transition'></div>
            </div>


            </form>
        </div>

        <div class="card">
            <img class="card-img-top" src="https://www.enfant-en-voyage.com/wp-content/uploads/2015/04/panneau-des-pays-destination.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Créer une Destination</h5>
                <form action="traitements/createDestination.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Destination</label>
                        <select name="location" class="form-control" id="exampleFormControlSelect1">
                            <?php foreach ($destinations as $destination) {
                                echo "<option>" . $destination['location'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Prix</label>
                        <input name="price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tour Opérateur</label>
                        <select name="tourOp" class="form-control" id="exampleFormControlSelect1">
                            <?php foreach ($tourOps as $tourOp) {
                                echo "<option>" . $tourOp['name'] . "</option>";
                            } ?>
                        </select>
                    </div>

                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, possimus!
                        Blanditiis corrupti at a nam voluptates voluptatibus nulla architecto. Possimus aperiam odio magni
                        veritatis assumenda quasi necessitatibus quo libero deleniti?</p>
                        <button class="btn btn-warning" type="submit">Créer</button>
                    <div class='card_circle transition'></div>
                        </form>
            </div>
        </div>




        <div class="card">
            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ3y3mmpgQAFoaF9jC0gaVVYAT2iB4xKqxP-Geze5BuIQNmtui" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Premium</h5>
                <form action="traitements/setPremium.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tour Opérateur</label>

                        <select name="tourOp" class="form-control" id="exampleFormControlSelect1">
                            <?php foreach ($tourOps as $tourOp) {
                                echo "<option>" . $tourOp['name'] . "</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Premium</label>
                        <select name="premium" class="form-control" id="exampleFormControlSelect1">
                            <option>oui</option>
                            <option>non</option>

                        </select>
                    </div>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dicta autem officia libero facere fugit labore recusandae! Deserunt qui esse tenetur sequi ullam voluptatum ex aut maiores optio, aliquam voluptates.</p>
                    <button class="btn btn-warning" type="submit">Créer</button>
                    <div class='card_circle transition'></div>
            </div>
                        </form>

        </div>
    </div>
    <br>



    <?php include('../../../partials/footer.php'); ?>

    <script src="../../../assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8f54a4528c.js"></script>

</body>

</html>