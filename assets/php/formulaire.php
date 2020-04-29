<?php include('server.php');
 include '../../templates/lang.php';
 $link3 = $lang['link6'];
  if (empty($_SESSION['username'])) {
    echo 'Inscrivez-vous pour continuer';
    header("refresh:2; url=$link3");
    //header('location: register.php');
  }


include '../../templates/sidebar.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>AEE Member</title>
  <?php include '../../templates/header.php';?>

  <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/register.css">
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
                <p><?php echo $lang['bv'] ?><strong><?php echo $_SESSION['username']; ?></strong></p>
                
                </center>
                <?php endif ?>
              </h2>
            </a>
          </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><?php echo $lang['mm'] ?> <br>
          <p>
            <a href="<?php echo $lang['link7'] ?>" style="color:#a61fff; background: rgba(34, 3, 18, 0.37); float:right;"><?php echo $lang['lo'] ?></a>
          </p>
        </div>
      </div>
    </div>
  
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h2 ><?php echo $lang['l2'] ?></h2></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <form action="traitement-evenement.php" method="post" id="deposer">
                  
            <div class="form-group">
                    <label for="NOM"><?php echo $lang['t2'] ?><font color = "red">*</font></label>
                      <input type="text" class="form-control" name="NOM" id="NOM" placeholder="<?php echo $lang['t2'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="PRENOM"><?php echo $lang['t3'] ?><font color = "red">*</font></label>
                    <input type="text" class="form-control" name="PRENOM" id="PRENOM" placeholder="<?php echo $lang['t3'] ?>" required>
                  </div>
                                 
                  <div class="form-group">
                    <label for="SUJET"><?php echo $lang['t4'] ?></label>
                    <input type="text" class="form-control" name="SUJET" id="SUJET" placeholder="question, réservation, remarque">
                  </div>
                      
                  <div class="form-group">
                    <label for="textarea"><?php echo $lang['t5'] ?><font color = "red">*</font></label>
                    <textarea rows="10" type="textarea" class="form-control" name="MESSAGE" id="MESSAGE" placeholder="<?php echo $lang['r'] ?>" required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="Links"><?php echo $lang['t6'] ?>?</label>
                    <input type="text" class="form-control" name="Links" id="Links" placeholder="Veuillez mettre votre lien ici...">
                  </div>
              
                  <div class="form-group">
                    <button type="submit" id="deposer" class="btn btn-primary"><?php echo $lang['s'] ?></button>
                    <p style="color : #a61616; font-size: 30px; " id="erreur"></p>
                  </div>
                              
          </form>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h2 ><?php echo $lang['l1'] ?></h2></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <form action="traitement-commerce.php" method="post" id="deposer">
            <div class="form-group">
              <label for="NOM"><?php echo $lang['t2'] ?><font color = "red">*</font></label>
              <input type="text" class="form-control" name="NOM" id="NOM" placeholder="<?php echo $lang['t2'] ?>" required>
            </div>
            <div class="form-group">
              <label for="PRENOM"><?php echo $lang['t3'] ?><font color = "red">*</font></label>
              <input type="text" class="form-control" name="PRENOM" id="PRENOM" placeholder="<?php echo $lang['t3'] ?>" required>
            </div>
               
            <div class="form-group">
              <label for="SUJET"><?php echo $lang['t4'] ?></label>
              <input type="text" class="form-control" name="SUJET" id="SUJET" placeholder="question, réservation, remarque">
            </div>

            <div class="form-group">
              <label for="textarea"><?php echo $lang['t5'] ?><font color = "red">*</font></label>
              <textarea rows="10" type="textarea" class="form-control" name="MESSAGE" id="MESSAGE" placeholder="<?php echo $lang['r'] ?>" required></textarea>
            </div>

            <div class="form-group">
              <label for="Links"><?php echo $lang['t6'] ?>?</label>
              <input type="text" class="form-control" name="Links" id="Links" placeholder="Veuillez mettre votre lien ici...">
            </div>
                
            <div class="form-group">
              <button type="submit" id="deposer" class="btn btn-primary"><?php echo $lang['s'] ?></button>
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

