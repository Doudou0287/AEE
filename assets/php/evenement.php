<?php 
 include '../../templates/lang.php';
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>
<?php

$con = new PDO('mysql:host=localhost;dbname=aee','root','');

$pdoStat = $con->prepare('SELECT * FROM announce1 ORDER BY DATE_MESSAGE DESC');

$execute = $pdoStat->execute();

$commerces = $pdoStat->fetchAll();

?>
   <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/form.css">


   <section>
	<h3 class="try"><?php echo $lang['l2'] ?></h3>
    <table>
        
        <thead>
        <tr>
                <th scope="col"><span><?php echo $lang['t1'] ?></span></th>
                <th scope="col"><span ><?php echo $lang['t2'] ?></span></th>
                <th scope="col"><span ><?php echo $lang['t3'] ?></span></th>
                <th scope="col"><span ><?php echo $lang['t4'] ?></span></th>
                <th scope="col"><span ><?php echo $lang['t5'] ?></span></th>
                <th scope="col"><span ><?php echo $lang['t6'] ?></span></th>

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
                <td class="text"><a href="<?= $announce['LINKS']?>"  target="_balnk"><?php echo $lang['rm'] ?></a></td>
            </tr>

        </tbody>
        <?php endforeach; ?>
    </table>	

</section>




<center>
    <button style="background: hsla(325, 10%, 47%, 0.342);" onclick="location.href='<?php echo $lang['link5'] ?>'" type="button">
        <h2 ><?php echo $lang['d1'] ?></h2>
        </button> 
    </center> 
                
         
<?php
include '../../templates/footer.php';
?>

