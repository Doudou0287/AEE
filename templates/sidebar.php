<?php include 'lang.php';?>
<link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/css/sidebar.css">

<div id="sidebar">

<div class="toggle-btn" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
</div>

<ul>
    <!-- <li>
        <div class="container-fluid tmargin">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                </button>
                </span>
            </div>
        </div>
    </li> -->

    
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link10'] ?>'">
        <span class="glyphicon glyphicon-search">&nbsp;</span><?php echo $lang['page'] ?> 
    </button></li>
    
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link2'] ?>'">
        <span class="glyphicon glyphicon-calendar">&nbsp;</span> <?php echo $lang['page2'] ?> 
    </button></li>
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link3'] ?>'">
    <span class="glyphicon glyphicon-shopping-cart">&nbsp;</span> <?php echo $lang['page3'] ?> 
    </button></li>
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link4'] ?>'">
    <span class="glyphicon glyphicon-log-in">&nbsp;</span><?php echo $lang['page4'] ?> 
    </button></li>
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link5'] ?>'">    
        <span class="glyphicon glyphicon-envelope">&nbsp;</span><?php echo $lang['page5'] ?> 
    </button>
    </li>
    <li style="padding: 15px 40px 10px 40px; ">
    <a class="a"  target='_blank' href='http://localhost/programmation-web-2---s4---2020-master/assets/php/chat.php' >   
        <span class="glyphicon glyphicon-comment">&nbsp;</span><?php echo $lang['page6'] ?> 
    </a>
    </li>
    <li style="padding: 15px 30px;">
    <button  onclick="location.href='<?php echo $lang['link1'] ?>'">
        <span class="glyphicon glyphicon-education">&nbsp;</span><?php echo $lang['page1'] ?> 
    </button></li>
</ul>
</div>
