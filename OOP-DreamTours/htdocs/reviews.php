<?php
//echo '<pre>' . var_export($_POST, true) . '</pre>';

require('objects/manager.php');
require('objects/bdd.php');
require('objects/review.php');
require('objects/tour_operator.php');

session_start();
if (isset( $_POST['id_tour'])){
$_SESSION['id_tour'] = $_POST['id_tour'];
$_SESSION['operator'] = $_POST['operator'];


}


$idTourOperator = $_SESSION['id_tour'];
$tourOperator = $_SESSION['operator'];

$manager = new Manager($bdd);
$reviewByOperators = $manager->getReviewByOperator($tourOperator);


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
    <div class="container">            
        <h2 class="text-center"><?php echo $tourOperator ?></h2>
        <h3 class="text-center">Commentaires et Notes</h3>
        <div class="row">
            <div class="col align-self-start" stify-content-col-3">

            
         <div class="notes">
        <?php 
            foreach($reviewByOperators as $reviewByOperator){
                $review = new Review($reviewByOperator['id'], $reviewByOperator['message'], $reviewByOperator['author'], $reviewByOperator['rate'], $reviewByOperator['id_tour_operator']);
                $operator = new TourOperator($reviewByOperator['id'], $reviewByOperator['name'], $reviewByOperator['grade'], $reviewByOperator['link'], (int)$reviewByOperator[4]);
        ?>
      
            <div class="card-comment">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <span class="float-left colorblog"><strong><?php echo $review->getAuthor() ?></strong></span>
                                <?php for( $i = 0 ; $i < $review->getRate(); $i++){
                                    echo '<span class="float-right"><i class="text-warning fa fa-star"></i></span>'; 
                                }
                                ?>
                        </p>
                        <div class="clearfix"></div>
                            <p><?php echo $review->getMessage() ?></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
    
    <?php
            }
            ?>
        </div>  
    </div>

    <div class="container my-2">
        <h3 class="text-center">Blog</h3>
            <div class="widget-area no-padding blank">
                <div class="status-upload">
                    <form action="partial/traitment.php" method="post">
                        <textarea name="message" placeholder="commentaires" class="form-control" rows="3" required></textarea>
                        <div class="row">
                            <div class="rating row col d-flex justify-content-around">
                                <p> Note sur 5</p>
                                <div class="note">
                                    <input name="rate" value="5" id="e5" type="radio"></a><label for="e5">★</label>
                                    <input name="rate" value="4" id="e4" type="radio"></a><label for="e4">★</label>
                                    <input name="rate" value="3" id="e3" type="radio"></a><label for="e3">★</label>
                                    <input name="rate" value="2" id="e2" type="radio"></a><label for="e2">★</label>
                                    <input name="rate" value="1" id="e1" type="radio"></a><label for="e1">★</label>
                                </div>
                            </div>
                            <input class="champ" type="text" placeholder="signature" name="author" required>
                            <button type="submit" class="btn btn-success mx-2"><i class="fa fa-share"></i> Share</button>
                            <input  type="hidden" name="id_tour_operator" value="<?= $idTourOperator ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
        
    <a href="operator.php"><button>Retour aux operateurs</button></a>
    

    <!-- footer -->
    <footer>
        <?php include 'partial/footer.php' ?>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>
</html>