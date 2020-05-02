<?php 
 include '../../templates/lang.php';
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>
<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/form.css">
<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/form.css">


<?php
    $bdd = new PDO('mysql:host=localhost;dbname=aee','root','');
    
    $rech = $bdd->query('SELECT * FROM announce ORDER BY DATE_MESSAGE DESC');
    if(isset($_GET['q']) AND !empty($_GET['q'])){
        $q = htmlspecialchars($_GET['q']);

        $rech = $bdd->query('SELECT * FROM announce WHERE SUJET LIKE "%'.$q.'%" ORDER BY DATE_MESSAGE DESC ');
        if($rech->rowCount() == 0){
            $rech = $bdd->query('SELECT * FROM announce WHERE CONCAT(NOM, PRENOM, SUJET, MESSAGE, DATE_MESSAGE) LIKE "%'.$q.'%" ORDER BY DATE_MESSAGE DESC ');
        }
    }
      
    $rech1 = $bdd->query('SELECT * FROM announce1 ORDER BY DATE_MESSAGE DESC');
    if(isset($_GET['q']) AND !empty($_GET['q'])){
       $q = htmlspecialchars($_GET['q']);

       $rech1 = $bdd->query('SELECT * FROM announce1 WHERE SUJET LIKE "%'.$q.'%" ORDER BY DATE_MESSAGE DESC ');
       if($rech1->rowCount() == 0){
            $rech1 = $bdd->query('SELECT * FROM announce1 WHERE CONCAT(NOM, PRENOM, SUJET, MESSAGE, DATE_MESSAGE) LIKE "%'.$q.'%" ORDER BY DATE_MESSAGE DESC ');
       }
    }

?>

<form  method="GET">
    <!-- <div ><span class="search-box">
         <input class="search-txt" type="search" name="q" placeholder="hiiiiiiiiiiiiiiii<?php echo $lang['r'] ?>"> -->
        <!-- <input type="text" name="q" class="search-txt" placeholder="Search..." />
         </span>
            <button style="height: 35px" type="submit" class="search-btn">
                <i class="fa fa-search"></i>
            </button> -->
        
    <!-- </div> -->

    <!-- <div style="width: 900px" class="container-fluid tmargin"> -->
        <!-- <div class="input-group"> -->
            <!-- <input type="search" name="q" class="form-control" placeholder="Search..." /> -->
            <!-- <span class="input-group-btn">
                <button style="height: 35px" type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </div> -->

    
    <li class="nav item">
        <div class="search-box">
            <input class="search-txt" type="search" name="q" placeholder="<?php echo $lang['page'] ?>">
            <button  class="search-btn" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>

    </li>


</form>

    
<?php if($rech->rowCount() > 0) { ?>
    <table>
    <?php while($a = $rech->fetch()) {?>
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
        <tbody>
            <tr>
            
                <th  scope="row"><?= $a['DATE_MESSAGE']?></th>
                <td><?= $a['NOM']?></td>
                <td><?= $a['PRENOM']?></td>
                <td><?= $a['SUJET']?></td>
                <td><?= $a['MESSAGE']?></td>
                <td class="text"><a href="<?= $a['LINKS']?>"  target="_balnk"><?php echo $lang['rm'] ?></a></td>
            
    
            </tr>         
        </tbody>
    <?php }?>





    </table>
    <?php } else { ?>
        Aucun resultat pour: <?= $q ?>  dans le tableau de commerce...
    <?php } ?>


    <?php if($rech1->rowCount() > 0) { ?>
    <table>
    <?php while($a1 = $rech1->fetch()) {?>
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
        <tbody>
            <tr>
            
                <th  scope="row"><?= $a1['DATE_MESSAGE']?></th>
                <td><?= $a1['NOM']?></td>
                <td><?= $a1['PRENOM']?></td>
                <td><?= $a1['SUJET']?></td>
                <td><?= $a1['MESSAGE']?></td>
                <td class="text"><a href="<?= $a1['LINKS']?>"  target="_balnk"><?php echo $lang['rm'] ?></a></td>
            
    
            </tr>         
        </tbody>
    <?php }?>






    </table>
    <?php } else { ?>
        Aucun resultat pour: <?= $q ?> ...
    <?php } ?>

   
    <?php
include '../../templates/footer.php';
?>

