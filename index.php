<!DOCTYPE html>
        <head>
            <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<?php 
include "database.php";
if(isset($_POST['nomemp']) && isset($_POST['matr']) && isset($_POST['poste']) && isset($_POST['supr']) && isset($_POST['datemp']) && isset($_POST['salaire']) && isset($_POST['comm']) && isset($_POST['service'])){
    
    $nom = $_POST['nomemp'];
    $matr = $_POST['matr'];
    $poste = $_POST['poste'];
    $supr = $_POST['supr'];
    $date = $_POST['datemp'];
    $salaire = $_POST['salaire'];
    $com = $_POST['comm'];
    $ser = $_POST['service']; 
    
    $insert = $db->prepare('INSERT INTO `emp` (`matr`, `nomemp`, `poste`, `super`, `datemp`, `salaire`, `comm`, `service`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)
');
    $insert->execute(array($matr, $nom, $poste, $supr, $date, $salaire, $com, $ser));
    echo "<div class=\"alert alert-success\">Bien ajouté</div>";
    
    
}


?>
<div class="row">
    <br>
<div class="panel panel-success">
             
             
             <form class="form-horizontal" method="post" action="" name="ContactForm" id="contact">
              
              <div class="form-group">
                <label class="col-lg-3 control-label ">Case Nomemp</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="nomemp" id="name" placeholder="Case Nomemp">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-3 control-label ">Case matr</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="matr" id="email" placeholder="Case matr">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-3 control-label ">Case poste</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="poste" id="phone" placeholder="Case Poste">
                </div>
              </div>
                 <div class="form-group">
                <label class="col-lg-3 control-label ">Case datemp</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="datemp" id="phone" placeholder="Case datemp">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label ">Case supr</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="supr" id="phone" placeholder="Case supr">
                </div>
              </div>
                 <div class="form-group">
                <label class="col-lg-3 control-label ">Case salaire</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="salaire" id="phone" placeholder="Case salaire">
                </div>
              </div>
                 <div class="form-group">
                <label class="col-lg-3 control-label ">Case comm</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="comm" id="phone" placeholder="Case comm">
                </div>
              </div>
                 <div class="form-group">
                <label class="col-lg-3 control-label ">Case service</label>
                <div class="col-lg-4">
                  <input type="text" class="form-control" name="service" id="phone" placeholder="Case service">
                </div>
              </div>
           
              
              <div class="form-group">
              
              
            
              
               
            
              <div class="form-group">
                <label class="col-lg-3 control-label"></label>
                <div class="col-lg-4">
                
                    <input type="submit" id="submit" value="Envoyer" class="btn btn-success">
                </div>
              </div>
            </form>
             
             
            </div>
</div>
    </html>
