
<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/try.css">


<?php

include 'head.php';
include 'header.php';
include 'sidebar.php';

?>



<section id="contact">
  <div class="container">
    <form id="contacter" method="GET" name="contacter">
      <h2 class="text-center">deposer une announce ici</h2>
      <div class="form-group">
        <label for="Nom">Nom<font color = "red">*</font></label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
        <span id="missnom"></span>
      </div>
      <div class="form-group">
        <label for="prenm">Prénom<font color = "red">*</font></label>
        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required>
      </div>
      <div class="form-group">
        <label for="email">Email<font color = "red">*</font></label>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <label for="type">Réstesr anonyme<font color = "red">*</font></label>
        <label class="radio-inline">
          <input type="checkbox" name="oui" id="oui" value="oui"  /> Oui
        </label>
        <label class="radio-inline">
          <input type="checkbox" name="non" id="non" value="Non" /> Non
        </label>
      </div>
      <div class="form-group">
        <label for="Nom">Sujet</label>
        <input type="text" class="form-control" name="sujet" id="sujet" placeholder="question, réservation, remarque">
      </div>

      <div class="form-group">
        <label for="textarea">Message<font color = "red">*</font></label>
        <textarea rows="10" type="textarea" class="form-control" name="textarea" id="msg" placeholder="Tapez votre message" required></textarea>
        <input type="hidden" name="idForm" value="contact" />
      </div>
      <div class="form-group">
        <center>
          <button type="submit" id="envoyer" class="btn btn-primary">envoyer</button>
            <p style="color : #a61616; font-size: 30px; " id="erreur"></p>
        </center>
      </div>
    </form>
  </div>

</section>

<?php
include 'footer.php';
?>