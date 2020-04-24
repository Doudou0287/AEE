<?php include('server.php');
include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

    <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/register.css">
    
    <div class="header-reg">
            <h2>Login</h2>
    </div>
    <form method="post" action="login.php" class="form-log">
        
    <?php include('errors.php');?>
        <div class="input-group1">
            <label>Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group1">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group1">
            <button type="submit" name="login" class="btn1">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php"> Sign up </a>
        </p>
    </form>

    
    <?php
    include '../../templates/footer.php';
    ?>
