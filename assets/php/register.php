<?php include('server.php');
 include '../../templates/lang.php';
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

    <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/register.css">

    <div class="header-reg">
            <h2><?php echo $lang['i'] ?></h2>
    </div>
    <form method="post" id="registeration" action="<?php echo $lang['link4'] ?>" class="form-log">
        <?php include('errors.php'); ?>
<p id="erreur1"></p>
            <div class="input-group1">
        	 <label><?php echo $lang['u'] ?></label>
	         <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            

            <div class="input-group1">
                <label><?php echo $lang['e'] ?></label>
                <input type="text" id="email1" name="email1" value="<?php echo $email; ?>">
            </div>

           <div class="input-group1">
                <label><?php echo $lang['p'] ?></label>
                <input type="password" name="password_1">
           </div>
           <div class="input-group1">
                <label><?php echo $lang['p1'] ?></label>
                <input type="password" name="password_2">
           </div>
           <div class="input-group1">
			    <button type="submit" id="register" name="register" class="btn1"><?php echo $lang['i1'] ?></button>
			</div>
			<p>
            <?php echo $lang['i2'] ?> <a href="<?php echo $lang['link6'] ?>"> <?php echo $lang['i3'] ?> </a>
            </p>
 </form>

 
 
<script src="http://localhost/programmation-web-2---s4---2020-master/assets/js/register.js"></script>
    <?php
    include '../../templates/footer.php';
    ?>


