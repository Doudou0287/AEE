<?php include('server.php');

  if (empty($_SESSION['username'])) {
    echo 'Inscrivez-vous pour continuer';
    header('location: register.php');
  }


include '../../templates/sidebar.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>AEE Member</title>
  <?php include '../../templates/header.php';?>

  <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/register.css">
	  </head>
<body>
<div class="content">
  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              <h2>
                <?php if (isset($_SESSION['success'])): ?>
                <div class="error success">
                
                  <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                  ?>
                </div>
                <?php endif ?>
                <?php if(isset($_SESSION["username"])): ?>
                <center>
                <p>Bien venu <strong><?php echo $_SESSION['username']; ?></strong></p>
                
                </center>
                <?php endif ?>
              </h2>
            </a>
          </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Vous êtes maintenant considéré comme un membre de cette société,
et nous sommes ravis que vous nous ayez rejoints <br> 
en tant que membre de cette association, vous pouvez maintenant publier des announces sur les événements et commerces qui vous intéressent ou peut-être des événements que vous créez et souhaitez que des gens vous rejoignent <br>
 <p><a href="formulaire.php?logout='1'" style="color:#a61fff; background: rgba(34, 3, 18, 0.37); float:right;">Logout</a></p></div>
      </div>
    </div>
  
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h2 >deposer une announce d'evenement ici</h2></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <form action="traitement-evenement.php" method="post" id="deposer">
                  
            <div class="form-group">
                    <label for="NOM">Nom<font color = "red">*</font></label>
                      <input type="text" class="form-control" name="NOM" id="NOM" placeholder="NOM" required>
                  </div>
                  <div class="form-group">
                    <label for="PRENOM">Prénom<font color = "red">*</font></label>
                    <input type="text" class="form-control" name="PRENOM" id="PRENOM" placeholder="PRENOM" required>
                  </div>
                                 
                  <div class="form-group">
                    <label for="SUJET">Sujet</label>
                    <input type="text" class="form-control" name="SUJET" id="SUJET" placeholder="question, réservation, remarque">
                  </div>
                      
                  <div class="form-group">
                    <label for="textarea">Message<font color = "red">*</font></label>
                    <textarea rows="10" type="textarea" class="form-control" name="MESSAGE" id="MESSAGE" placeholder="Tapez votre message" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="Links">Link?</label>
                    <input type="text" class="form-control" name="Links" id="Links" placeholder="Veuillez mettre votre lien ici...">
                  </div>
              
                  <div class="form-group">
                    <button type="submit" id="deposer" class="btn btn-primary">Deposer</button>
                    <p style="color : #a61616; font-size: 30px; " id="erreur"></p>
                  </div>
                              
          </form>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h2 >deposer une announce de commerce ici</h2></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <form action="traitement-commerce.php" method="post" id="deposer">
            <div class="form-group">
              <label for="NOM">Nom<font color = "red">*</font></label>
              <input type="text" class="form-control" name="NOM" id="NOM" placeholder="NOM" required>
            </div>
            <div class="form-group">
              <label for="PRENOM">Prénom<font color = "red">*</font></label>
              <input type="text" class="form-control" name="PRENOM" id="PRENOM" placeholder="PRENOM" required>
            </div>
               
            <div class="form-group">
              <label for="SUJET">Sujet</label>
              <input type="text" class="form-control" name="SUJET" id="SUJET" placeholder="question, réservation, remarque">
            </div>

            <div class="form-group">
              <label for="textarea">Message<font color = "red">*</font></label>
              <textarea rows="10" type="textarea" class="form-control" name="MESSAGE" id="MESSAGE" placeholder="Tapez votre message" required></textarea>
            </div>

            <div class="form-group">
              <label for="Links">Link?</label>
              <input type="text" class="form-control" name="Links" id="Links" placeholder="Veuillez mettre votre lien ici...">
            </div>
                
            <div class="form-group">
              <button type="submit" id="deposer" class="btn btn-primary">Deposer</button>
              <p style="color : #a61fff; font-size: 30px; " id="erreur"></p>
            </div>
      
          </form>
        </div>
      </div>
    </div> 
  </div>

      
</div>
<?php
		    include '../../templates/footer.php';
?>

</body>
</html>

