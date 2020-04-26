<?php include('server.php');
 include '../../templates/lang.php';
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

    <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/register.css">
    
    <div class="header-reg">
            <h2><?php echo $lang['i3'] ?></h2>
    </div>
    <form method="post" action="login.php" class="form-log">
        
    <?php include('errors.php');?>
        <div class="input-group1">
            <label><?php echo $lang['u'] ?></label>
            <input type="text" name="username">
        </div>

        <div class="input-group1">
            <label><?php echo $lang['p'] ?></label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group1">
            <button type="submit" name="login" class="btn1"><?php echo $lang['i3'] ?></button>
        </div>
        <p>
        <?php echo $lang['i4'] ?> <a href="register.php"> <?php echo $lang['i1'] ?> </a>
        </p>
    </form>

    
    <?php
    include '../../templates/footer.php';
    ?>
