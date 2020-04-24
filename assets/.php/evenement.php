<?php

$con = new PDO('mysql:host=localhost;dbname=aee','root','');

$pdoStat = $con->prepare('SELECT * FROM announce1 ORDER BY DATE_MESSAGE DESC');

$execute = $pdoStat->execute();

$commerces = $pdoStat->fetchAll();

include '../../templates/header.php';
include '../../templates/sidebar.php';
?>
   <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/form.css">


   <section>
	<h3 class="try">LISTE DES ANNOUNCES DES EVENEMENT</h3>
    <table>
        
        <thead>
            <tr>
                <th scope="col"><span>DATE</span></th>
                <th scope="col"><span >NOM</span></th>
                <th scope="col"><span >PRENOM</span></th>
                <th scope="col"><span >SUJET</span></th>
                <th scope="col"><span >ANNOUNCE</span></th>
                <th scope="col"><span >LINKS</span></th>

            </tr>
        </thead>
        <?php foreach ($commerces as $announce): ?>
	    <tbody>

            <tr>
                <th  scope="row"><?= $announce['DATE_MESSAGE']?></th>
                <td><?= $announce['NOM']?></td>
                <td><?= $announce['PRENOM']?></td>
                <td><?= $announce['SUJET']?></td>
                <td><?= $announce['MESSAGE']?></td>
                <td class="text"><a href="<?= $announce['LINKS']?>">Savoir plus</a></td>
            </tr>

        </tbody>
        <?php endforeach; ?>
    </table>	

</section>




<center>
    <button style="background: hsla(325, 10%, 47%, 0.342);" onclick="location.href='http://localhost/programmation-web-2---s4---2020-master/assets/.php/register.php'" type="button">
        <h2 >deposer une announce d'evenement ici</h2>
        </button> 
    </center> 
                
         
<?php
include '../../templates/footer.php';
?>

