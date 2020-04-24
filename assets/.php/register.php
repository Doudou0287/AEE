<?php include('sever.php');
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

    <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/register.css">

    <div class="header-reg">
            <h2>Inscription</h2>
    </div>
    <form method="post" action="register.php" class="form-log">
        <?php include('errors.php'); ?>

            <div class="input-group1">
        	 <label>Username</label>
	         <input type="text" name="username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group1">
                <label>Email</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
            </div>
           <div class="input-group1">
                <label>Password</label>
                <input type="password" name="password_1">
           </div>
           <div class="input-group1">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
           </div>
           <div class="input-group1">
																					                <button type="submit" name="register" class="btn1">Register</button>
																					        </div>
																					        <p>
																					            Already a member? <a href="login.php"> Sign in </a>
            </p>
 </form>

    <?php
    include '../../templates/footer.php';
    ?>


