<?php

class Card
{

  public function __construct($destination, $imgDestination)
  {
    echo ('
        <div class="col-sm">
          <div class="card cardDestination">
            <img class="card-img-top" src="../assets/img/' . $imgDestination . '"  alt="Card image cap">
              <div class="card-img-overlay">
                <h5 class="card-title">' . $destination . '</h5>
                  <form action="pageDestination.php" = method="get">
                  <input type ="hidden" name="selectionDestination" value="' . $destination . '">
                  <input type="submit" class="btn btn-outline-light btnDestination" value="Voir nos offres"> 
                  </form>
              </div>
            </div>
          </div>');
  }
}


class CardDestinationTO extends Card
{

  public function __construct($nameTO, $priceDestinationTO, $imgPath, $idOperator, $reviews,$destinationSelectedName, $operatorNumberOfGrade)
  {
    echo ('
          <div class="card" id="cardTO" style="width: 18rem">
          <img class="card-img-top imgTO" src="' . $imgPath . '" alt="Card image cap">
          <div class="card-body cardBodyTO">
            <h5 class="card-title cardNameTO">' . $nameTO . '</h5>
            <p class="card-text"><strong>Séjour à partir de ' . $priceDestinationTO . ' €</strong>.</p>
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal' . $idOperator . '">Plus d\'informations</button>
           
         
         
            </div>
        </div>
        

        <!-- Modal -->
        <div class="modal fade" id="modal' . $idOperator . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">      
           <div class="modal-content">
              <div class="modal-header">
                <img class="imgModalTO" src="' . $imgPath . '"> 
                <p class ="modalGradeTO">'.$operatorNumberOfGrade.' avis</p>
                <img src =../assets/img/stars.png style="width: 100px" class="stars">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body bodyReviews">
              <h4 class="titleReviewsContent">LES AVIS POUR  '.$nameTO.' :</h4>');
            foreach($reviews as $review){
              echo('
              <p>Posté par <strong>'.$review['author'].'</strong> : '.$review['message'].'
              ');
            }

            echo('</div>
            <div class="row justify-content-center">
            <div class="col-md-auto"><hr/>
            <h5 class="titleReviewsContent">DONNER VOTRE AVIS :</h5>
                <form class="formReview" action="../layout/createReview.php" method="post">
                <div class="inputFormReview">
                    <input  type="text" name="review" placeholder="Saisissez votre commentaire" required>
                    <input  type="text" name="nameAuthor" placeholder="Saisissez votre nom " required>
                
                    <select id="grade" name="grade">
                        <option value="" disabled selected>--Attribuez une note--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                  
                    <input type="hidden" name="idOperator" value="'.$idOperator.'">
                  <input type="hidden" name="nameDestination" value="'.$destinationSelectedName.'">
                  </div>
            </div>
        </div>
            <div class="modal-footer">
            <button class="btn btn-outline-secondary type="submit" >Envoyer</button>
            
            </div>
            </form>
          </div>
        </div>
      </div>');
    }
  }

