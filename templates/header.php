<?php include('lang.php');?>
<head>
    <title><?php echo $lang['a'] ?> <?php echo $lang['e1'] ?> <?php echo $lang['e2'] ?></title>

    <meta charset="UTF-8">
    <meta name="description" content="Association Étudiant-es Étranger-es">
    <meta name="keywords" content="Commercials,  événements">
    <meta name="author" content="Sundus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>
    <body>





    <link rel="stylesheet" href="http://localhost/programmation-web-2---s4---2020-master/assets/.css/header.css">


    <header>
        <div class="nav-bar">

            <nav class="navbar navbar-expand-lg navbar-light ">


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i> 
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav item">
                            <a href="<?php echo $lang['link1'] ?>">
                                <h2 class="logotext" alt="logotext"><?php echo $lang['a'] ?> <?php echo $lang['e1'] ?> <?php echo $lang['e2'] ?></h2>
                            </a>


                        </li>


                        

                        <li class="nav item">
                            <div class="search-box">
                                <input class="search-txt" type="text" name="" placeholder="<?php echo $lang['r'] ?>">
                                <a class="search-btn" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>

                        </li>

                        
                        <li class="nav item">
                            <h1 id="titlebine" class="text-center"></h1>
                        </li>

                        <li class="nav item">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-globe"></span>
                                </button>
                                    <div class="dropdown-menu" role="menu" aria-labelledby="menu1">

                                        <ul>
                                        <li value="English" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="http://localhost/programmation-web-2---s4---2020-master/?lang=en">
                                            <?php echo $lang['en'] ?>
                                            </a>
                                        </li>

                                        <li value="Francais" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="http://localhost/programmation-web-2---s4---2020-master/?lang=fr">
                                            <?php echo $lang['fr'] ?>
                                            </a>
                                        </li>

                                        <li value="arabe" role="presentation">
                                            <a role="menuitem" tabindex="-1" href="http://localhost/programmation-web-2---s4---2020-master/?lang=ar">
                                            <?php echo $lang['ar'] ?> 
                                            </a>
                                        </li>
                                        </ul>
                                
                            </div>

                        </li>
                    </ul>
                </div>

            </nav>



        </div>

    </header>

