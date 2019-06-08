<?php
//echo '<pre>' . var_export($_POST, true) . '</pre>';

require('objects/manager.php');
require('objects/bdd.php');
require('objects/destination.php');
require('objects/tour_operator.php');


session_start();
if (isset( $_POST['location'])){
    $_SESSION['location'] = $_POST['location'];

}

$location = $_SESSION['location'];

$manager = new Manager($bdd);
$locationByOperators = $manager->getOperateurByDestination($location);

//echo '<pre>' . var_export($locationByOperators, true) . '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
    <div class="card-deck my-3 mx-2">
        <?php 
            foreach($locationByOperators as $locationByOperator){
                $destination = new Destination($locationByOperator['id'], 
                                               $locationByOperator['location'], 
                                               $locationByOperator['price'], 
                                               $locationByOperator['id_tour_operator'],
                                               $locationByOperator['image']);

                $operator = new TourOperator($locationByOperator['id'], 
                                             $locationByOperator['name'], 
                                             $locationByOperator['grade'], 
                                             $locationByOperator['link'], 
                                             (int)$locationByOperator[4]);
        ?>
      
            
            <div class="col-4">
                <form action="reviews.php" method="post" class="card">
                    <input type="hidden" name="id_tour" value="<?= $destination->getId_tour_operator() ?>"> 
                    <button class="card-button" name="operator" value="<?=$operator->getName()?>" type="submit">
                        <div class="card-body">
                            <p class="card-text border border-dark">
                                <span class="float-left"><strong><?php echo $operator->getName() ?></strong></span>
                                <?php for( $i = 0 ; $i < $operator->getGrade(); $i++){
                                    echo '<span class="float-right"><i class="text-warning fa fa-star"></i></span>'; 
                                }
                                ?>
                            </p>
                            <div class= "taille mx-auto">
                                <img class="card-img-top" src="img/<?= $destination->getImage() ?>"  alt="...">
                            </div>  
                            <h4 class="card-title"><?php echo $destination->getLocation() ?></h4>
                            <?php if($operator->getIsPrenium() == 1){
                                ?>
                            <a href="<?= $operator->getLink(); ?>" target="_blank" >Lien</a>
                            <?php
                            
                                }
                            ?>
                            <div class="">
                                <p class="prix" class="col-sm"><?php echo 'A partir de'. ' ' . $destination->getPrice().' €/pers'?></p>
                                <p class="commentaires"><small class="font-weight-bold text">Blog</small></p>
                            </div>
                        </div>
                    </button>
                </form>
            </div>
        <?php
            }
            ?>
    </div>

    

     <!-- footer -->
     <footer class="footer-operator">
  
    <?php include 'partial/footer.php' ?>
  
</footer>



    <!-- footer end -->
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>
</html>