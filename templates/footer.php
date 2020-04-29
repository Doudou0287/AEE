<?php include('lang.php');?>
<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/footer.css">


<footer>

    
    <div class="wave-container2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFF" fill-opacity="1" d="M0,192L30,213.3C60,235,120,277,180,288C240,299,300,277,360,240C420,203,480,149,540,122.7C600,96,660,96,720,117.3C780,139,840,181,900,208C960,235,1020,245,1080,224C1140,203,1200,149,1260,133.3C1320,117,1380,139,1410,149.3L1440,160L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
    </div>

    <div class="footer">
        <div class="footer-content" id="navbarNav">
            <div class="footer-section about">
                <h2><span><?php echo $lang['a'] ?></span><?php echo $lang['a-'] ?> <span><?php echo $lang['e1'] ?></span><?php echo $lang['e1-'] ?> <span> <?php echo $lang['e2']?></span><?php echo $lang['e2-'] ?> </h2>
                    <div class="contact">
                        <span><i class="fa fa-phone"></i> &nbsp; 111-111-111</span>
                        <span><i class="fa fa-envelope"></i> &nbsp; name@gmail.com</span>
                    </div>
                    <div class="socials">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-f"></i></a>
                        <a href="https://twitter.com/explore" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://accounts.snapchat.com/" target="_blank"><i class="fa fa-snapchat"></i></a>
                    </div>
            </div>

            <div class="footer-section contact-form">
            
                <h2><?php echo $lang['cn'] ?></h2>
                <br>
                <form id="contacter" action="http://localhost/programmation-web-2---s4---2020-master/assets/php/server.php" method="post">
                    
                    <input type="text" class="text-input contact-input" name="email" id="email" placeholder="<?php echo $lang['em'] ?>" >
                    
                    <textarea type="textarea" class="text-input contact-input" name="textarea" id="msg" placeholder="<?php echo $lang['r'] ?>" ></textarea>
                    
                    <button type="submit" id="envoyer" class="btn2 btn-big" name="envoyer">
                        <i class="fa  fa-envelope "></i>
                        <?php echo $lang['s'] ?>
                    </button>
                    
                </form>
            </div>

            <div class="footer-section links">
            
                <div class="all" id="footer">
                    <a  href="?lang=en"> <?php echo $lang['en'] ?> </a> ¦ <a  href="?lang=fr"><?php echo $lang['fr'] ?> </a>¦ <a  href="?lang=ar"><?php echo $lang['ar'] ?> </a>
                </div>
                <p id="erreur"></p>
                <h3 class="down"> <?php echo $lang['pa'] ?> </h3>
                <a href="<?php echo $lang['link1'] ?>">
                    <button id="btnScrollToTop">
                        <i class="fa  fa-arrow-right arrow "></i>
                    </button>
                </a>
                

            </div>
        </div>

        <div class="footer-bottom">
        <?php echo $lang['fb'] ?>
        </div>
    </div>




<script src="http://localhost/programmation-web-2---s4---2020-master/assets/js/js.js"></script>


</footer> 
</body>



</html>

