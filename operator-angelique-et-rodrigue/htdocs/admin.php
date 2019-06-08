<?php
require('partials/nav.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
  .panel-title {
    margin-left: 300px;
  }

  .card-body {
    margin-left: 300px;
  }

  .btn {
    margin-left: 200px;
  }
</style>

<body>
  <!---------------------------------- Formulaire ajout destination ---------------------------------->

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ajout Destination</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-12">
                <select id="inputState" class="form-control">
                  <option selected>Choose Tour Opérator...</option>
                  <option>Club Med</option>
                  <option>Le Petit Futé</option>
                  <option>ThomasCook</option>
                  <option>Jet-Tours</option>
                </select><br>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="location"><br>
              </div>
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="price"><br>
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="image"><br>
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!---------------------------------- Formulaire ajout Tour Operator ---------------------------------->

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ajout Tour Operator</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-12">
                <select id="inputState" class="form-control">
                  <option selected>Choose Tour Opérator...</option>
                  <option>Club Med</option>
                  <option>Le Petit Futé</option>
                  <option>ThomasCook</option>
                  <option>Jet-Tours</option>
                </select><br>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="name"><br>
              </div>
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="grade"><br>
              </div>
              <div class="col-12">
                <input type="text" class="form-control" placeholder="image"><br>
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!---------------------------------- Formulaire ajout premium ---------------------------------->

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Ajout Premium</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-row">
              <div class="form-group col-12">
                <select id="inputState" class="form-control">
                  <option selected>Choose Tour Opérator...</option>
                  <option>Club Med</option>
                  <option>Le Petit Futé</option>
                  <option>ThomasCook</option>
                  <option>Jet-Tours</option>
                </select><br>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-6">
                <input type="text" class="form-control" placeholder="Premium"><br>
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div><br><br><br><br><br><br><br>

  <? require('partials/footer.php'); ?>

</body>

</html>